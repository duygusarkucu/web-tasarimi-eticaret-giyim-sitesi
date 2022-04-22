<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function get_photos(){
        return $this->hasMany(ProductImage::class,'product_id','id');
    }
}
