<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                "name" => "Romance"
            ],
            [
                "name" => "Fantasy"
            ],
            [
                "name" => "Children"
            ],
            [
                "name" => "Education"
            ]
        ]);
    }
}

