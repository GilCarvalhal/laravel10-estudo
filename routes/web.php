<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\PrincipalController;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');


use App\Http\Controllers\SobreNosController;

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');


use App\Http\Controllers\ContatoController;

Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
// Nome, categoria, assunto, mensagem.


// Route::get('/contato/{nome}/{categoria_id}', function (
//     string $nome = 'Desconhecido',
//     int $categoria_id = 1 //1 - 'Informação'
// ) {
//     echo "Estamos aqui: $nome - $categoria_id";
// })->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

Route::get('/login', function () {
    return 'Login';
})->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.clientes');
    Route::get('/fornecedores', function () {
        return 'Fornecedores';
    })->name('app.fornecedores');
    Route::get('produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
});
