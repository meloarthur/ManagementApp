<h3>Fornecedores</h3>

<a href="{{ route('site.index') }}">Home</a>

<br><br>

@isset($fornecedores)
    @foreach($fornecedores as $index=>$fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status : {{ $fornecedor['status'] }}
        <br>
        CNPJ : {{ $fornecedor['cnpj'] ?? 'Dado não preenchido' }}
        <br>
        Fone : ({{ $fornecedor['ddd'] }}) {{ $fornecedor['fone'] }}
        <br>

        @switch($fornecedor['ddd'])
            @case(62)
                Goiânia - GO
                @break
            @case(11)
                São Paulo - SP
                @break
            @case(85)
                Fortaleza - CE
                @break
            @default
                Estado não identificado
        @endswitch
        <hr>
    @endforeach
@endisset

<br>

@dd($fornecedores)
