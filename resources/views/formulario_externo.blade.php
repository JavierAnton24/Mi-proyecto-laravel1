{{-- resources/views/formulario_externo.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Externo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Incluye Bootstrap -->
</head>
<body>
    <div class="container">
        <h1>Formulario para Clientes</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('formulario.enviar') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" name="correo" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="dni">DNI:</label>
                <input type="text" name="dni" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <h2>Participantes</h2>
        <ul>
            @foreach ($participantes as $participante)
                <li>{{ $participante->nombre }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
