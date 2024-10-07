{{-- resources/views/registros/show.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Registro</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Detalles del Registro</h1>

        <p><strong>DNI:</strong> {{ $registro->dni }}</p>
        <p><strong>Nombre:</strong> {{ $registro->nombre }}</p>
        <p><strong>Apellidos:</strong> {{ $registro->apellidos }}</p>
        <p><strong>Correo:</strong> {{ $registro->correo }}</p>
        <p><strong>Fecha de Reserva:</strong> {{ $registro->fecha_reserva }}</p>
        <p><strong>Firmado:</strong> {{ $registro->firmado ? 'Sí' : 'No' }}</p>

        <a href="{{ route('registros.index') }}" class="btn btn-secondary">Volver</a>
        <a href="{{ route('registros.descargarFirma', $registro->id) }}" class="btn btn-primary">Descargar Firma</a>
    </div>
</body>
</html>
