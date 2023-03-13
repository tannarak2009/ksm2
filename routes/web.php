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
    return view('index', [
        'name' => 'Tan Tawan',
        'workplace' => 'MoHR',
    ]);
    //return '<h1>Tan Tawan</h1>';
});

//Route::method('url',response);
//response => functon, controller;
