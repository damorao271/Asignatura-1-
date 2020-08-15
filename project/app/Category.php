<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Product;

class Category extends Model
{
    protected $table = "categories";
    protected $fillable = [
        'title'
    ];


    public function profession()
    {
        return $this->belongsTo(Product::class);
    }
}
