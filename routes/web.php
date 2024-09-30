<?php

use App\Http\Controllers\komenController;
use App\Http\Controllers\testimonisController;
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

//Komentar
Route::get('/', function () {
    return view('Login'); // Arahkan ke absorb.blade.php
});

Route::get('/', [komenController::class, 'page']);

Route::post('/komentar',[komenController::class,'komentar']);
Route::get('/testimonis', [testimonisController::class, 'index']);



