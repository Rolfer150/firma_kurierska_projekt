<?php

use App\Http\Controllers\AdresController;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\PrzesylkaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KurierController;
use App\Http\Controllers\KlientController;
use App\Http\Controllers\MagazynierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PaczkomatController;



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
Route::get('/kuriers/mapa', [GoogleController::class, 'deliveryman']);
Route::get('/klients/mapa1', [GoogleController::class, 'klient']);

//Route::redirect('/', 'login');
Route::get('/', function () {
    return view('main');
});

Route::get('/about', [HelloWorldController::class, 'about']);
Route::get('/service', [HelloWorldController::class, 'service']);
Route::get('/project', [HelloWorldController::class, 'project']);
Route::get('/contact', [HelloWorldController::class, 'contact']);

Route::get('hello', [HelloWorldController::class, 'hello']);
Route::get('/users/list', [UserController::class, 'index'])->middleware('can:isAdmin');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->middleware('can:isAdmin');

Route::get('/paczkomats', [PaczkomatController::class, 'index'])->name('paczkomat.index')->middleware('can:isAdmin');
Route::get('/paczkomats/create', [PaczkomatController::class, 'create'])->name('paczkomat.create');
Route::post('/paczkomats/store', [PaczkomatController::class, 'store'])->name('paczkomat.store');
Route::get('/paczkomats/{paczkomat}', [PaczkomatController::class, 'show'])->name('paczkomat.show');
Route::get('/paczkomats/edit/{paczkomat}', [PaczkomatController::class, 'edit'])->name('paczkomat.edit')->middleware('can:isAdmin');
Route::post('/paczkomats/{paczkomat}', [PaczkomatController::class, 'update'])->name('paczkomat.update')->middleware('can:isAdmin');
Route::delete('/paczkomats/{paczkomat}', [PaczkomatController::class, 'destroy'])->name('paczkomat.destroy')->middleware('can:isAdmin');

Route::get('/przesylkas', [PrzesylkaController::class, 'index'])->name('Przesylkas.index');
Route::get('/przesylkas/create', [PrzesylkaController::class, 'create'])->name('Przesylkas.create');
Route::get('/przesylkas/{przesylka}', [PrzesylkaController::class, 'show'])->name('Przesylkas.show');
Route::post('/przesylkas/store', [PrzesylkaController::class, 'store'])->name('Przesylkas.store');
Route::get('/przesylkas/edit/{przesylka}', [PrzesylkaController::class, 'edit'])->name('Przesylkas.edit');
Route::post('/przesylkas/{przesylka}', [PrzesylkaController::class, 'update'])->name('Przesylkas.update');
Route::delete('/przesylkas/{przesylka}', [PrzesylkaController::class, 'destroy'])->name('Przesylkas.destroy');

Route::get('/przesylkas/create/adres', [AdresController::class, 'create'])->name('Adres.create');
Route::post('/przesylkas/adres/store', [AdresController::class, 'store'])->name('Adres.store');

Route::get('/users/list', [UserController::class, 'index'])->middleware('can:isAdmin');

Route::get('kuriers',[KurierController::class,'index'])->name('deliveryman.hello')->middleware('can:isDeliveryman');
Route::get('kuriers/przesylki',[KurierController::class,'przesylka'])->name('deliveryman.przesylka')->middleware('can:isDeliveryman');
Route::get('kuriers/mapa',[KurierController::class,'mapa'])->name('deliveryman.mapa')->middleware('can:isDeliveryman');
Route::get('kuriers/edit/{przesylkas}',[KurierController::class,'editkurier'])->name('deliveryman.editkurier')->middleware('can:isDeliveryman');
Route::post('kuriers/przesylkas/{przesylka}', [PrzesylkaController::class, 'updatekurier'])->name('Przesylkas.updatekurier')->middleware('can:isUser');

Route::get('klients',[KlientController::class, 'index'])->name('klient.hello')->middleware('can:isUser');
Route::get('klients/mapa1',[KlientController::class,'mapa1'])->name('klient.mapa1')->middleware('can:isUser');
Route::get('klients/przesylkas',[PrzesylkaController::class,'indexklient'])->name('Przesylkas.indexklient')->middleware('can:isUser');
Route::get('klients/przesylkas/create', [PrzesylkaController::class, 'createklient'])->name('Przesylkas.createklient')->middleware('can:isUser');
Route::get('klients/przesylkas/{przesylka}', [PrzesylkaController::class, 'showklient'])->name('Przesylkas.showklient')->middleware('can:isUser');
Route::post('klients/przesylkas/store', [PrzesylkaController::class, 'storeklient'])->name('Przesylkas.storeklient')->middleware('can:isUser');
Route::get('klients/przesylkas/edit/{przesylka}', [PrzesylkaController::class, 'editklient'])->name('Przesylkas.editklient')->middleware('can:isUser');
Route::post('klients/przesylkas/{przesylka}', [PrzesylkaController::class, 'updateklient'])->name('Przesylkas.updateklient')->middleware('can:isUser');
Route::delete('klients/przesylkas/{przesylka}', [PrzesylkaController::class, 'destroy'])->name('Przesylkas.destroy');

Route::get('admin',[MagazynierController::class,'index'])->name('adminmain');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
