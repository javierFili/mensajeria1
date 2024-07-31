<?php

use App\Http\Controllers\MensajesControler;
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

Route::get('/messages', [MensajesControler::class, 'index']);
Route::get('/messages/{id}', [MensajesControler::class, 'show']);
Route::post('/messages', [MensajesControler::class, 'store']);
