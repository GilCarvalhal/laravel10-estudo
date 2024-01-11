<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\PrincipalController;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');


use App\Http\Controllers\SobreNosController;

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');


use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\TesteController;

Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'contato'])->name('site.contato');
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

    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');

    Route::get('produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');

// Route::get('/rota2', function () {
//     return redirect()->route('site.rota1');
// })->name('site.rota2');

// Ao acessar a rota 2, o usuário vai ser redirecionado pra rota 1.
// Route::redirect('rota2', 'rota1');

Route::fallback(function () {
    echo "A rota acessada não existe! <a href=" . route('site.index') . "> clique aqui </a> para ir para a página inicial.";
});
