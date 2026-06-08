<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Laboratorio</title>
</head>
<body>

    <h1>Equipos del Laboratorio</h1>

    <!-- Formulario -->
    <h2>Agregar Equipo</h2>
    <form action="{{ route('equipos.store') }}" method="POST">
        @csrf

        <label>Ingrese el nombre</label> <br>
        <input type="text" name="nombre" required> <br><br>

        <label>Ingrese el numero de serie</label> <br>
        <input type="text" name="numero_serie" required> <br><br>

        <label>Ingrese una escripcion (opcional)</label> <br>
        <textarea name="descripcion"></textarea> <br><br>

        <button type="submit">Guardar</button>
    </form>

    <!-- Separacion  -->
    <br><br><br><br> 


    <!-- Listado -->
    <h2>Listado de Hardware</h2>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Numero Serie</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @forelse($equipos as $equipo)
                <tr>
                    <td>{{ $equipo->id }}</td> 
                    <td>{{ $equipo->nombre }}</td> 
                    <td>{{ $equipo->numero_serie }}</td> 
                    <td>{{ $equipo->descripcion ?? 'Sin observaciones' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align: center; color: #856404; background-color: #fff3cd;">
                        No existe registro de Hardware
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>