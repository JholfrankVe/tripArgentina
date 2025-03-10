        <?php
            include 'conexion.php';
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>

            <title>Argentina Trip</title>
            <p class="text-center">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container">
                <a class="navbar-brand text-white" href="#">
                    Argentina Trip <div class="text-center">
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"
                        </li>

                    </ul>
                    <span>

                    </span>
                </div>
            </div>
        </nav>
            <title>Document</title>
        </head>
        <body>
            <div class="container mt-3 col-md-3">
                <h2 class="text-center">Registro de Gastos</h2>
                <form action="procesar.php" method="POST">
                    <label class="form-label" for="nombre">Gasto:</label>
                    <input type="hidden" id="accion" name="accion" value="agregar">
                    <input type="text" class="form-control" id="gasto" name="gasto" placeholder="Ingrese gasto" required><br>
                    <label for="telefono">Monto:</label>
                    <input type="text" class="form-control" id="monto" name="monto" placeholder="Ingrese Monto" required><br>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>

        <?php

            $query = "SELECT * FROM argentina";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
        ?>
                <div class="container mt-3 table-responsive">
                    <table class="table table-hover text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Gasto</th>
                                <th>BASE</th>
                                 <th>IVA (21%)</th>
                                 <th>MONTO</th>
                            </tr>
                        </thead>
                        <tbody>
        <?php
                    $counter = '';
                    while ($row = $result->fetch_assoc()) {
                        $counter++;
        ?>
                            <tr>
                                <td class="wrap"><?php echo $counter; ?></td>
                                <td class="wrap"><?php echo $row['gasto']; ?></td>
                                <td class="wrap"><?php echo $row['monto']-($row['monto']*0.21); ?></td>
                                <td class="wrap"><?php echo $row['monto']*0.21; ?></td>
                                <td class="wrap"><?php echo $row['monto']; ?></td>




                            </tr>
        <?php
                    }
        ?>
                        </tbody>
                    </table>
                </div>
        <?php
            }
            else {
        ?>
                            <div class="container col-md-3 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">No hay Datos</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Bo se han enc...</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="container mt-3">
                    <img src="banner.jpg" class="img-fluid" alt="No Data">
                </div>
        <?php
            }
            $conn->close();
        ?>

        </body>
        </html>