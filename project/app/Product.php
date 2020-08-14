<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Category;



class Product extends Model
{
    protected $table = "products";

    protected $fillable = [
        'name', 'description', 'price', "for_sale"
    ];

    public function profession()
    {
        return $this->belongsTo(Category::class);
    }
}
