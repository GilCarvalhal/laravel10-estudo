<h3>Fornecedor</h3>

@php
    // if(empty($variavel)) {} // Retornar true se a variável estiver vazia.
    /* Ex:
    ''
    0
    0.0
    '0'
    null
    false
    array()
    $var
    */
@endphp

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br />
    Status: {{ $fornecedores[1]['status'] }}
    <br />
    {{-- operador condicional de valor default (??) --}}
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado não foi preenchido ' }}
    <br />
    {{-- $variável testada não estiver definida (isset)
        ou
        $variável testada possuir o valor null --}}
@endisset
