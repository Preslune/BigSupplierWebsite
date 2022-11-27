<?php

namespace Database\Seeders;

use App\Http\Controllers\categories;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $classes = [
            publishersSeeder::class,
            categoriesSeeder::class,
            booksSeeder::class,
            books_categorySeeder::class,
        ];
        $this->call($classes);
    }
}
