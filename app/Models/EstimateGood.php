<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstimateGood extends Model
{
    use HasFactory;

    protected $table = 'estimate_good';
    protected $guarded = false;
}
