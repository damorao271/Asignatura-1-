<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Category;


class Product extends Model
{
    protected $table = "products";
    protected $fillable = [
        'name'
    ];
    //

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
