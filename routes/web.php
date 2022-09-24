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

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'index'])->name('site.index');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class,'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');

Route::prefix('app')->group(function () {
    Route::get('/clientes', function () { return 'Clientes.<br><br><a href="'.route('site.index').'">Home</a>'; })->name('app.cliente');
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class,'index'])->name('app.fornecedor');
    Route::get('/produtos', function () { return 'Produtos.<br><br><a href="'.route('site.index').'">Home</a>'; })->name('app.produtos');
});

Route::fallback(function(){
    return 'Page not found.<br><br><a href="'.route('site.index').'">Home</a>';
});
