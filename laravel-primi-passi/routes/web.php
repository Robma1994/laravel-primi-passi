<?php

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
//web.php è il nostro vigile. 
Route::get('/', function () {
    
    return view('homepage');
});
Route::get('/giochi', function () {
    return view('giochi');
    
});
