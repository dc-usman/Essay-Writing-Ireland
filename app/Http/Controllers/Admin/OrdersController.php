<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderQuery;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        if($request->ajax()){
            $orders = Order::orderBy('id', 'DESC')->get(['id', 'paper_topic', 'deadline', 'academic_level', 'subject_area', 'cost_per_page', 'total_price', 'is_complete' ]);
            return datatables()->of($orders)
            ->addColumn('actions', function ($row) {
                $html = '<div class="btn-group" role="group">';
                $html .= '<a href="'.route('admin.orders.show', $row->id ).'" class="btn btn-sm btn-primary"><i class="bi bi-eye"></i></a>';
                $html .= '</div>';
                return $html;
            })
            ->editColumn('subject_area', function ($row) {
                return $row->subject->name;
            })
            ->editColumn('cost_per_page', '{{ addCurrency($cost_per_page)}} ')
            ->editColumn('total_price', '{{ addCurrency($total_price)}} ')
            ->editColumn('is_complete', '{{ $is_complete ? "Completed" : "Incomplete" }} ')
            ->rawColumns(["actions"])
            ->toJson();
        }

        return view('admin.order.index');

    }

    public function show( $id)
    {
        $order =  Order::findOrFail($id);

        // return $order->files;

        return view('admin.order.show', compact('order'));
    }

    public function complete(Request $request,$id)
    {
        $request->is_complete == "on" ? $request->merge(['is_complete' => true]) : $request->merge(['is_complete' => false]);

        $order = Order::findOrFail($id);

        $order->update($request->all());

        return redirect()->route('admin.orders.index');
    }

    public function query()
    {
        $queries = OrderQuery::all();

        // return $queries;

        return view('admin.queries.index', compact('queries'));
    }

    public function queryShow($id)
    {
        $query = OrderQuery::find($id);

        return view('admin.queries.show', compact('query'));
    }
}
