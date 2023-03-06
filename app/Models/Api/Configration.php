<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configration extends Model
{
    use HasFactory;
    protected $guarded = [];
    

    protected $casts = [
        'probability' => 'array' ,
    ];
}
