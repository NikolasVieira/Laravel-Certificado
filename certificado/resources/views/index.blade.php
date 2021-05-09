@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="position-relative">
        <div class="mx-auto" style="width: 50%;">
            <a href="{{ route('escola.index') }}"       class="btn btn-primary">    Criar Escola      </a>
            <a href="{{ route('palestra.index') }}"     class="btn btn-secondary">  Criar Palestra    </a>
            <a href="{{ route('certificado.index') }}"  class="btn btn-success">    Obter Certificados</a>
        </div>
    </div>
</div>
@endsection
