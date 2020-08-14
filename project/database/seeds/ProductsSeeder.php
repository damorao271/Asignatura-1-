<?php

use Illuminate\Database\Seeder;
use \app\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            "name" => "Apolo",
            "product_id" => 1,
            "description" => "Este producto es calidad",
            "price" => 12,
            "for_sale" => true,
        ]);
    }
}
