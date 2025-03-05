<?php
		if ($_POST) {
			$accion = $_POST['accion'];

			function ejecutar_query($sql){
				include 'conexion.php';
				if ($conn->query($sql) === TRUE) {
			        return 'ok';
			    } else {
			        echo "Error: " . $conn->error;
			    }
			    $conn->close();
			}

			$gasto = (isset($_POST["gasto"])) ? $_POST["gasto"] : '';
			$monto = (isset($_POST["monto"])) ? $_POST["monto"] : '';
			$base = (isset($_POST["base"])) ? $_POST["base"] : '';
            $iva = (isset($_POST["iva"])) ? $_POST["iva"] : '';
			switch ($accion) {
				case 'agregar':
					 $sql = "INSERT INTO argentina VALUES ('', '$gasto', '$monto')";
				    ejecutar_query($sql);

			}
		}

?>



