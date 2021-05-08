@extends('layouts.app')

@section('content')

<h1>Dados da Escola</h1>
<hr>
<p>
    Nome: {{$escola->nome_escola}} <br>
    Responsavel: {{$escola->responsavel}}<br>
    Funcao do Responsavel: {{$escola->funcao_resp}}
</p>



@endsection
