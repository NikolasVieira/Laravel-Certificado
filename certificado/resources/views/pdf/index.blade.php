<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($palestra as $palestrantes)

    <h2>{{ $palestrantes->palestrante }}</h2><br>

    @endforeach
</body>

</html>
