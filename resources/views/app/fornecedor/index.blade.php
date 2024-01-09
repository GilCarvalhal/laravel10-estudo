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
    Telefone: ({{ $fornecedores[1]['ddd'] ?? '' }} {{ $fornecedores[1]['telefone'] ?? '' }})
    @switch($fornecedores[1]['ddd'])
        @case('11')
            São Paulo - SP
        @break

        @case('32')
            Juiz de Fora - MG
        @break

        @case('85')
            Fortaleza - CE
        @break

        Estado não identificado.

        @default
    @endswitch
    <br />
@endisset
