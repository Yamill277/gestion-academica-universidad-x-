<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Académica</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="{{ route('cursos.index') }}">Cursos</a></li>
            <li><a href="{{ route('escuelas-profesionales.index') }}">Escuelas Profesionales</a></li>
            <li><a href="{{ route('usuarios.index') }}">Usuarios</a></li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
