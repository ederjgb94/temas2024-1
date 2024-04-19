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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mis Usuarios</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- @if ($isOk)
        <p>Es verdadero</p>
    @else
        <p>Es falso</p>
    @endif --}}

    <div class="d-flex flex-wrap text-center justify-content-center align-items-center p-4">
        @foreach ($accounts as $account)
            @php
                $random = random_int(1, 70);
            @endphp
            <div class="card m-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $account->username }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $account->email }}</h6>
                    <img src="https://i.pravatar.cc/150?img={{ $random }}" alt="">
                    <h6 class="card-text">{{ $account->name }}</h6>
                    <h6 class="card-text card-subtitle">{{ $account->phone }}</h5>
                        <a href="#" class="btn btn-primary">Editar</a>
                        <a href="#" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
        @endforeach
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
