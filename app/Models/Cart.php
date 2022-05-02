<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = false;
    protected $table = 'carts';

    public function goods() {
        return $this->belongsToMany(Good::class)->withPivot('id','good_id','cart_id','number_of_goods','is_checked');
    }
}
