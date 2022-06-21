<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/service', [HomeController::class, 'service'])->name('service');


Route::get('/about-us', [HomeController::class, 'about_us'])->name('about-us');
Route::post('/feedback', [HomeController::class, 'feedback'])->name('feedback');

