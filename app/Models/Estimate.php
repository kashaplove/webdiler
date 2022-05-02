<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
    use HasFactory;
    protected $guarded = false;
    protected $table = 'estimates';
    public function goods() {
        return $this->belongsToMany(Good::class)->withPivot('number_of_goods');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
