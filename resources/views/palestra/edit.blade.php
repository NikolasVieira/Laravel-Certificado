@extends ('layouts.app')
@section('content')
<div class="container">
    <form id="frmpalestra" name="frmpalestra" action="{{route('palestra.update', $palestra->id)}}" method="POST">
        @csrf
        @method('PUT')
        <h3>Editando</h3>
        <hr />
        <p> Você esta editando as informações de {{ $palestra->palestrante }} {{ $palestra->responsavel }}</p>
        <hr />
        <div class="row">
            <div class="form-group col">
                <label for="palestrante">Nome do Palestrante</label>
                <input type="text" class="form-control" id="palestrante" name="palestrante"
                    value="{{$palestra->palestrante}}">
            </div>
            <div class="form-group col">
                <label for="tema">Tema da Palestra</label>
                <input type="text" class="form-control" id="tema" name="tema" value="{{$palestra->tema}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col">
                <label for="periodo">Periodo</label>
                <input type="text" class="form-control" id="periodo" name="periodo" value="{{$palestra->periodo}}">
            </div>
            <div class="form-group col">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="{{$palestra->cidade}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col">
                <label for="horas">Horas de Duração</label>
                <input type="text" class="form-control" id="horas" name="horas" value="{{$palestra->horas}}">
            </div>
        </div>
        <div class="form-group col">
            <label for="escola_id">escola</label>
            <select name="escola_id" id="escola_id" class="form-control" value="{{ $pessoa->escola_id }}">
                @foreach ($escola as $escolas)
                @if ($escolas->id == $palestra->escola_id)
                <option selected value="{{$escolas->id}}"> {{ $escolas->nome_escola }} </option>
                @else
                <option value="{{$escolas->id}}"> {{ $escolas->nome_escola }} </option>
                @endif
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection
