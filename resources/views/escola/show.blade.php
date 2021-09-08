@extends('layouts.app')

@section('content')

<h1>Escola</h1>
<p>
    Id: #{{$palestra->id}} <br>
    Tema: {{$palestra->tema}} <br>
    Palestrante: {{$palestra->palestrante}} <br>
    Periodo: {{$palestra->periodo}} <br>
    Cidade: {{$palestra->cidade}} <br>
    Horas: {{$palestra->horas}}

    {{ $escolas->id }}
    {{ $escolas->nome_escola }}</th>
    {{ $escolas->responsavel }}
    {{ $escolas->funcao_resp }}
</p>
<hr>

<h1>Dados da Palestra</h1><br>
@foreach ($palestra as $palestras)
<p>
    Nome: {{$palestras->nome_palestra}}<br>
    responsavel: {{$palestras->responsavel}}<br>
    funcao do responsavel: {{$palestras->funcao_resp}}
</p>
@endforeach

@endsection
