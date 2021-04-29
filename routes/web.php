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

Route::view("auth","auth");
Route::view("n","layouts.navigation")->middleware("auth");

Route::get('/', function () {
    return view('welcome');
});
Route::get("cliente", "App\Http\Controllers\ClienteController@index")->middleware("auth");



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
