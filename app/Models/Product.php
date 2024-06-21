<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = ['id', 'name_products', 'stock', 'price', 'description', 'id_brand'];
    public $timestamps = true;

    public function brands()
    {
        return $this->belongsTo(Brand::class, 'id_brand');
    }
}
