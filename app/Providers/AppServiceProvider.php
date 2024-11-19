<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('layouts.app-templates.header', function($view){
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

            $view->with([
                'cartItems' => $cartItems,
                'categories' => Category::all()->sortBy('name'),
            ]);
        });
    }
}
