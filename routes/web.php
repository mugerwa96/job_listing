<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\reportController;
use Illuminate\Support\Facades\Auth;

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

// Pages_section_start
    Route::controller(jobController::class)
    ->prefix('job_lister')
    ->group(function(){
        Route::get('/', 'index')->name('welcome');
        Route::get('/show/{id}', 'show')->name('show')->whereNumber('id');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::post('/search','search')->name('search');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/all/{id}','all')->name('all');
        Route::get('/count','count')->name('count');

    });
// Pages_section_start


// Report_section_start


        Route::get('/pdf/{id}',[reportController::class,'generatePdf'])->name('report.index');

    // Route::get('download-pdf',[reportController::class,'index']);
// Report_section_end


// default_routing for home page
    Route::get('/',[JobController::class,'index'])->name('welcome');
// default_routing for home page


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
