<?php

use App\Http\Controllers\HelloWorldController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KurierController;
use App\Http\Controllers\KlientController;
<<<<<<< HEAD
=======
use App\Http\Controllers\MagazynierController;
>>>>>>> main
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

Route::get('hello', [HelloWorldController::class, 'show']);
<<<<<<< HEAD

Route::get('kuriers',[KurierController::class,'getData']);
Route::get('klients',[KlientController::class,'getData']);
=======
Route::get('kuriers',[KurierController::class,'getData']);
Route::get('klients',[KlientController::class,'getData']);
Route::get('magazyniers',[MagazynierController::class,'getData']);
>>>>>>> main

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
