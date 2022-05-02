<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartGood;
use App\Models\Good;
use Illuminate\Http\Request;

class UpdateChBoxController extends Controller
{
    public function __invoke(Request $request)
    {
        $cart_good = CartGood::find($request->id);
        $cart_good->update([
            'id' => $request->id,
            'is_checked' => (boolean)$request->chBoxValue,
        ]);
    }
}
