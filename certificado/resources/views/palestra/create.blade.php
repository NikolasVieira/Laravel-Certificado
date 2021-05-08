@extends ('layouts.app')
@section('content')
<div class="container">

    <form id="frmpalestra" name="frmpalestra" action="{{ route('palestra.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="form-group col">
                <label for="palestrante">Nome do Palestrante</label>
                <input type="text" class="form-control {{ $errors->has('palestrante') ? 'is-invalid' : ''}}"
                    id="palestrante" name="palestrante" placeholder="Informe o nome do palestrante">
                @if ($errors->has('palestrante'))
                <div class="invalid-feedback">
                    {{$errors->first('palestrante','Atenção o campo nome do palestrante é obrigatório!')}}
                </div>
                @endif
            </div>
            <div class="form-group col">
                <label for="tema">Tema</label>
                <input type="text" class="form-control {{ $errors->has('tema') ? 'is-invalid' : ''}}" id="tema"
                    name="tema" placeholder="Informe o tema">
                @if ($errors->has('tema'))
                <div class="invalid-feedback">
                    {{$errors->first('tema','Atenção o campo tema é obrigatório!')}}
                </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="form-group col">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control {{ $errors->has('cidade') ? 'is-invalid' : ''}}" id="cidade"
                    name="cidade" placeholder="Informe a cidade">
                @if ($errors->has('cidade'))
                <div class="invalid-feedback">
                    {{$errors->first('cidade','Atenção o campo cidade é obrigatório!')}}
                </div>
                @endif
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="periodo">Inicio</label>
                    <input type="text" class="form-control {{ $errors->has('periodo') ? 'is-invalid' : ''}}"
                        id="periodo" name="periodo" placeholder="Informe o Inicio da palestra">
                    @if ($errors->has('periodo'))
                    <div class="invalid-feedback">
                        {{$errors->first('periodo','Atenção o campo Inicio é obrigatório!')}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col">
                <label for="horas">horas</label>
                <input type="text" class="form-control {{ $errors->has('horas') ? 'is-invalid' : ''}}" id="horas"
                    name="horas" placeholder="Informe o Inicio da palestra">
                @if ($errors->has('horas'))
                <div class="invalid-feedback">
                    {{$errors->first('horas','Atenção o campo Inicio é obrigatório!')}}
                </div>
                @endif
            </div>

            {{-- Escola --}}

            <div class="form-group col">
                <label for="escola_id">Escola</label>
                <select class="form-control" id="escola_id" name="escola_id">
                    <option>selecione</option>
                    @foreach ($escola as $escolas)
                    <option value="{{ $escolas->id }}">{{ $escolas->nome_escola }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
