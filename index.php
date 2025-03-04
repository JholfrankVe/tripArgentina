<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-3 col-md-3">
        <h2 class="text-center">Agregar Contacto</h2>
        <form action="procesar.php" method="POST">
            <label class="form-label" for="nombre">Nombre:</label>
            <input type="hidden" id="accion" name="accion" value="agregar">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required><br>
            <label for="telefono">Teléfono:</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required><br>
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" required><br>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

</body>
</html>