<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\CourseModule\Course;
use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;

class CartController extends Controller
{
    public function addToCart(Request $request, $courseId)
    {
        $this->course   = Course::find($courseId);
        \Cart::add([
            'id' => $this->course->id, // inique row ID
            'name' => $this->course->title,
            'price' => $this->course->price,
            'quantity' => 1,
            'attributes' => [
                'total_hours'   => $this->course->total_hours,
                'image'         => $this->course->image
            ]
        ]);
        return response()->json([
            'message' => 'Product added in cart.',
            'totalProducts'  => \Cart::getContent()->count()
        ]);
//        return \Cart::getContent();
//        return back()->with('success', 'Course added to cart successfully.');
    }

    public function showCartItems()
    {
        return view('front.order.cart', [
            'cartItems' => \Cart::getContent(),
            'subTotal' => \Cart::getSubTotal(),
            'total' => \Cart::getTotal(),
        ]);
    }

    public function deleteCartItem($itemId)
    {
        \Cart::remove($itemId);
        return back()->with('success', 'Item deleted successfully.');
    }
    public function updateCartItem(Request $request, $itemId)
    {
        \Cart::update($itemId, [
            'quantity' => [
                'relative' => false,
                'value' => $request->qty
            ],
        ]);
        return back()->with('success', 'Item updated successfully.');
    }
}
