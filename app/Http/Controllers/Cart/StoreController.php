<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartGood;
use App\Models\Good;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $editingGood = Good::find($request->id);
        $keramiks = Good::where('category_id',$editingGood->category_id)->get();
        $cart = Cart::find(auth()->user()->id);
        CartGood::create([
            'good_id' => $request['id'],
            'cart_id' => $cart->id,
            'number_of_goods' => 1,
        ]);
        $inCarts = [];
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
        return view('ajax.single_keramik', compact('keramiks', 'inCarts'))->render();
    }
}
