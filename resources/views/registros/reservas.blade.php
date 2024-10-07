{{-- resources/views/registros/reservas.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Reservas</h1>

        <h2>Reservas de Hoy</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hoy as $reserva)
                    <tr>
                        <td>{{ $reserva->dni }}</td>
                        <td>{{ $reserva->nombre }}</td>
                        <td>{{ $reserva->apellidos }}</td>
                        <td>{{ $reserva->correo }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Reservas Futuras</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($futuras as $reserva)
                    <tr>
                        <td>{{ $reserva->dni }}</td>
                        <td>{{ $reserva->nombre }}</td>
                        <td>{{ $reserva->apellidos }}</td>
                        <td>{{ $reserva->correo }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Reservas Pasadas</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pasadas as $reserva)
                    <tr>
                        <td>{{ $reserva->dni }}</td>
                        <td>{{ $reserva->nombre }}</td>
                        <td>{{ $reserva->apellidos }}</td>
                        <td>{{ $reserva->correo }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <a href="{{ route('registros.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</body>
</html>
