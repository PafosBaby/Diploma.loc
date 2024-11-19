<?php

use App\Models\Cart;

function getCartTotal(){
    $user =auth()->user();
    $session = session()->getId();
    if($user){
        $cart =  Cart::where('user_id', $user->id)->get();
    }else{
        $cart = Cart::where('session_id', $session)->get();
    }

    $total = 0;

    foreach($cart as $cartItem){
        $subTotal = $cartItem->qty * $cartItem->price;
        $total += $subTotal;
    }

    return number_format($total, 2, '.' , ' ');
}

