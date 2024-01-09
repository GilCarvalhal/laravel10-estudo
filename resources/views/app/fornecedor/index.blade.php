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
    @for ($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br />
        Status: {{ $fornecedores[$i]['status'] }}
        <br />
        {{-- operador condicional de valor default (??) --}}
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido ' }}
        <br />
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }} {{ $fornecedores[$i]['telefone'] ?? '' }})
        <hr>
        <br />
    @endfor
@endisset
