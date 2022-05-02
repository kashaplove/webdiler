<?php

namespace App\Http\Controllers\Estimate;

use App\Http\Controllers\Controller;
use App\Models\Estimate;
use App\Models\EstimateGood;
use App\Models\Good;
use Illuminate\Http\Request;

class DoubleController extends Controller
{
    public function __invoke(Request $request) {
        $estimate = Estimate::find($request->id);
        Estimate::create([
            'user_id' => auth()->user()->id,
            'name' => 'Сметный расчет №'
        ]);
        $estimates = Estimate::where('user_id',auth()->user()->id)->get();
        foreach($estimate->goods as $good)
        {
            $data = [
                'estimate_id' => $estimates->last()->id,
                'good_id' => $good->id,
                'number_of_goods' => $good->pivot->number_of_goods,
            ];
            EstimateGood::create($data);
        }
        $estimates = Estimate::where('user_id',auth()->user()->id)->orderBy('created_at', 'DESC')->paginate(10);
        return view('ajax.single_estimate', compact('estimates'));
//        echo($estimate->goods[0]->pivot->number_of_goods);
    }
}
