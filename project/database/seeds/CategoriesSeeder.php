<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Category::class, 2)->create([
        // "title" => "Bebelin"
        // ]);

        DB::table('categories')->insert([
            "title" => "Hoodies"
        ]);
    }
}
