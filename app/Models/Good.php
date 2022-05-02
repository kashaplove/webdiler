<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    use HasFactory;
    protected $guarded = false;
    protected $table = 'goods';

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function estimates() {
        return $this->belongsToMany(Estimate::class);
    }
    public function carts() {
        return $this->belongsToMany(Cart::class)->withPivot('is_checked');;
    }
}
