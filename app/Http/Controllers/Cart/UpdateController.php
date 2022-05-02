<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartGood;
use App\Models\Good;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Request $request)
    {
        $pivot_id = (int)$request->pivotId;
        $cart_good = CartGood::find($pivot_id);
        $cart_good->update([
            'id' => (int)$request['pivotId'],
            'number_of_goods' => (int)$request['editedInput'],
        ]);
    }
}
