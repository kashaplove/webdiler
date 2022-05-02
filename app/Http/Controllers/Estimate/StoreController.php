<?php

namespace App\Http\Controllers\Estimate;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Estimate;
use App\Models\EstimateGood;
use App\Models\Good;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        Estimate::create([
            'user_id' => auth()->user()->id,
            'name' => 'Сметный расчет №'
        ]);
        $estimates = Estimate::all();
        for($i=0;$i<count($request->checkedNames);$i++)
        {
            $good = Good::where('name',$request->checkedNames[$i])->first();
            $data = [
                'estimate_id' => $estimates->last()->id,
                'good_id' => $good->id,
                'number_of_goods' => (int)$request->checkedQty[$i],
            ];
            EstimateGood::create($data);
        }

    }
}
