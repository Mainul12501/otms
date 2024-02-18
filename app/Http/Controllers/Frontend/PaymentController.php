<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetails;
use Darryldecode\Cart\Cart;
use DGvai\SSLCommerz\SSLCommerz;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function checkout()
    {
        if (auth()->check())
        {
            $trxId = rand(10, 1000).uniqid();
            $sslc = new SSLCommerz();
            $sslc->amount(\Cart::getTotal())
                ->trxid($trxId)
                ->product('course Name')
                ->customer(auth()->user()->name,auth()->user()->email);
            return $sslc->make_payment();

        } else {
            return back()->with('error', 'You must login first.');
        }
    }

    public function success(Request $request)
    {
        $validate = SSLCommerz::validate_payment($request);
        if($validate)
        {
            $bankID = $request->bank_tran_id;   //  KEEP THIS bank_tran_id FOR REFUNDING ISSUE
            $order = Order::createOrder($request);
            OrderDetails::createOrderDetails($order->id);
            return redirect('/')->with('success', 'Your order placed successfully.');
        } else {
            return redirect('/show-cart-items')->with('error', 'Something went wrong. Please try again.');
        }

    }

    public function failure(Request $request)
    {
        return redirect('/show-cart-items')->with('error', 'Something went wrong. Please try again.');
    }
}
