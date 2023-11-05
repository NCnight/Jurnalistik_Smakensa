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

Route::get('Home', [HomeController::class, 'index'])->name('frond_end/Home');
Route::get('Category', [HomeController::class, 'category'])->name('frond_end/Category');
Route::get('Contact', [HomeController::class, 'contact'])->name('frond_end/Contact');
Route::get('SinglePost', [HomeController::class, 'singlepost'])->name('frond_end/SinglePost');
Route::get('Elements', [HomeController::class, 'elements'])->name('frond_end/Elements');
Route::get('dashboard', function () {
    return view('dashboard');
});

