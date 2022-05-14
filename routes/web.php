<?php

use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\PrzesylkaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KurierController;
use App\Http\Controllers\KlientController;
use App\Http\Controllers\MagazynierController;
use App\Http\Controllers\UserController;

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
Route::get('/users/list', [UserController::class, 'index'])->middleware('auth');
Route::get('/przesylkas', [PrzesylkaController::class, 'index'])->name('Przesylkas.index')->middleware('can:isAdmin');
Route::get('/przesylkas/create', [PrzesylkaController::class, 'create'])->name('Przesylkas.create')->middleware('can:isAdmin');
Route::get('/przesylkas/edit', [PrzesylkaController::class, 'edit'])->name('Przesylkas.edit')->middleware('can:isAdmin');
Route::post('/przesylkas', [PrzesylkaController::class, 'store'])->name('Przesylkas.store')->middleware('can:isAdmin');

Route::get('/users/list', [UserController::class, 'index'])->middleware('can:isAdmin');
Route::get('kuriers',[KurierController::class,'index'])->name('deliveryman.hello')->middleware('can:isDeliveryman');
Route::get('klients',[KlientController::class,'index'])->name('users.hello')->middleware('can:isUser');
Route::get('magazyniers',[MagazynierController::class,'getData']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
