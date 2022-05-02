<?php

namespace App\Http\Controllers\Estimate;

use App\Http\Controllers\Controller;
use App\Models\CartGood;
use App\Models\Category;
use App\Models\Estimate;
use App\Models\Good;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Estimate $estimate)
    {
        $estimate_goods = $estimate->goods;
        $goods_in_cart = CartGood::where('cart_id', auth()->user()->id)->get();
        foreach ($goods_in_cart as $good_in_cart)
        {
            $good_in_cart->update([
                'is_checked' => 0
            ]);
        }
        foreach ($estimate_goods as $good)
        {
            CartGood::create([
                'good_id' => $good->id,
                'cart_id' => auth()->user()->id,
                'number_of_goods' => $good->pivot->number_of_goods,
                'is_checked' => 1,
            ]);
        }

        return redirect()->route('cart.index');
    }
}
