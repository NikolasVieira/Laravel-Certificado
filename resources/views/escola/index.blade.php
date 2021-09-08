@extends('layouts.app')

@section('content')

<div class="container-flex ml-5 mr-5">
    <h2>Escolas</h2>
    <hr />
    <a href="{{ route('escola.create') }}" class="btn btn-success">Novo Contato</a>
    <br /><br />
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome da escola</th>
                    <th scope="col">Responsavel</th>
                    <th scope="col">Função do Responsavel</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            @foreach($escola as $escolas)
            <tbody>
                <tr>
                    <th>{{ $escolas->id }}</th>
                    <th>{{ $escolas->nome_escola }}</th>
                    <td>{{ $escolas->responsavel }}</td>
                    <td>{{ $escolas->funcao_resp }}</td>
                    <td>
                        <a href="{{ route('escola.edit',$escolas->id)}}" class="btn btn-primary btn-sm">Editar</a>
                        <a href="{{ route('escola.destroy',['id'=>$escolas->id])}}"
                            class="btn btn-danger btn-sm">Remover</a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection
