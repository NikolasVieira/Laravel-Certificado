@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Informações da Palestra</h2>
    <hr />
    <a href="{{ route('palestra.create') }}" class="btn btn-success">Novo Contato</a>
    <br /><br />
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome do palestrante</th>
                <th scope="col">Tema</th>
                <th scope="col">periodo</th>
                <th scope="col">cidade</th>
                <th scope="col">horas</th>
                <th scope="col">opções</th>
            </tr>
        </thead>
        @foreach($palestra as $palestras)
        <tbody>
            <tr>
                <th>{{ $palestras->id }}</th>
                <th>{{ $palestras->palestrante }}</th>
                <td>{{ $palestras->tema }}</td>
                <td>{{ $palestras->periodo }}</td>
                <td>{{ $palestras->cidade }}</td>
                <td>{{ $palestras->horas }}</td>
                <td>
                    <a href="{{ route('pdf.show',$palestras->id)}}" class="btn btn-success btn-sm">ver certificado</a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection
