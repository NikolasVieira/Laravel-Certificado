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
                <th scope="col">Escola</th>
                <th scope="col">Nome do Palestrante</th>
                <th scope="col">Tema da Palestra</th>
                <th scope="col">Periodo</th>
                <th scope="col">Cidade</th>
                <th scope="col">Horas de Duração</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        @foreach($palestra as $palestras)
        <tbody>
            <tr>
                <th>{{ $palestras->id }}</th>
                <th>{{ $palestras->escola_id }}</th>
                <th>{{ $palestras->palestrante }}</th>
                <td>{{ $palestras->tema }}</td>
                <td>{{ $palestras->periodo }}</td>
                <td>{{ $palestras->cidade }}</td>
                <td>{{ $palestras->horas }}</td>
                <td>
                    <a href="{{ route('palestra.edit',$palestras->id)}}" class="btn btn-primary btn-sm">Editar</a>
                    <a href="{{ route('palestra.show',$palestras->id)}}" class="btn btn-primary btn-sm">ver</a>
                    <a href="{{ route('certificado.index',$palestras->id)}}" class="btn btn-primary btn-sm">certificado</a>
                    <a href="{{ route('palestra.destroy',['id'=>$palestras->id])}}" class="btn btn-danger btn-sm">Remover</a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection
