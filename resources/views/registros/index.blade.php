<!DOCTYPE html>
<html>
<head>
    <title>Lista de Registros</title>
</head>
<body>
    <h1>Lista de Registros</h1>

    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('formulario.create') }}">Agregar Nuevo Registro</a>

    <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registros as $registro)
                <tr>
                    <td>{{ $registro->dni }}</td>
                    <td>{{ $registro->nombre }}</td>
                    <td>{{ $registro->apellidos }}</td>
                    <td>{{ $registro->email }}</td>
                    <td>
                        <a href="{{ route('registros.edit', $registro->id) }}">Editar</a>
                        <form action="{{ route('registros.destroy', $registro->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
