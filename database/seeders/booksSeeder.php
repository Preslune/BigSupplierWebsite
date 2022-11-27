<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class booksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                "publishers_id" => 1,
                "title" => "Compilers Principles, Techniques, and Tools Aho Lam Sethi Ullman Second Edition",
                "author" => "Aho Lam Sethi Ullman",
                "year" => 2017,
                "synopsis" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "image" => "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/book-cover%2Ccover-design-template-5aba4e55a1fbd85eeab260326aca1285_screen.jpg?ts=1637011170"
            ],
            [
                "publishers_id" => 1,
                "title" => "Simple Program Design: A Step-by-Step Approach",
                "author" => "Lesley Ann Robertson",
                "year" => 2017,
                "synopsis" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "image" => "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/book-cover%2Ccover-design-template-5aba4e55a1fbd85eeab260326aca1285_screen.jpg?ts=1637011170"
            ],
            [
                "publishers_id" => 3,
                "title" => "Roosevelt Turtle",
                "author" => "Paulette Bourgeois",
                "year" => 2000,
                "synopsis" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "image" => "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/book-cover%2Ccover-design-template-5aba4e55a1fbd85eeab260326aca1285_screen.jpg?ts=1637011170"
            ],
            [
                "publishers_id" => 4,
                "title" => "Aria",
                "author" => "Lisa Efferson",
                "year" => 2010,
                "synopsis" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "image" => "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/book-cover%2Ccover-design-template-5aba4e55a1fbd85eeab260326aca1285_screen.jpg?ts=1637011170"
            ],
            [
                "publishers_id" => 4,
                "title" => "Elizabeth Ramic",
                "author" => "J.K Howling",
                "year" => 1994,
                "synopsis" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "image" => "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/book-cover%2Ccover-design-template-5aba4e55a1fbd85eeab260326aca1285_screen.jpg?ts=1637011170"
            ],
            [
                "publishers_id" => 2,
                "title" => "Cat Man",
                "author" => "Kevin Johnson",
                "year" => 2002,
                "synopsis" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "image" => "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/book-cover%2Ccover-design-template-5aba4e55a1fbd85eeab260326aca1285_screen.jpg?ts=1637011170"
            ],
            [
                "publishers_id" => 4,
                "title" => "Fire on the Moon",
                "author" => "Mark Foster",
                "year" => 2004,
                "synopsis" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "image" => "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/book-cover%2Ccover-design-template-5aba4e55a1fbd85eeab260326aca1285_screen.jpg?ts=1637011170"
            ],
            [
                "publishers_id" => 4,
                "title" => "Mon Amour",
                "author" => "Leslie Parrish",
                "year" => 2012,
                "synopsis" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "image" => "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/book-cover%2Ccover-design-template-5aba4e55a1fbd85eeab260326aca1285_screen.jpg?ts=1637011170"
            ],
            [
                "publishers_id" => 2,
                "title" => "Mad Cow",
                "author" => "Jeff Driller",
                "year" => 2004,
                "synopsis" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "image" => "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/book-cover%2Ccover-design-template-5aba4e55a1fbd85eeab260326aca1285_screen.jpg?ts=1637011170"
            ],
            [
                "publishers_id" => 4,
                "title" => "Wonderlight",
                "author" => "Leslie Parrish",
                "year" => 2012,
                "synopsis" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "image" => "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/book-cover%2Ccover-design-template-5aba4e55a1fbd85eeab260326aca1285_screen.jpg?ts=1637011170"
            ],
            [
                "publishers_id" => 2,
                "title" => "Hey Chicken",
                "author" => "Jeff Driller",
                "year" => 2004,
                "synopsis" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "image" => "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/book-cover%2Ccover-design-template-5aba4e55a1fbd85eeab260326aca1285_screen.jpg?ts=1637011170"
            ],
            [
                "publishers_id" => 2,
                "title" => "Croc o' Rock",
                "author" => "Kevin Johnson",
                "year" => 2002,
                "synopsis" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "image" => "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/book-cover%2Ccover-design-template-5aba4e55a1fbd85eeab260326aca1285_screen.jpg?ts=1637011170"
            ]
        ]);
    }
}
