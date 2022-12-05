<?php
session_start();
$usuario = $_SESSION["usuario"];
$flujo = $_GET["flujo"];
$proceso = $_GET["proceso"];
$nro_tramite = $_GET["nro_tramite"];
$usuario2 = $_GET["usuario"];

include "conexion.inc.php";
$sql = "select * from flujoproceso ";
$sql .= "where flujo='" . $flujo . "' and ";
$sql .= "proceso='" . $proceso . "'";
$resultado = mysqli_query($con, $sql);
$fila = mysqli_fetch_array($resultado);
$pantalla = $fila["Pantalla"];
$tipo = $fila["Tipo"];
$rol = $fila["Rol"];
include $pantalla . ".datos.inc.php";

$sql = "select count(*) as cantidad from flujotramite ";
$sql .= "where flujo='" . $flujo . "' and ";
$sql .= "proceso='" . $proceso . "' and ";
$sql .= "nro_tramite='" . $nro_tramite . "'";
$resultado2 = mysqli_query($con, $sql);
$fila2 = mysqli_fetch_array($resultado2);
$cantidad = $fila2["cantidad"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tramites</title>
	<link href="./css/bootstrap.min.css" rel="stylesheet" />
	<link href="./css/style.css" rel="stylesheet" />
</head>

<body>

	<form method="GET" action="motor.php">
		<center>
			<?php

				//include $pantalla . ".inc.php";
			?>
			<input type="hidden" value="<?php echo $pantalla; ?>" name="pantalla" />
			<input type="hidden" value="<?php echo $flujo; ?>" name="flujo" />
			<input type="hidden" value="<?php echo $proceso; ?>" name="proceso" />
			<input type="hidden" value="<?php echo $tipo; ?>" name="tipo" />
			<input type="hidden" value="<?php echo $nro_tramite; ?>" name="nro_tramite" />
			<input type="hidden" value="<?php echo $usuario2; ?>" name="usuario" />
			<br />
			<?php

			if ($rol == $_SESSION["rol"]) {

				include $pantalla . ".inc.php";
				if ($tipo == "C") {
			?>
					<input type="submit" class="btn btn-danger" value="No" name="No" />
					<input type="submit" class="btn btn-success" value="Si" name="Si" />

				<?php
				} else if ($tipo == "F") {
				?>
					<input type="submit" class="btn btn-secondary" value="Anterior" disabled="disabled" name="Anterior" />
					<input type="submit" class="btn btn-danger" value="Siguiente" name="SiguienteF" />
				<?php
				} else {
				?>
					<?php
					if ($cantidad < 1) {
					?>
						<input type="submit" class="btn btn-secondary" value="Anterior" name="Anterior" />
					<?php
					} else {
					?>
						<input type="submit" class="btn btn-secondary" value="Anterior" disabled="disabled" name="Anterior" />
					<?php
					}
					?>
					<input type="submit" class="btn btn-danger" value="Siguiente" name="Siguiente" />


				<?php
				}
				echo "<br><br>";
			} else {
				?>
				<div class="alert alert-danger" role="alert">
					Usted no cuenta con los permisos necesarios!!
				</div>
			<?php
			}
			?>
			<input type="submit" class="btn btn-dark" value="Ir a Inicio" name="inicio" />
		</center>

	</form>


</body>

</html>