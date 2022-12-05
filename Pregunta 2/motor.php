<?php

include "conexion.inc.php";

if(isset($_GET["inicio"])){
	header("Location: bentrada.php");
	exit;
}
session_start();
$flujo = $_GET["flujo"];
$proceso = $_GET["proceso"];
$pantalla = $_GET["pantalla"];
$nro_tramite = $_GET["nro_tramite"];
$usuario = $_GET["usuario"];


$fechaActual = date('y/m/d h:i');
$sql2="update flujotramite set fechafin='".$fechaActual."' ";
$sql2.="where flujo='".$flujo."' and ";
$sql2.="proceso='".$proceso."' and ";
$sql2.="nro_tramite='".$nro_tramite."' ";
mysqli_query($con, $sql2);


include $pantalla.".grabar.inc.php";

if (isset($_GET["Siguiente"]))
{
	$sql="select flujo, proceso, proceso_siguiente as procesoselect, tipo, rol, pantalla ";
	$sql.="from flujoproceso ";
	$sql.="where flujo='".$flujo."' and ";
	$sql.="proceso='".$proceso."'";
}
if (isset($_GET["Anterior"]))
{
	$sql="select flujo, proceso as procesoselect, proceso_siguiente, tipo, rol, pantalla ";
	$sql.="from flujoproceso ";
	$sql.="where flujo='".$flujo."' and ";
	$sql.="proceso_siguiente='".$proceso."'";
}

if (isset($_GET["Si"]))
{
	$sql="select flujo, procesoSI as procesoselect ";
	$sql.="from flujoprocesocondicionante ";
	$sql.="where flujo='".$flujo."' and ";
	$sql.="proceso='".$proceso."'";
}
if (isset($_GET["No"]))
{
	$sql="select flujo, procesoNO as procesoselect ";
	$sql.="from flujoprocesocondicionante ";
	$sql.="where flujo='".$flujo."' and ";
	$sql.="proceso='".$proceso."'";
}

if (isset($_GET["SiguienteF"]))
{
	header("Location: bentrada.php");
}

$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);
$proceso = $fila["procesoselect"];

$sql2="insert into flujotramite(Flujo, Proceso, Nro_tramite, FechaInicio,  Usuario) ";
$sql2.="values('".$flujo."','".$proceso."','";
$sql2.=$nro_tramite."','".$fechaActual."','".$usuario."')";
mysqli_query($con, $sql2);

$parametros="?flujo=".$flujo;
$parametros.="&proceso=".$proceso;
$parametros.="&nro_tramite=".$nro_tramite;
$parametros.="&usuario=".$usuario;

header("Location: flujo.php".$parametros);
?>