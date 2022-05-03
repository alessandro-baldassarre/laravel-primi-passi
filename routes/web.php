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
    $data = [
        'links' => [['name' => "Home"],['name' => "Products"],['name' => "Contacts"],['name' => "Services"]],
    ];
    return view('home', $data);
})->name ('Home');

Route::get('/contacts', function (){
    return view('contacts');
})->name ('Contacts');

Route::get('/products', function (){
    return view('products');
})->name ('Products');

Route::get('/services', function (){
    return view('services');
})->name ('Services');
