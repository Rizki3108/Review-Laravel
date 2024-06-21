<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public $fillable = ['id', 'name_brands'];
    public $timestamps = true;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
