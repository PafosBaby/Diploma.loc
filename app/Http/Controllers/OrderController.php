<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function checkoutPage()
    {
        return view('checkout');
    }

    public function sendOrder(Request $request)
    {
      $order =  Order::create([
            'user_name' => $request->user_name,
            'user_surname' => $request->user_surname,
            'user_phone' => $request->user_phone,
            'user_email' => $request->user_email,
            'date' => now(),
        ]);

        $orderTotalPrice = 0;
        $cartItems = Cart::where('session_id', session()->getId())->get();
        foreach($cartItems as $item){
            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'price' => $item->price,
                'qty' => $item->qty,
                'subtotal' => $item->subtotal,

            ]);
            $orderTotalPrice += $item->qty * $item->subtotal;
            $item->delete();
        }
        $order->total = $orderTotalPrice;
        $order->save();

         Mail::to($order->user_email)->send(new OrderMail($order));
        return back();
    }
}
