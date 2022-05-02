<?php

namespace App\Http\Controllers\Estimate;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Estimate;
use App\Models\EstimateGood;
use App\Models\Good;
use Illuminate\Http\Request;

class DeleteSeveralController extends Controller
{
    public function __invoke(Request $request)
    {
        for ($i=0;$i<count($request->CheckedIds);$i++)
        {
            $estimate = Estimate::where('id',(int)$request->CheckedIds[$i])->first();
            $goods = EstimateGood::where('estimate_id',(int)$request->CheckedIds[$i])->get();
            foreach ($goods as $good)
            {
                $good->delete();
            }

            $estimate->delete();
        }
        $estimates = Estimate::where('user_id',auth()->user()->id)->orderBy('created_at', 'DESC')->paginate(10);
        return view('ajax.single_estimate', compact('estimates'))->render();
    }
}
