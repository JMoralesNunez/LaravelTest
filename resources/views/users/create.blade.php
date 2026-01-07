<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Crear nuevo usuario</h1>
            </div>
            <form action="{{ route('users.store') }}" method="post" class="form card-body">
                @csrf
                <div class="mt-4">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mt-4">
                    <label for="">Correo</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mt-4">
                    <label for="">Contraseña</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        <a href="{{ route('users.index') }}" class="btn btn-outline-info">Volver</a>
    </div>
</body>

</html>