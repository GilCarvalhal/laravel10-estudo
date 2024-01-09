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
    @foreach ($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br />
        Status: {{ $fornecedor['status'] }}
        <br />
        {{-- operador condicional de valor default (??) --}}
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido ' }}
        <br />
        Telefone: ({{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }})
        <hr>
        <br />
    @endforeach
@endisset
