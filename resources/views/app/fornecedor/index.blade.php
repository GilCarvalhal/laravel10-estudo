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

    @forelse ($fornecedores as $indice => $fornecedor)
        {{-- @dd($loop) --}}

        {{-- O objeto @loop só está disponivel para os laços foreach e forelse --}}
        Iteração atual: {{ $loop->iteration }}
        <br />
        Fornecedor: {{ $fornecedor['nome'] }}
        <br />
        Status: {{ $fornecedor['status'] }}
        <br />
        {{-- operador condicional de valor default (??) --}}
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido ' }}
        <br />
        Telefone: ({{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }})
        <br />
        @if ($loop->first)
            Primeira iteração do loop
            <br />
            Total de registros: {{ $loop->count }}
        @endif

        @if ($loop->last)
            Última iteração do loop
        @endif

        <hr>
    @empty
        Não existem fornecedores cadastrados!!!
    @endforelse
@endisset
