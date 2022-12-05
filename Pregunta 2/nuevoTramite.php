<?php

    session_start();
 
    include "conexion.inc.php";
    $flujo = $_GET["flujo"];
    $usuario = $_SESSION["usuario"];
    $fechaActual = date('y/m/d h:i');
    $nro = random_int(1000, 9999); 

	$sql2 = "INSERT INTO flujotramite(flujo, proceso, nro_tramite, fechaInicio, fechaFin, usuario) ";
	$sql2.="values('".$flujo."','P1',' ";
	$sql2.=$nro."','".$fechaActual."', NULL, '".$usuario."')";
	mysqli_query($con, $sql2);

	header("Location: bentrada.php");
?>