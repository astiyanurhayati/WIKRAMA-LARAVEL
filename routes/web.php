<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\wikramaController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [wikramaController::class, 'home']);

Route::get('/eskul', [wikramaController::class, 'eskul']);

Route::get('/fasilitas', [wikramaController::class, 'fasilitas']);

Route::get('/jurusan', [wikramaController::class, 'jurusan']);

Route::get('/sejarah', [wikramaController::class, 'sejarah']);

Route::get('/kerjasama', [wikramaController::class, 'kerjasama']);

Route::get('/testimoni', [wikramaController::class, 'testimoni']);

Route::get('/contact', [ContactController::class, 'contact']);
Route::post('/send-message', [ContactController::class,'sendEmail'])->name('contact.send');
