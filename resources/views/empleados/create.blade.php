<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Empleado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>
<body>


    <div class="container mt-5">
        <h1 class="mb-4">Registrar Empleado</h1>

        <form action="{{ route('empleados.store') }}" method="POST">
            @csrf
            <!-- Nombre -->
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="Nombre" placeholder="Ingrese el nombre" required>
            </div>

            <!-- Apellido -->
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="Apellido" placeholder="Ingrese el apellido" required>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="Email" placeholder="Ingrese el email" required>
            </div>

            <!-- Edad -->
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" class="form-control" id="edad" name="Edad" placeholder="Ingrese la edad" required>
            </div>

            <!-- Foto -->
            <div class="mb-3">
                <label for="foto" class="form-label">Foto (URL)</label>
                <input type="url" class="form-control" id="foto" name="Foto" placeholder="Ingrese la URL de la foto" required>
            </div>

            <!-- Botón de enviar -->
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</body>

</html>
