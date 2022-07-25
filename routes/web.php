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

Route::get('/home', [\App\Http\Controllers\PrincipalController::class,'principal']);

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class,'sobreNos']);

Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'contato']);

Route::get('/contato/{nome}/{idade?}', function(string $nome = 'Fulano', int $idade = -1){
    echo "Estamos aqui: $nome, $idade";
})->where('idade', '[0-9]+')->where('nome', '[A-Za-z]+');
