<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Product::class, 30)->create([]);


        Product::create([
            "name" => "Adan",
            "products_category_id_foreign" => 1,
        ]);
    }
}
