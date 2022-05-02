<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Good;
use Illuminate\Http\Request;

class KeramikController extends Controller
{
    public function __invoke()
    {
        $keramiks = Good::where('category_id',1)->get();
        $inCarts = [];
        if (auth()->user()!=null)
        {
            $cart = Cart::find(auth()->user()->id);
            foreach ($keramiks as $keramik)
            {
                foreach ($cart->goods as $good)
                {
                    if ($keramik->name == $good->name)
                    {
                        $inCarts[] = $good->id;
                    }
                }
            }
        }
        return view('includes.keramik.single_keramik', compact('keramiks', 'inCarts'));
//        $cart = Cart::find(auth()->user()->id);
//        $inCarts = [];
//        foreach ($keramiks as $keramik)
//        {
//            foreach ($cart->goods as $good)
//            {
//                if ($keramik->name == $good->name)
//                {
//                    $inCarts[] = $good->id;
//                }
//
//            }
//        }
////        dd($inCarts);
//
    }
}
