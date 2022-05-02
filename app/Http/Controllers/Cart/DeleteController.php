<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartGood;
use App\Models\Good;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Request $request)
    {
        $cartGood = CartGood::find($request->id);
        $cartGood->delete();
        $cart = Cart::find(auth()->user()->id);
        $cartGoods = $cart->goods;
        return view('ajax.single_good_cart', compact('cartGoods'))->render();

    }
}
