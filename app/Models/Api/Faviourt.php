<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faviourt extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'user_id',
    ];


    public function product() {
        return $this->hasMany('App\Models\Api\Product', 'id', 'product_id');
    }
    public function user() {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
