<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Product $product)
    {
        $sessionId = session()->getId();
        $cartItem = Cart::where('session_id', $sessionId)->where('product_id', $product->id)->first();

        if($cartItem){
            $cartItem->update([
                'qty' => $cartItem->qty + 1,

            ]);
        }else{
            Cart::create([
                'session_id' => $sessionId,
                'product_id' => $product->id,
                'user_id' => auth()->user() ? auth()->user()->id : null,
                'price' => $product->price,
                'subtotal' => $product->price,

            ]);
        }

            $cartItems = 0;
            $user = auth()->user();
            if($user){
                $cart = Cart::where('user_id', $user->id)->get();
            }else{
                $cart = Cart::where('session_id', session()->getId())->get();
            }

            foreach($cart as $item){
                $cartItems += $item->qty;
            }
        return response()->json([
            'qty' => $cartItems,
        ]);
    }

    public function cartPage(){
        $user = auth()->user();
        $sessionId = session()->getId();

        if($user){
            $cartItems = Cart::where('user_id', $user->id)->get();
        }else{
            $cartItems = Cart::where('session_id', session()->getId())->get();

        }

        return view('cart', [
            'cartItems' => $cartItems,
        ]);
    }

    public function removeItem(Cart $cart){
        $cart->delete();
        return back();
    }
}
