<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index ()
    {
        return view('admin.orders.index', [
            'orders'    => Order::latest()->get()
        ]);
    }

    public function changeStatusPage($id)
    {
        return view('admin.orders.edit', [
            'order'    => Order::find($id)
        ]);
    }

    public function updateOrderStatus(Request $request, $id)
    {
        Order::find($id)->update(['status' => $request->status]);
        return redirect('/admin/orders')->with('success', 'Order status changed successfully');
    }
}
