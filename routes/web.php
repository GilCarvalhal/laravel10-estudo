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
// Nome, categoria, assunto, mensagem.


Route::get('/contato/{nome}/{categoria_id}', function (
    string $nome = 'Desconhecido',
    int $categoria_id = 1 //1 - 'Informação'
) {
    echo "Estamos aqui: $nome - $categoria_id";
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
