<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'layout/master');

// Route::view('/', 'welcome');
// jika ingin menampilkan view saja 
Route::view('/contact', 'contact');

Route::view('/about', 'about');
