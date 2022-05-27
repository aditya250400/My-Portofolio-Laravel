<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appController;

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

Route::get('/', [appController::class, 'home']);
Route::get('/about', [appController::class, 'about']);
Route::get('/contact', [appController::class, 'kontak']);
Route::get('/experience', [appController::class, 'pengalaman']);
Route::get('/skills', [appController::class, 'skill']);
Route::get('/Portofolio', [appController::class, 'porto']);