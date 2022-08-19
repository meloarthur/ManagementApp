<h3>Provider</h3>
{{--
Fornecedor: {{ $providers[$p]['name'] }}
<br>
Status: {{ $providers[$p]['status'] }}

<br><br>

@if ($providers[$p]['status'] == 'N')
    Provider unavailable
@else
    Provider available
@endif

<br><br>

@unless ($providers[$p]['status'] == 'Y')
    Provider unavailable
@endunless --}}

@isset($providers)
    @foreach($providers as $index=>$provider)
        Provider: {{ $provider['name'] }}
        <br>
        Status : {{ $provider['status'] }}
        <br>
        CNPJ : {{ $provider['cnpj'] ?? 'Dado não preenchido' }}
        <br>
        Phone : ({{ $provider['ddd'] }}) {{ $provider['phone'] }}
        <br>

        @switch($provider['ddd'])
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
                Non-identified state
        @endswitch
        <hr>
    @endforeach
@endisset

<br>

@dd($providers)
