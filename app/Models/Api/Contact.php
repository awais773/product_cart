<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory; 
    protected $fillable = [
        'reason',
        'user_id',
        'image',
        'message',

    ];
      
    public function user() {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
