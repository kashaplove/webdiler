<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Estimate;
use App\Models\Good;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tag;

class MainController extends Controller
{
    public function index(){
        return view('main');
    }
}
