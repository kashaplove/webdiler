<?php

namespace App\Http\Controllers\Cart\Keramik;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartGood;
use App\Models\Good;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $req_good = Good::find($request->id);

        $request_goods = Good::where('category_id',$req_good->category_id)->get();
        $cart = Cart::find(auth()->user()->id);
        CartGood::create([
            'good_id' => $request['id'],
            'cart_id' => $cart->id,
            'number_of_goods' => 1,
        ]);
        $inCarts = [];
        foreach ($request_goods as $request_good)
        {
            foreach ($cart->goods as $good)
            {
                if ($request_good->name == $good->name)
                {
                    $inCarts[] = $good->id;
                }

            }
        }
        if ($req_good->category_id === 1)
        {
            return view('ajax.single_keramik', compact('request_goods', 'inCarts'))->render();
        }
        else return view('ajax.single_concrete', compact('request_goods', 'inCarts'))->render();

    }
}
