<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <p>{{ $accounts }}</p>

    <button type="button" class="btn btn-primary">Primary</button>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
            <p class="card-text">{{ $accounts }}</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>

    {{-- <p>Hola Mundo {{ $nombre }} {{ $apellido }}</p>
    <h1>Edad: {{ $edad }}</h1>
    @if ($edad >= 18)
        <p>Es mayor de edad</p>
    @else
        <p>Es menor de edad</p>
    @endif

    <ul>
        @foreach ($tarjetas as $tarjeta)
            <li>{{ $tarjeta }}</li>
        @endforeach
    </ul>

    <ul>
        @foreach ($mascotas as $mascota)
            <li>
                <p>{{ $mascota['nombre'] }}</p>
                <p>{{ $mascota['raza'] }}</p>
                <p>{{ $mascota['edad'] }}</p>
                @if ($mascota['edad'] > 10)
                    <p>Es Viejo</p>
                @else
                    <p>Es Joven</p>
                @endif

            </li>
        @endforeach
    </ul> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
