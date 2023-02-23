<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/aboutus', function () {
    return view('about-us');
});

Route::get('/allbrance', function () {
    return view('allbrance');
});

Route::get('/alldivision', function () {
    return view('alldivision');
});



