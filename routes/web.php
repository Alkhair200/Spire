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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::group(['middleware' => 'auth' ] , function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    route::resource('blog', App\Http\Controllers\BlogController::class)->except(['show']);
    route::resource('contact', App\Http\Controllers\ContactController::class)->except(['show']);
    route::resource('users', App\Http\Controllers\UserController::class)->except(['show']);
    
    Route::get('contact-edit/{id}', [App\Http\Controllers\ContactController::class, 'edit'])->name('contact-edit'); 

    
    // route::resource('products', App\Http\Controllers\ProductsController::class)->except(['show']);

});

    Route::post('store-contact', [App\Http\Controllers\FrontController::class, 'storeContct'])->name('store-contact');   

Route::get('news', [App\Http\Controllers\FrontController::class, 'blog'])->name('blog');
Route::get('news/{id}', [App\Http\Controllers\FrontController::class, 'blogDetail'])->name('blog-detail');

Auth::routes();

Route::get('/login', [App\Http\Controllers\FrontController::class, 'login'])->name('login');
