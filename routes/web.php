<?php

use App\Http\Controllers\crudsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert', function () {
    return view('create');
});

Route::post('/biodata', [crudsController::class, 'store']);
Route::post('/destroy/{id}', [crudsController::class, 'destroy']);
Route::get('/edit/{id}', [crudsController::class, 'edit']);
Route::post('/edit/update/{id}', [crudsController::class, 'update']);

Route::get('/show', [crudsController::class, 'index']);

