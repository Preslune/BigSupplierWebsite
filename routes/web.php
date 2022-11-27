<?php

use App\Http\Controllers\books;
use App\Http\Controllers\booksdetail;
use App\Http\Controllers\categories;
use App\Http\Controllers\publishers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [books::class, 'index'])->name('home');

Route::get('category/{name}',[categories::class, 'index'])->name('category');

Route::get('publisher',[publishers::class, 'index'])->name('publishers');

Route::get('book/{id}',[booksdetail::class, 'index'])->name('books');

Route::get('contact', function () {
    return view('contact');
})->name('contact');