<?php

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

Route::get('/', [App\Http\Controllers\AppController::class,'workerview'])->name('recordWorker');


// Route for creating a location
Route::get('/create-location', [App\Http\Controllers\AppController::class,'locationview'])->name('createLocation');
Route::post('/store-location', [App\Http\Controllers\AppController::class, 'locationstore'])->name('storeLocation');

// Route for recording worker information
Route::get('/record-worker',[App\Http\Controllers\AppController::class,'workerview'])->name('recordWorker');
Route::post('/store-worker',[App\Http\Controllers\AppController::class,'workerstore'])->name('storeWorker');

Route::get('/fetch-record', [App\Http\Controllers\AppController::class, 'fetchRecord'])->name('fetchRecord');
Route::post('/fetch-records', [App\Http\Controllers\AppController::class, 'fetchRecords'])->name('fetchRecords');


