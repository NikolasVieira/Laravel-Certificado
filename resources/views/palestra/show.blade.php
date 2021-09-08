@extends('layouts.app')

@section('content')

<h1>Palestras</h1>
<p>
    Id: #{{$palestra->id}} <br>
    Tema: {{$palestra->tema}} <br>
    Palestrante: {{$palestra->palestrante}} <br>
    Periodo: {{$palestra->periodo}} <br>
    Cidade: {{$palestra->cidade}} <br>
    Horas: {{$palestra->horas}}
</p>
<hr>

<h1>Dados da Escola</h1><br>
@foreach ($escola as $escolas)
@if ($escolas->id == $palestra->escola_id)
<p>
    Nome: {{$escolas->nome_escola}}<br>
    responsavel: {{$escolas->responsavel}}<br>
    funcao do responsavel: {{$escolas->funcao_resp}}
</p>
@endif
@endforeach

@endsection
