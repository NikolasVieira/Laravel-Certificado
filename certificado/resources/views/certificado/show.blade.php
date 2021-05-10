@extends('layouts.pdf')
@section('content')

@foreach ($escola as $escolas)
@if ($escolas->id == $palestra->escola_id)

<div class="container" id="certificado-texto">

    <div id="texto-principal">
        <p>A Escola Técnica Estadual (Etec) {{ $escolas->nome_escolas }} confere ao(a) Sr(a).
            <strong>{{ $palestra->palestrante }}</strong>, o presente certificado considerando o importante trabalho
            voluntário ministrando a palestra com o tema "<strong>{{ $palestra->tema }}</strong>", realizada no dia
            {{ $palestra->periodo }}, com {{ $palestra->horas }} de duração.</p>
    </div>

    <div id="cidade-data">
        <p>{{$palestra->cidade}}, {{ strftime('%d de %B de %Y', strtotime('today')) }}</p>
    </div>

    <div id="assinatura-responsavel">
        <img id="assinatura" src="{{ public_path('img/assinatura.png') }}" alt="assinatura">
        <p>Prof. {{$escolas->responsavel}}<br>{{ $escolas->funcao_resp }}</p>
    </div>

    <div id="registro">
        <p>Registro n. 9999</p>
    </div>

</div>

@endif
@endforeach
@endsection
