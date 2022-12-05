
<?php 
include "conexion.inc.php";
$usuario = $_GET["usuario"];
$password = $_GET["password"];
$sql="select * from usuario where usuario='".$usuario;
$sql.="' and password='".$password."'";
$resultado = mysqli_query($con, $sql);
$fila = mysqli_fetch_array($resultado);
echo $usuario;
echo $password;
if ($fila["usuario"] == $usuario and $fila["password"] == $password)
{ 
	session_destroy();
    session_start();
    
    $_SESSION["usuario"] = $usuario;
	$_SESSION["rol"] = $fila["rol"];
    header("Location: bentrada.php");
}
else{
	header("Location: index.php");
}
?>


