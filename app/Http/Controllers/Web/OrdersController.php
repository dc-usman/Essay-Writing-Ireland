<?php

namespace App\Http\Controllers\Web;

use App\AcademicLevel;
use App\Country;
use App\Deadline;
use App\Events\OrderCreated;
use App\Fare;
use App\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Mail\OrderAdminMail;
use App\Mail\OrderMail;
use App\Order;
use App\PaperType;
use App\ReferenceStyle;
use App\Subject;
use App\WebSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrdersController extends Controller
{
    public function create()
    {
        $web_setting = WebSetting::first();
        $paper_types = PaperType::all();
        $subjects = Subject::all();
        $reference_styles = ReferenceStyle::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::all();
        $countries = Country::all();

        return view('pages.order', compact('paper_types', 'subjects', 'reference_styles', 'academic_levels', 'deadlines', 'countries', 'web_setting'));
    }

    public function success()
    {
        return view('pages.order-success');
    }

    public function store(StoreOrderRequest $request)
    {
        // return $request->all();

        // Validating Multiple Files
        if ($request->hasfile('emailAttachments')) {
            $fileSize = 0;
            $fileQty = 0;
            foreach ($request->file('emailAttachments') as $file) {
                $fileSize += $file->getSize();
                $fileQty = $fileQty + 1;
            }

            if ($fileQty > 10) {
                $request->session()->flash('message', 'file quantity exceeded the limit.');
                return redirect()->route('order.now');
            }

            if ($fileSize >  25000000) {
                $request->session()->flash('message', 'file size exceeded the limit.');
                return redirect()->route('order.now');
            }
        }

        //Dynamic getting price from database according to deadline and Academic level
        $fare = Fare::where(['academic_level_id' => $request->academic_level, 'deadline_id' => $request->deadline])->firstOrFail();

        $request->merge([
            'cost_per_page' => $fare->per_page_price,
            "total_price" => ($fare->per_page_price * $request->number_of_pages),
            'academic_level' => $fare->academic_level->name,
            'deadline' => $fare->deadline->name,
        ]);

        $files = [];

        //placing order with files (if have some) and sending email
        DB::beginTransaction();
            //placing order
            $order = Order::create($request->all());
            $styleName=$order->styleFunc->name;
            $paperTypeName=$order->Papertype->name;
            $subjectName=$order->subject->name;
            // return $order->styleFunc->name  ;
            
            // return $order;
            // check if have some files attache tha add into db with respect to order id
            if ($request->hasfile('emailAttachments')) {
                foreach($request->file('emailAttachments') as $file)
                {
                    $fileName = uniqid().'_'.time().'_'.$file->getClientOriginalName();
                    $filePath = $file->storeAs( 'uploads' , $fileName, 'public');

                    array_push( $files, $filePath);

                    File::create([
                         "order_id" => $order->id,
                         "file_path" => $filePath
                    ]);
                }
            }
        //     return $filePath;
            // Send mail to user
            Mail::to($request->email)->send(new OrderMail($request, $files,$styleName,$paperTypeName,$subjectName));

            // Send mail to admin
             Mail::to(env('MAIL_FROM_ADDRESS', config('app.app_email')) )->send(new OrderAdminMail($request, $files, $styleName,$paperTypeName,$subjectName));

        DB::commit();

        // return response()->json(['success'=>"Thank you for showing your intrest, We've receive your query successfully."]);
        return redirect()->back()->withSuccess("Thank you for showing your intrest, We've receive your query successfully.");
    }
}

