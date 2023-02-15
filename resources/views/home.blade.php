<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primi Passi</title>
</head>

<body>
    <h1>{{ $title }}</h1>
    <header class="d-flex">
        <a href="{{route('PAGE1')}}">Pagina 1</a>
        <a href="{{route('PAGE2')}}">Pagina 2</a>
        <a href="{{route('PAGE3')}}">Pagina 3</a>
    </header>
</body>

</html>