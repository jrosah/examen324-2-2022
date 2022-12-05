<?php
include "conexion.inc.php";

session_start();
$usuario = $_SESSION["usuario"];
$rol = $_SESSION["rol"];

$sql = "select * from flujotramite xft, flujoproceso xfp ";

if ($rol == "Estudiante") {
  $sql .= " where xft.usuario = '" . $usuario . "' and xft.fechafin is null";
  $sql .= " and xft.proceso = xfp.proceso and xft.flujo = xfp.flujo ";
  $sql .= " and xfp.rol ='" . $rol . "'";
} else {
  $sql .= " where xft.usuario <> '" . $usuario . "' and xft.fechafin is null";
  $sql .= " and xft.proceso = xfp.proceso and xft.flujo = xfp.flujo ";
  $sql .= " and xfp.Rol = '" . $rol . "'";
}

/*
$sql = "select * from flujotramite ";
if ($rol == "Estudiante") {
  $sql .= "where usuario='" . $usuario . "' and fechafin is null";
} elseif ($rol == "Prefacultativo") {
  $sql .= "where usuario<>'" . $usuario . "' and fechafin is null";
  $sql .= " and (Proceso = 'P3' and Flujo = 'F1')";
} elseif ($rol == "Kardex") {
  $sql .= "where usuario<>'" . $usuario . "' and fechafin is null";
  $sql .= " and ((Proceso <> 'P3' and Flujo = 'F1') ";
  $sql .= " or (Proceso <> 'P6' and Flujo = 'F2') )";
} elseif ($rol == "Direccion") {
  $sql .= "where usuario<>'" . $usuario . "' and fechafin is null";
  $sql .= " and (Proceso = 'P6' and Flujo = 'F2')";
}

*/

$resultado = mysqli_query($con, $sql);
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
  <div class="container">
    <center>
      <h1> Bienvenido <?php echo $usuario; ?> </h1>
      <hr>
    </center>

  </div>

  <div class="container">

    <div class="card">
      <div class="card-header bg-dark text-white">
        <center>
          <h1>SEGUIMIENTO TRAMITES</h1>
          <hr>
        </center>
      </div>
      <div class="card-body">

        <table class="table table-secondary table-striped">
          <tr>
            <td>Flujo</td>
            <td>Proceso</td>
            <td>Nro.tramite</td>
            <td>Fecha inicial</td>
            <td>Fecha final</td>
            <td>Usuario</td>
            <td>Acción</td>
          </tr>
          <?php
          if ($resultado->num_rows < 1) {
          ?>
            <tr>
              <td class="text-center text-danger fs-4" colspan="7">Sin Tramites!</td>
            </tr>
          <?php
          }
          while ($fila = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila["Flujo"] . "</td>";
            echo "<td>" . $fila["Proceso"] . "</td>";
            echo "<td>" . $fila["Nro_tramite"] . "</td>";
            echo "<td>" . $fila["FechaInicio"] . "</td>";
            echo "<td>" . $fila["FechaFin"] . "</td>";
            echo "<td>" . $fila["Usuario"] . "</td>";
            echo "<td><a class='btn btn-danger' href='flujo.php?flujo=" . $fila["Flujo"] . "&proceso=" . $fila["Proceso"] . "&nro_tramite=" . $fila["Nro_tramite"] . "&usuario=" . $fila["Usuario"] . "'>Ir</td>";
            echo "</tr>";
          }
          ?>
        </table>
      </div>

      <div class="card text-end">
        <div class="card-body">
          <div class="d-flex justify-content-around">
          <?php
          if ($rol == "Estudiante") {
          ?>
            <div class="dropdown">
              <a class="btn btn-danger dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nuevo Tramite
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="nuevoTramite.php?flujo=F1">Incripción Nuevos</a></li>
                <li><a class="dropdown-item" href="nuevoTramite.php?flujo=F2">Conclusión de Estudios</a></li>
              </ul>
            </div>
          <?php
          }
          ?>

          <a href="logout.php" class="btn btn-warning">Cerrar Sesión</a>
        </div>
        </div>
      </div>
    </div>

  </div>



  <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>