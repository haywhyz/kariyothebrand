<?php

namespace App\Http\Controllers;

use App\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
   public function step1()
   {
       if (Auth::check()) {
           return redirect()->route('checkout.shipping');
       }

       return redirect('login');
   }

    public function shipping()
    {
        return view('pages.shipping-info');
    }

    public function payment()
    {
        return view('pages.payment');
    }

}
