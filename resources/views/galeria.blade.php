<!DOCTYPE html>
<html>
<head>
    <title>Galería del Museo</title>
    <link rel="stylesheet" href="{{ asset('css/stylesGaleria.css') }}">

</head>
<body>
    <h1>Galería de Pinturas</h1>

    <div class="galeria">
        @foreach($pinturas as $pintura)
            <div class="tarjeta">
                <img src="{{ asset($pintura->imagen) }}">

                <h3>{{ $pintura->titulo }}</h3>
                
                <p>Pintor: {{ $pintura->pintor?->nombre }}</p>
            </div>
        @endforeach
    </div>

</body>
</html>
