<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BodhiController;

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

Route::get('/home', [BodhiController::class, 'index']);
Route::get('/about', [BodhiController::class, 'about']);
Route::get('/produits', [BodhiController::class, 'produits']);
Route::get('/services', [BodhiController::class, 'services']);
Route::get('/contact', [BodhiController::class, 'contact']);
Route::post('/contact', [BodhiController::class, 'contactForm']);