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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('data', [App\Http\Controllers\Data::class, 'list']);

Route::view('login', 'login');

Route::post('login', [App\Http\Controllers\LoginController::class, 'index']);

Route::view('profile', 'profile');

Route::get('db', [App\Http\Controllers\Cdv::class, 'index']);