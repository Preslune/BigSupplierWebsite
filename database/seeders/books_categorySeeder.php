<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class books_categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Romance Fantasy Children Education
        DB::table('books_category')->insert([
            [
                "books_id" => 1,
                "categories_id" => 4
            ],
            [
                "books_id" => 2,
                "categories_id" => 4
            ],
            [
                "books_id" => 3,
                "categories_id" => 3
            ],
            [
                "books_id" => 4,
                "categories_id" => 1
            ],
            [
                "books_id" => 4,
                "categories_id" => 2
            ],
            [
                "books_id" => 5,
                "categories_id" => 2
            ],
            [
                "books_id" => 6,
                "categories_id" => 3
            ],
            [
                "books_id" => 7,
                "categories_id" => 1
            ],
            [
                "books_id" => 8,
                "categories_id" => 1
            ],
            [
                "books_id" => 9,
                "categories_id" => 3
            ],
            [
                "books_id" => 10,
                "categories_id" => 1
            ],
            [
                "books_id" => 11,
                "categories_id" => 3
            ],
            [
                "books_id" => 12,
                "categories_id" => 3
            ],
        ]);
    }
}
