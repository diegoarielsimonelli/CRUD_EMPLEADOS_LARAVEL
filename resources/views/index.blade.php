<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">


    <title>Lista de Empleados</title>
</head>

    <body>
        <div class="container mt-5">
            <h1 class="text-center">CRUD de Empleados</h1>
            <h1 class="mb-4">Lista de Empleados</h1>
            @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    <script>
        setTimeout(function() {
            window.location.href = "{{ route('empleados.index') }}";
        }, 3000); // Redirige después de 3 segundos
    </script>
@endif
            <a href="{{ route('empleados.create') }}" class="btn btn-primary mb-3">Crear Empleado</a>

            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Edad</th>
                        <th>Foto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($empleados as $empleado)
                        <tr>
                            <td>{{ $empleado->id }}</td>
                            <td>{{ $empleado->Nombre }}</td>
                            <td>{{ $empleado->Apellido }}</td>
                            <td>{{ $empleado->Email }}</td>
                            <td>{{ $empleado->Edad }}</td>
                            <td><img src="{{ $empleado->Foto }}" alt="Foto" width="100"></td>
                            <td>
                                <!-- Botón Editar -->
                                <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-warning btn-sm">Editar</a>

                                <!-- Botón Eliminar -->
                                <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este empleado?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No hay empleados registrados</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </body>

</html>
