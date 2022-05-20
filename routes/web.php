<?php

use App\Http\Controllers\AdresController;
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
Route::delete('/users/{id}', [UserController::class, 'destroy'])->middleware('can:isAdmin');
Route::get('/przesylkas', [PrzesylkaController::class, 'index'])->name('Przesylkas.index')->middleware('can:isAdmin');
Route::get('/przesylkas/create', [PrzesylkaController::class, 'create'])->name('Przesylkas.create')->middleware('can:isAdmin');
Route::post('/przesylkas', [PrzesylkaController::class, 'store'])->name('Przesylkas.store')->middleware('can:isAdmin');
Route::get('/przesylkas/{przesylka}', [PrzesylkaController::class, 'show'])->name('Przesylkas.show')->middleware('can:isAdmin');
Route::get('/przesylkas/create/adres', [AdresController::class, 'create'])->name('Adres.create')->middleware('can:isAdmin');
Route::post('/przesylkas/adres/store', [AdresController::class, 'store'])->name('Adres.store')->middleware('can:isAdmin');
Route::post('/przesylkas/store', [PrzesylkaController::class, 'store'])->name('Przesylkas.store')->middleware('can:isAdmin');
Route::get('/przesylkas/edit/{przesylka}', [PrzesylkaController::class, 'edit'])->name('Przesylkas.edit')->middleware('can:isAdmin');
Route::post('/przesylkas/{przesylka}', [PrzesylkaController::class, 'update'])->name('Przesylkas.update')->middleware('can:isAdmin');
Route::delete('/przesylkas/{przesylka}', [PrzesylkaController::class, 'destroy'])->name('Przesylkas.destroy')->middleware('can:isAdmin');

Route::get('/users/list', [UserController::class, 'index'])->middleware('can:isAdmin');

Route::get('kuriers',[KurierController::class,'index'])->name('deliveryman.hello')->middleware('can:isDeliveryman');
Route::get('kuriers/przesylki',[KurierController::class,'przesylka'])->name('deliveryman.przesylka')->middleware('can:isDeliveryman');
Route::get('kuriers/mapa',[KurierController::class,'mapa'])->name('deliveryman.mapa')->middleware('can:isDeliveryman');
Route::get('kuriers/powiadomienie',[KurierController::class,'powiadomienie'])->name('deliveryman.powiadomienie')->middleware('can:isDeliveryman');


Route::get('klients',[KlientController::class,'index'])->name('users.hello')->middleware('can:isUser');
Route::get('magazyniers',[MagazynierController::class,'getData']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
