<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($palestra as $palestras)
    A Escola Técnica Estadual (Etec) {{ $escolas->nome_escolas }} confere ao(a) Sr(a). {{ $palestras->palestrante }}, o
    presente certificado considerando o importante trabalho voluntário ministrando a palestras com o tema
    {{ $palestras->tema }}, realizada no dia {{ $palestras->periodo }}, com {{ $palestras->horas }} de duração.<br>
    <br>
    {{$palestras->cidade}}, 99 de mes de 9999{{  now()->toDateTimeString('d-m-Y') }}<br>
    <br>
    Registro n. 9999<br>
    <br>
    Prof. {{$escolas->responsavel}}<br>
    {{ $escolas->funcao_resp }}<br>
    @endforeach
</body>

</html>
