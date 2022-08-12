<h3>Provider</h3>

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
@endunless

<br><br>

@isset($providers)
    Provider: {{ $providers[$p]['name'] }}
    <br>
    Status : {{ $providers[$p]['status'] }}
    <br>
    CNPJ : {{ $providers[$p]['cnpj'] ?? 'Dado não preenchido' }}
    <br>
    Phone : ({{ $providers[$p]['ddd'] }}) {{ $providers[$p]['phone'] }}
@endisset

<br><br>

@dd($providers)
