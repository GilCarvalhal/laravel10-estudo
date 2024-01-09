<h3>Fornecedor</h3>

@php
    // if(isset($variavel)) {} // Retornar true se a variável estiver definida.
@endphp

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br />
    Status: {{ $fornecedores[1]['status'] }}
    <br />
    @isset($fornecedores[1]['cnpj'])
        CNPJ: {{ $fornecedores[1]['cnpj'] }}
        <br />
    @endisset
@endisset
