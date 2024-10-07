{{-- resources/views/registros/firma.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firma del Registro</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Firma del Registro</h1>

        <p><strong>DNI:</strong> {{ $registro->dni }}</p>
        <p><strong>Nombre:</strong> {{ $registro->nombre }}</p>
        <p><strong>Apellidos:</strong> {{ $registro->apellidos }}</p>
        <p><strong>Correo:</strong> {{ $registro->correo }}</p>
        <p><strong>Fecha de Reserva:</strong> {{ $registro->fecha_reserva }}</p>

        <h2>Firma</h2>
        <p>[Aquí iría la representación de la firma]</p> 
        <a href="{{ route('registros.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</body>
</html>
