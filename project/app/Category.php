<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \app\Product;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = [
        'title'
    ];


    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
