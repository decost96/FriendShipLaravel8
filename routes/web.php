<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\PuntajeController;
// use App\Http\Livewire\UsersTable;


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
    return view('index');
});

//  Route::get('/juego', function () {
//      return view('juego');
//  });

 Route::middleware(['auth:sanctum', 'verified'])->get('/inicio', function () {
     return view('index');
 })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/juego', function () {
    return view('juego');
})->name('juego');

Route::middleware(['auth:sanctum', 'verified'])->get('/puntaje', function () {
   return view('puntaje');
})->name('puntaje');

// Route::group(['auth:sanctum', 'verified'], function(){
//
//    Route::get('/juego', 'JuegoController@index')->name('juego');
//
// });

// Route::middleware(['auth:sanctum', 'verified'])
//     ->get('/User', PuntajesTable::class)
//     ->name('puntaje');

// Route::get('puntaje', 'PuntajeController@vistaPuntaje')->name('puntaje');
