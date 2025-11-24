<!DOCTYPE html>
<html>
<head>
    <title>Autores del Museo</title>
</head>
<body>
    <h1>Autores del Museo</h1>

    <div style="display: flex; flex-wrap: wrap;">
        @foreach($pintores as $pintor)
            <div style="margin: 20px; text-align: center;">

                {{-- Mostrar imagen --}}
                <img src="{{ asset($pintor->imagen) }}" width="200" style="border:1px solid #000;">

                <h3>{{ $pintor->nombre }}</h3>
                <p>Biografia: {{ $pintor->bio }}</p>

            </div>
        @endforeach
    </div>

</body>
</html>
