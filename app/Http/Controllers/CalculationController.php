<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartGood;
use App\Models\Good;
use Illuminate\Http\Request;

class CalculationController extends Controller
{
    public function index() {
        $concretes = Good::where('category_id', 2)->get();
        $cart = Cart::find(auth()->user()->id);
        $inCarts = [];
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
        return view('calculations.slab_foundation',compact('concretes','inCarts'));
    }

    public function slabFoundation() {
        return view('ajax.calculations.slab_foundation')->render();
    }

    public function freezingDepth() {
        return view ('ajax.calculations.freezing_depth')->render();
    }

    public function bricks() {
        return view ('ajax.calculations.bricks')->render();
    }
    public function wallBlocks() {
        return view ('ajax.calculations.wall_blocks')->render();
    }
    public function foamBlocks() {
        return view ('ajax.calculations.foam_blocks')->render();
    }
    public function keramikBlocks() {
        return view ('ajax.calculations.keramik_blocks')->render();
    }
    public function concreteBlocks() {
        return view ('ajax.calculations.concrete_blocks')->render();
    }
    public function hardConcrete() {
        return view ('ajax.calculations.hard_concrete')->render();
    }
    public function lightConcrete() {
        return view ('ajax.calculations.light_concrete')->render();
    }
    public function buildingMixture() {
        return view ('ajax.calculations.building_mixture')->render();
    }

    public function getGoods(Request $request) {
        $productsNotSorted = Good::where('category_id', $request->id)->get();
        $products = [];
        foreach ($productsNotSorted as $productNotSorted)
        {
            if (str_contains($productNotSorted->name, $request->name)) {
                $products[] = $productNotSorted;
            }
        }
        $cart = Cart::find(auth()->user()->id);
        $inCarts = [];
        foreach ($products as $product)
        {
            foreach ($cart->goods as $good)
            {
                if ($product->name == $good->name)
                {
                    $inCarts[] = $good->id;
                }
            }
        }
        return view('ajax.calculations.goods', compact('products','inCarts'));
    }

    public function addToCart(Request $request) {
        $req_good = Good::find($request->id);

        $request_goods = Good::where('category_id',$req_good->category_id)->get();
        $cart = Cart::find(auth()->user()->id);
//        return (isset($request->number)) ? $request->number : 1;
        CartGood::create([
            'good_id' => $request['id'],
            'cart_id' => $cart->id,
            'number_of_goods' => (isset($request->number)) ? $request->number : 1,
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
        $products = [];
        foreach ($request_goods as $request_good)
        {
            if (str_contains($request_good->name, $request->name)) {
                $products[] = $request_good;
            }
        }
        return view('ajax.calculations.goods', compact('products','inCarts'));

    }

}
