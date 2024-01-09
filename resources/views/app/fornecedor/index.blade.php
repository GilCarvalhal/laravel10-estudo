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
    @php
        $i = 0;
    @endphp
    @while (isset($fornecedores[$i]))
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
        @php
            $i++;
        @endphp
    @endwhile
@endisset
