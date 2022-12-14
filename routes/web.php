<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login',[UserController::class,'login'])->name('logina');
Route::get('/',[ProductController::class,'index'])->name('home');



//  Route::view('/', 'login')->name('home');

 Route::view('/new-arrival', 'new-arrive')->name('arrival');
