<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Reportew;
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

Route::get('ReporteEquipo',[Reportew::class,'Equipo']);
Route::get('ReporteJugador{buscar}',[Reportew::class,'Jugador']);
Route::get('ReporteJugadores{nomequipo}',[Reportew::class,'Jugadores']);