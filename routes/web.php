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

Route::get('/home', [\App\Http\Controllers\HomeController::class,'home'])->name('site.index');
Route::get('/about-us', [\App\Http\Controllers\AboutUsController::class,'aboutUs'])->name('site.aboutus');
Route::get('/contact', [\App\Http\Controllers\ContactController::class,'contact'])->name('site.contact');
Route::get('/login', function () { return 'Login'; })->name('site.login');

Route::prefix('app')->group(function () {
    Route::get('/clients', function () { return 'Clients'; })->name('app.clients');
    Route::get('/providers', [\App\Http\Controllers\ProviderController::class,'index'])->name('app.providers');
    Route::get('/products', function () { return 'Products'; })->name('app.products');
});

Route::fallback(function(){
    return 'Page not found.<br><br><a href="'.route('site.index').'">Home</a>';
});
