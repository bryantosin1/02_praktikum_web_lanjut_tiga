<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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


Route::get('/home', function() {echo "Selamat Datang";});

Route::get('/news/{news?}', function($news) {echo "halaman news ".$news;});

Route::get('/about-us', function() {echo "About us";});

Route::resource('contact', PageController::class)->only(['index', 'show', 'store']);

Route::prefix('/category')->group(function(){
    Route::get('/marbel-edu-games', 
    function(){echo "Marbel Edu Games";});

    Route::get('/marbel-and-friends-kids-games', 
    function(){echo "Marbel and Friends Kids Games";});

    Route::get('/riri-story-books', 
    function(){echo "Riri story books";});
    
    Route::get('/kolak-kids-songs', 
    function(){echo "Kolak Kids Song";});
});


Route::prefix('/program')->group(function(){
    Route::get('/karir', 
    function(){echo "Program karir";});

    Route::get('/magang', 
    function(){echo "Program magang";});

    Route::get('/kunjungan-industri', 
    function(){echo "Program kunjungan industri";});    
});

