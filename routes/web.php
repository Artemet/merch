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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function (){
    return view('home');
});
Route::get('/about_web', function (){
    return view('about_web');
});
Route::get('/channel', function (){
    return view('channel');
});
Route::get('/about_me', function (){
    return view('about_me');
});
Route::get('/payment', function (){
    return view('payment');
});
Route::get('/delivery', function (){
   return view('delivery');
});
Route::get('/question', function (){
    return view('question');
});
