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
                <h1>Editar Usuario</h1>
            </div>
            <div class="card-body">
                <div class="mt-4">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" value="{{ $user->name }}">
                </div>
                <div class="mt-4">
                    <label for="">Correo</label>
                    <input type="email" class="form-control" value="{{ $user->email }}">
                </div>
                <div class="mt-4">
                    <label for="">Fecha de creación</label>
                    <input type="date-time" class="form-control" value="{{ $user->created_at }}">
                </div>
                <a href="{{ route('users.index') }}">Volver</a>
            </div>
        </div>
    </div>
</body>

</html>