<?php

namespace App\Http\Controllers\Web;

use App\AcademicLevel;
use App\Deadline;
use App\Fare;
use App\Http\Controllers\Controller;
use App\Http\Requests\GetFareRequest;
use App\Http\Requests\StoreOrderQueryRequest;
use App\Http\Requests\StoreOrderRequest;
use App\Mail\OrderQueryAdminMail;
use App\Mail\OrderQueryMail;
use App\OrderQuery;
use App\PaperType;
use App\Service;
use App\WebSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class PagesController extends Controller
{
    public function index()
    {
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::all();
        $services = Service::all();

        $web_setting = WebSetting::first();

        return view('pages.home', compact('web_setting', 'paper_types', 'academic_levels', 'deadlines', 'services'));
    }

    public function about()
    {

        // Artisan::call('cache:clear');
        // Artisan::call('config:cache');
        // dd("Cache is cleared");

        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function reviews()
    {
        return view('pages.reviews');
    }

    public function getFare(GetFareRequest $request)
    {
        return Fare::where(['academic_level_id' => $request->academic_level_id, 'deadline_id' => $request->deadline_id])->firstOrFail();
    }

    public function orderQuery(StoreOrderQueryRequest $request)
    {

        DB::beginTransaction();
            $query = OrderQuery::create($request->all());
            // Send mail to user
            Mail::to($query->email)->send(new OrderQueryMail($query));
            // Send mail to admin
            Mail::to(env('MAIL_FROM_ADDRESS', config('app.app_email')))->send(new OrderQueryAdminMail($query));
        DB::commit();

        return redirect()->back()->withSuccess('We receive your query successfully.');
    }

    public function sitemap()
    {
        $services = Service::orderBy('name', 'ASC')->get();

        return view('pages.sitemap', compact('services'));
    }

}
