<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver entradas</title>
</head>
<body>
    
    <h2> Esta es la vista - ENTRADA.index -</h2>
    @foreach ($entradas as $entrada)
        <p> Título: {{ $entrada->titulo }} </p>
        <p> Contenido: {{ $entrada->contenido }} </p>
        <p> Tag: {{  $entrada->tag }}</p>
        <hr>
    @endforeach
    
</body>
</html>