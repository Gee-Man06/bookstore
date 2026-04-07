<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;
use Bootstrap\app;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/books', function(){
//     return view('books');
// });

Route::get('/books', [bookController::class, 'index']);
Route::get('/books/{id}', [bookController::class, 'show']);
Route::get('/contact', function(){
    return view('contact');
})->name('contact');
Route::get('/restricted', function(){
    return "Welcome to the resticted page";
})->middleware('check.age');