<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Pokemon</title>
</head>
<body>
    <p>Hola! Te enviamos los datos de un pokemon aleatorio .</p>
    <ul>
        <li>Nombre: {{$pokemon->name}}</li>
        <li>ID: {{ $pokemon->id}}</li>
        <li>Peso: {{ $pokemon->weight}} </li>
        <li>Altura: {{ $pokemon->height}} </li>
        <li>Experiencia: {{ $pokemon->base_experience}} </li>


    </ul>
    
</body>
</html>