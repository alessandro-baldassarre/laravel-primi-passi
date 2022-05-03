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
        'students' => [['firstName' => "Alessandro", 'lastName' => "Baldassarre"],['firstName' => "Giovanni", 'lastName' => "Salazar"], ['firstName' => "Andrea", 'lastName' => "Picasso"]],
        'courses' => [['name' => "Boolean"],['name' => "Udemy"]],
    ];
    return view('home', $data);
})->name ('home');
