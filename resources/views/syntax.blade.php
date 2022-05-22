{{-- if, elseif e else --}}
@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else 
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif


{{-- unless --}}
<h3>Fornecedor: {{$fornecedores[0]['nome']}}</h3>
<h3>Status: {{$fornecedores[0]['status']}}</h3>
@unless($fornecedores[0]['status'] == 'S')
    <h5>Fornecedor Inativo</h5>
@endunless


{{-- isset - Serve para verifar a existência de variáveis --}}
@isset($cliente)
    <h5>qualquer coisa</h5>
@endisset

{{-- empty - Serve para verificar se uma variável possui algum valor --}}

@empty($fornecedores[0]['cnpj'])
    <h5>Vazio</h5>
@endempty

{{-- Operador Ternário --}}
@php
    $msg = isset($fornecedores[0]['cnpj']) ? "CNPJ informado" : "CNPJ não informado";
    echo $msg;
@endphp

{{-- Operador de valor default --}}
{{-- é aplicado quando uma variável não estiver definida ou possuir o valor null --}}
<h5>Cidade: {{ $fornecedores[0]['cidade'] ?? "Valor não informado" }}</h5>
<h5>Status: {{ $fornecedores[0]['status'] ?? "Status não informado" }}</h5>

{{-- switch/case --}}
@switch($fornecedores[0]['ddd'])
    @case('11')
        <h5>DDD: {{ $fornecedores[0]['ddd'] ?? "DDD não informado" }} / São Paulo</h5>
        @break
    @case('22')
        <h5>DDD: {{ $fornecedores[0]['ddd'] ?? "DDD não informado" }} / Rio de Janeiro</h5>
        @break
    @default
        <h5>DDD: {{ $fornecedores[0]['ddd'] ?? "DDD não informado" }} / Indisponível</h5>
        @break
@endswitch

{{-- for --}}
@for ($i = 0; $i < 5; $i++)
    {{ $i }} <br>
@endfor
<hr>
@isset($fornecedores)
    @for ($i = 0; $i < count($fornecedores); $i++)
        <h4>Fornecedor: {{$fornecedores[$i]['nome'] ?? "Nome não informado" }}</h4>
        <h4>Status: {{$fornecedores[$i]['status'] ?? "Status não informado" }}</h4>
        <h4>CNPJ: {{$fornecedores[$i]['cnpj'] ?? "CNPJ não informado" }}</h4>
        <h4>DDD: {{$fornecedores[$i]['ddd'] ?? "DDD não informado" }}</h4>
        <h4>Telefone: {{$fornecedores[$i]['telefone'] ?? "Telefone não informado" }}</h4>
        <h4>--------------------------------------------------------</h4>
    @endfor
@endisset