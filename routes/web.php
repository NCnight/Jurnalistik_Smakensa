<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('Home', [HomeController::class, 'index'])->name('Home');
Route::get('Category', [HomeController::class, 'category'])->name('Category');
Route::get('Contact', [HomeController::class, 'contact'])->name('Contact');
Route::get('SinglePost', [HomeController::class, 'singlepost'])->name('SinglePost');
Route::get('Elements', [HomeController::class, 'elements'])->name('Elements');