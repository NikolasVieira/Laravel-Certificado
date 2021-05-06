@extends ('layouts.app')
@section('content')
<div class="container">
    <form id="frmescola" name="frmescola" action="{{route('escola.update', $escola->id)}}" method="POST">
        @csrf
        @method('PUT')
        <h3>Editando</h3>
        <hr />
        <p> Você esta editando as informações de {{ $escola->nome_escola }} {{ $escola->responsavel }}</p>
        @foreach ($escola as $escolas)
        @if ($escolas->id == $escola->escola_id)
        <p> {{ $escola->nome_escola }} {{ $escola->responsavel }} pertence a escola {{ $escolas->nome_escola }}</p>
        @endif
        @endforeach
        <hr />
        <div class="row">
            <div class="form-group col">
                <label for="nome_escola">nome_escola</label>
                <input type="text" class="form-control" id="nome_escola" name="nome_escola" value="{{$escola->nome_escola}}">
            </div>
            <div class="form-group col">
                <label for="responsavel">responsavel</label>
                <input type="text" class="form-control" id="responsavel" name="responsavel" value="{{$escola->responsavel}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col">
                <label for="funcao_resp">função responsavel</label>
                <input type="text" class="form-control" id="funcao_resp" name="funcao_resp" value="{{$escola->funcao_resp}}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection
