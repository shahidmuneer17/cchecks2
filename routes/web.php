<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index')->middleware('auth');
Route::post('/users', [App\Http\Controllers\UserController::class, 'storeUser'])->name('users.storeUser')->middleware('auth');

Route::get('/newUser', function () {
    return view('admin.newuser');
})->name('admin.newUser')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
