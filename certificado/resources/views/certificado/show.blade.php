<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($escola as $escolas)
    @if ($escolas->id == $palestra->escola_id)

    A Escola Técnica Estadual (Etec) {{ $escolas->nome_escolas }} confere ao(a) Sr(a). {{ $palestra->palestrante }}, o
    presente certificado considerando o importante trabalho voluntário ministrando a palestra com o tema
    {{ $palestra->tema }}, realizada no dia {{ $palestra->periodo }}, com {{ $palestra->horas }} de duração.<br>
    <br>
    {{$palestra->cidade}}, 99 de mes de 9999<br>
    <br>
    Registro n. 9999<br>
    <br>
    Prof. {{$escolas->responsavel}}<br>
    {{ $escolas->funcao_resp }}<br>

    @endif
    @endforeach
</body>

</html>
