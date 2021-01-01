<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[App\Http\Controllers\pagesController::class,'index'])->name('index');
Route::get('/prediction',[App\Http\Controllers\pagesController::class,'prediction'])->name('prediction');
Route::get('/bet',[App\Http\Controllers\pagesController::class,'bet'])->name('bet');
Route::get('/stream',[App\Http\Controllers\pagesController::class,'stream'])->name('stream');
Route::get('/odd',[App\Http\Controllers\pagesController::class,'odd'])->name('odd');
Route::get('/contact', [App\Http\Controllers\EmailController::class, 'index']);
Route::post('/sendemail/send', [App\Http\Controllers\EmailController::class, 'send']);
