<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\ProductSize;
use App\Models\User;
use DB;
// use App\Http\Requests\OrderRequest;

class OrderController extends Controller
{
    protected $paginate = 15;
    
    public function index(Request $request)
    {    
        $tab = "Quản lý đơn hàng";
        $searchKey = null;
        $orders = Order::orderBy('status')->paginate($this->paginate);      
        if(!empty($request->keyword)){
            $searchKey = $request->keyword;                   
            $orders = Order::where(Order::raw('date(created_at)') ,$searchKey)->orderBy('status')->paginate($this->paginate);        
          ;
        }  
        if(!empty($request->status)){
            $orders = Order::where('status',$request->status)->paginate($this->paginate);
        }  
        return view('admin.order.index', compact([
            "tab",
            "orders",
        ]));
    }

    public function show($id)
    {
        $tab = "Quản lý đơn hàng / Chi tiết đơn hàng";
        $order = Order::findOrFail($id);
        $orderDetail = OrderDetail::whereOrderId($id)->get();

        if ($order->notification == 1) {
            $order->update([
                'notification' => 0
            ]);
        }

        return view('admin.order.detail', compact([
            "tab",
            "order",
            "orderDetail",
        ]));
    }
    
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $order->update([
            'status' => $request->status
        ]);

        return redirect()->route('orders.show', $id)->with('messageSuccess', 'Cập nhật đơn hàng thành công');
    }
    
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        if($order->status < 2){
            $orderDetail = OrderDetail::where('order_id', $id)->get();
            foreach($orderDetail as $item){
                $productSize = ProductSize::findOrFail($item['product_size_id']);
                $qlty = $productSize->quantity + $item['quantity'];
                $productSize->update([
                    'quantity' => $qlty,
                ]);
            }
        }
        
        if ($order) {
            $order->delete();
        
            return redirect()->route('orders.index')->with('messageSuccess', 'Xóa đơn hàng thành công');
        }
        
        return redirect()->route('orders.index')->with('messageSuccess', 'Không tồn tại');
        
    }
}
