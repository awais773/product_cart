<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'store_name',
        'kosher_status',
        'barcode',
        'description',
        'manufacturer',
        'distributer_id',
        'category_id',
        'product_family',
        'packing',
        'diet',
        'supervisor',
        'ingredients',
        'product_image',
        'user_id',
        'note',
        'status',
        'germany_name',
        'hebrew',
        'faviourt_count'

    ];

    public function setFilenamesAttribute($value)
    {
        $this->attributes['product_image'] = json_encode($value);
    }
    // protected $casts = [
    //     "product_image" => "array",

    // ];

    public function category() {
        return $this->hasOne('App\Models\Api\Category', 'id', 'category_id');
    }
    public function distributer() {
        return $this->hasOne('App\Models\Api\Distributer', 'id', 'distributer_id');
    }

    public function user() {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function fviourtUser() {
        return $this->hasMany(Faviourt::class, 'product_id', 'id');  
    }

    public function productImage() {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');  
    }

    public function complain(){
        return $this->belongsTo(Complain::class);
      }


    //   public function productImages() {
    //     return $this->hasMany('App\Models\Api\ProductImage', 'product_id', 'id');
    // }
}
