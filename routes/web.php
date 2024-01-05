<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return 'Olá, seja bem-vindo ao curso!';
// });

use App\Http\Controllers\PrincipalController;

Route::get('/', [PrincipalController::class, 'principal']);

// Route::get('/sobre-nos', function () {
//     return 'Sobre nós';
// });

use App\Http\Controllers\SobreNosController;

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos']);

// Route::get('/contato', function () {
//     return 'Contato';
// });

use App\Http\Controllers\ContatoController;

Route::get('/contato', [ContatoController::class, 'contato']);
