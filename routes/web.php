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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home',[PageController::class, 'home']);
Route::prefix('/produk')->group(function(){
    Route::get('/p1', [PageController::class, 'produk']);
    Route::get('/p2', [PageController::class, 'produk1']);
});
Route::get('/news/{id}', [PageController::class, 'news']);
Route::prefix('/program')->group(function(){
        Route::get('program1',[PageController::class, 'program']);
        Route::get('program2',[PageController::class, 'program1']);
    
});
Route::get('/about', function(){
    return view('prak2.about',['title'=> 'About']);
});
Route::resource('/contact',PageController::class);