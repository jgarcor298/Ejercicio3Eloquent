<!DOCTYPE html>
<html>
<head>
    <title>Galería del Museo</title>
</head>
<body>
    <h1>Galería de Pinturas</h1>

    <div style="display: flex; flex-wrap: wrap;">
        @foreach($pinturas as $pintura)
            <div style="margin: 20px; text-align: center;">
                
                {{-- Mostrar imagen --}}
                <img src="{{ asset($pintura->imagen) }}" width="250" style="border:1px solid #000;">

                <h3>{{ $pintura->titulo }}</h3>
                <p>Año: {{ $pintura->anio }}</p>
                <p>Pintor ID: {{ $pintura->pintor_id }}</p>

            </div>
        @endforeach
    </div>

</body>
</html>
