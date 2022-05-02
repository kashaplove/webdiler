<?php

namespace App\Http\Controllers\Estimate;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Estimate;
use App\Models\Good;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $estimates = Estimate::where('user_id',auth()->user()->id)->orderBy('created_at', 'DESC')->paginate(10);
        return view('estimate.index',compact('estimates'));
    }
}
