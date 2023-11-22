<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

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

#route upload data
Route::get('/upload', [UploadController::class, 'showForm'])->name('upload.form');
Route::post('/upload', [UploadController::class, 'uploadFile'])->name('upload.file');



Route::get('/', function () {
    return view('auth.login');
});

Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function() {
    Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('admin');
});
    
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
