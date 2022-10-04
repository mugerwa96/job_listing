<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
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

Route::controller(jobController::class)
->prefix('job_lister')
->group(function(){
    Route::get('/', 'index')->name('welcome');
    Route::get('/show', 'show')->name('show');
    Route::get('/create','create')->name('create');
});
Route::get('/',[JobController::class,'index'])->name('welcome');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
