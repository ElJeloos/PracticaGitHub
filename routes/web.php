<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/',[controladorVistas::class,'showWelcome']);

Route::get('RegistrarP',[controladorVistas::class,'viewRegistrarP'])->name('RegiP');

Route::get('MostrarP',[controladorVistas::class,'viewMostrarP'])->name('MostP');
*/


Route::get('/',[controladorVistas::class,'inicio']);

Route::get('RegistrarP',[controladorVistas::class,'viewRegistrarP'])->name('RegiP');

Route::get('MostrarP',[controladorVistas::class,'viewMostrarP'])->name('MostP');





