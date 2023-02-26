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

Route::get('/nosotros', function () {
    return view('/natbar/nosotros');
})->name('nosotro');

/*menu de sociedades*/
Route::get('/sociedades', function () {
    return view('/natbar/sociedades');
})->name('sociedades');

Route::get('/femenil', function () {
    return view('/natbar/femenil');
})->name('femenil');

Route::get('/juvenil', function () {
    return view('/natbar/juvenil');
})->name('juvenil');

Route::get('/caballeros', function () {
    return view('/natbar/caballeros');
})->name('caballeros');

/*menu de grupos*/
Route::get('/grupos', function () {
    return view('/natbar/grupos');
})->name('grupos');

Route::get('/oracion', function () {
    return view('/natbar/oracion');
})->name('oracion');

Route::get('/dominical', function () {
    return view('/natbar/dominical');
})->name('dominical');

Route::get('/galeria', function () {
    return view('/natbar/galeria');
})->name('galeria');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



