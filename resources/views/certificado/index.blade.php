@extends('layouts.app')

@section('content')

<div class="container-flex ml-5 mr-5">
    <h2>Obter Certificado</h2>
    <hr/>
    <p>Escolha a Palestra que deseja obter o Certificado</p>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nome do Palestrante</th>
                <th scope="col">Tema da Palestra</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        @foreach($palestra as $palestras)
        <tbody>
            <tr>
                <th>{{ $palestras->palestrante }}</th>
                <td>{{ $palestras->tema }}</td>
                <td>
                    <a href="{{ route('certificado.show',$palestras->id)}}" class="btn btn-success">Obter Certificado</a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection
