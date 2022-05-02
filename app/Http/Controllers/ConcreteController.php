<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Good;
use Illuminate\Http\Request;

class ConcreteController extends Controller
{
    public function __invoke()
    {
        $concretes = Good::where('category_id',2)->get();

        $inCarts = [];
        if (auth()->user()!=null)
        {
            $cart = Cart::find(auth()->user()->id);
            foreach ($concretes as $concrete)
            {
                foreach ($cart->goods as $good)
                {
                    if ($concrete->name == $good->name)
                    {
                        $inCarts[] = $good->id;
                    }

                }
            }
        }
        return view('includes.concrete.single_concrete', compact('concretes','inCarts'));

    }
}
