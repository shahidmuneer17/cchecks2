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
});

Route::get('/newUser', function () {
    return view('admin.newuser');
})->name('admin.newuser');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
