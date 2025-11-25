<!DOCTYPE html>
<html>
<head>
    <title>Autores del Museo</title>
    <link rel="stylesheet" href="{{ asset('css/stylesAutores.css') }}">
</head>

<body>
    <h1>Autores del Museo</h1>

    <div class="autores">
        @foreach($pintores as $pintor)
            <div class="tarjeta-autor">

                <img src="{{ asset($pintor->imagen) }}" width="200">

                <h3>{{ $pintor->nombre }}</h3>
                <p>Biografía: {{ $pintor->bio }}</p>

            </div>
        @endforeach
    </div>

</body>
</html>
