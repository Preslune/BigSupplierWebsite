<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class publishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            [
                "name" => "Edukasi Anak Mangga",
                "address" => "London, United Kingdom",
                "phone" => "02100001112",
                "email" => "EdukasiAnakMangga@publish.com",
                "image" => "https://i.picsum.photos/id/84/300/200.jpg?hmac=JWqMtNYwILpjKGVtd7daSwQ_mI5gcy70sUJb-3Jdu4M"
            ],
            [
                "name" => "Scholasticity",
                "address" => "New York, United States of America",
                "phone" => "02111120000",
                "email" => "Scholasticity@publish.com",
                "image" => "https://i.picsum.photos/id/84/300/200.jpg?hmac=JWqMtNYwILpjKGVtd7daSwQ_mI5gcy70sUJb-3Jdu4M"
            ],
            [
                "name" => "Anak Kaleng",
                "address" => "Toronto, ON, Canada",
                "phone" => "02100110012",
                "email" => "AnakKaleng@publish.com",
                "image" => "https://i.picsum.photos/id/84/300/200.jpg?hmac=JWqMtNYwILpjKGVtd7daSwQ_mI5gcy70sUJb-3Jdu4M"
            ],
            [
                "name" => "CollinsHarper",
                "address" => "New York,United States of America",
                "phone" => "02112001100",
                "email" => "CollinsHarper@publish.com",
                "image" => "https://i.picsum.photos/id/84/300/200.jpg?hmac=JWqMtNYwILpjKGVtd7daSwQ_mI5gcy70sUJb-3Jdu4M"
            ]
        ]);
    }
}
