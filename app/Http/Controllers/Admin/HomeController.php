<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function home()
    {
       return view('admin.app');
    }

    public function dashboard()
    {
        $tab = "Dashboard";
        $sales = DB::table('orders')
            ->select(DB::raw('year(orders.created_at) as year, sum(order_details.total) as sales'))
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->where('status', 2)           
            ->groupBy('year')
            ->get();
        $order = DB::table('orders')
            ->select(DB::raw('count(orders.id) as ordernum'))
            ->where('status', 2)
            ->get();
        $user = DB::table('users')
            ->select(DB::raw('count(users.id) as user'))
            ->where('role_id', 1)
            ->get();
        return view('admin.dashboard', compact([
            "tab",'sales','order','user'
        ]));
    }

    public function chart()
    {
        $chart = DB::table('orders')
            ->select(DB::raw('month(orders.created_at) as month, sum(order_details.quantity) as product'))
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->where('status', 2)         
            ->groupBy('month')
            ->get();      
       
        return response()->json([
            'list' => $chart
        ]);
       
       
    }
    public function filterchart(Request $request)
    {
        // SELECT month(o.`created_at`)as month, SUM(ord.quantity) as sumproduct, SUM(ord.total) as totalproduct 
        // FROM `orders` as o JOIN `order_details` as ord ON o.id = ord.order_id 
        // WHERE o.status = 2 
        // GROUP BY month;
       
        $data = $request->all();
        $fromDate = $data['fromDate'];
        $toDate = $data['toDate'];
        
        $profit = DB::table('orders')
            ->select(DB::raw('date(orders.created_at) as dates, sum(order_details.quantity) as qlt, sum(order_details.total) as total'))
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->where('status', 2)   
            ->whereBetween('orders.created_at',[$fromDate, $toDate])                   
            ->groupBy('dates')
            ->get();
        // return response()->json([
        //         'list' => $profit
        //     ]);
        foreach($profit as $val){
            $chart_data[] = array (
                'preriod' => $val -> dates,
                'quantity' => $val -> qlt,
                'sales' => $val -> total
            );
        }
            echo $data = json_encode($chart_data);       
       
    }
    public function filterdashboard(Request $request)
    {
        $data = $request->all();
        $dauthangnay = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
        $dauthangtruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
        $cuoithangtruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();
        $sub7ngay = Carbon::now('Asia/Ho_Chi_Minh')->subDays(7)->toDateString();
        $sub365ngay = Carbon::now('Asia/Ho_Chi_Minh')->subDays(365)->toDateString();
        $now = Carbon::tomorrow('Asia/Ho_Chi_Minh')->toDateString();
        
        if($data['dashboard_value'] == '7ngay'){
            $get= DB::table('orders')
            ->select(DB::raw('date(orders.created_at) as dates, sum(order_details.quantity) as qlt, sum(order_details.total) as total'))
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->where('status', 2)   
            ->whereBetween('orders.created_at',[$sub7ngay, $now])                   
            ->groupBy('dates')
            ->get();
        }elseif($data['dashboard_value'] == 'thangtruoc'){
            $get= DB::table('orders')
            ->select(DB::raw('date(orders.created_at) as dates, sum(order_details.quantity) as qlt, sum(order_details.total) as total'))
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->where('status', 2)   
            ->whereBetween('orders.created_at',[$dauthangtruoc, $cuoithangtruoc])                   
            ->groupBy('dates')
            ->get();
        }elseif($data['dashboard_value'] == 'thangnay'){
            $get= DB::table('orders')
            ->select(DB::raw('date(orders.created_at) as dates, sum(order_details.quantity) as qlt, sum(order_details.total) as total'))
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->where('status', 2)   
            ->whereBetween('orders.created_at',[$dauthangnay, $now])                   
            ->groupBy('dates')
            ->get();
        }else{
            $get= DB::table('orders')
            ->select(DB::raw('date(orders.created_at) as dates, sum(order_details.quantity) as qlt, sum(order_details.total) as total'))
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->where('status', 2)   
            ->whereBetween('orders.created_at',[$sub365ngay, $now])                   
            ->groupBy('dates')
            ->get();
        }
        foreach($get as $val){
            $chart_data[] = array (
                'preriod' => $val -> dates,
                'quantity' => $val -> qlt,
                'sales' => $val -> total
            );
        }
            echo $data = json_encode($chart_data);  
    }
}
