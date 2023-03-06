<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyBonus extends Model
{
    use HasFactory;
    protected $guarded = [];


    // public function user() {
    //     return $this->hasOne('App\Models\User', 'id', 'user_id');
    // }
}
