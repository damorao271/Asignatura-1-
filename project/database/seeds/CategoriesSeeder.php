<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \app\Category;


class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::create([
            "title" => "T-Shirt"
        ]);

        DB::table("categories")->insert([
            "title" => "Hoodies",
        ]);
    }
}
