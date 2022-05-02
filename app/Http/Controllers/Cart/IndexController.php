<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartGood;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $cart = Cart::find(auth()->user()->id);
//        $goods = CartGood::where('cart_id', $cart->id);
        $goods = $cart->goods;
//        $goods_sorted = $goods->sortKeysDesc();
//        $goods_sorted->values()->all();
//        $goods_orderedBy = $goods->sortBy('created_at', 'DESC');
//        $goods = CartGood::where('cart_id',auth()->user()->id)->take();
//        dd($goods[1]->pivot->is_checked);
//        $good = $goods[2]->pivot->cart_id;
//        dd($good);

        return view('cart', compact('goods'));
    }
}
