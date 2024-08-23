<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\FrontController::class, 'index']);
Route::get('/front/news_detail/{id}', [App\Http\Controllers\FrontController::class, 'news_detail']);
Route::get('/front/category_detail/{id}', [App\Http\Controllers\FrontController::class, 'category_detail']);
Route::get('/front/about_detail/{id}', [App\Http\Controllers\FrontController::class, 'about_detail']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

    Route::controller(App\Http\Controllers\C_account::class)->group(function () {
        Route::get('/account', 'index');
        Route::put('/account/update/{id}', 'update');
        Route::delete('/account/destroy/{id}', 'destroy');
    });

    Route::controller(App\Http\Controllers\C_medsos::class)->group(function () {
        Route::get('/medsos', 'index');
        Route::post('/medsos/store', 'store');
        Route::put('/medsos/update/{id}', 'update');
        Route::delete('/medsos/destroy/{id}', 'destroy');
    });

    Route::controller(App\Http\Controllers\C_category::class)->group(function () {
        Route::get('/category', 'index');
        Route::post('/category/store', 'store');
        Route::put('/category/update/{id}', 'update');
        Route::delete('/category/destroy/{id}', 'destroy');
    });

    Route::controller(App\Http\Controllers\C_visitor::class)->group(function () {
        Route::get('/visitor', 'index');
        Route::delete('/visitor/destroy/{id}', 'destroy');
    });

    Route::controller(App\Http\Controllers\C_about::class)->group(function () {
        Route::get('/about/edit/{id}', 'edit');
        Route::put('/about/update/{id}', 'update');
    });

    Route::controller(App\Http\Controllers\C_news::class)->group(function () {
        Route::get('/news', 'index');
        Route::get('/news/create', 'create');
        Route::post('/news/store', 'store');
        Route::get('/news/edit/{id}', 'edit');
        Route::put('/news/update/{id}', 'update');
        Route::delete('/news/destroy/{id}', 'destroy');
    });

    Route::pattern('users', '\d+');
    Route::resource('users', 'UserController');
});
