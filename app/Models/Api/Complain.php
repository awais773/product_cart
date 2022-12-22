<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    use HasFactory; 
    protected $fillable = [
        'problem',
        'user_id',
        'product_id',

    ];

    public function product() {
        return $this->hasOne('App\Models\Api\Product', 'id', 'product_id');
    }
    public function user() {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
