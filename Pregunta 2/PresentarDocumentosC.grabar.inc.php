<?php

    $usuarioc = $_GET["usuarioc"];
    $ci=$_GET["ci"];
    $extension=$_GET["extension"];
    $nombreCompleto=$_GET["nombreCompleto"];
    $direccion=$_GET["direccion"];
    $correo=$_GET["correo"];
    $telefono=$_GET["telefono"];

    $sql5="UPDATE alumno ";
    $sql5.="SET nombreCompleto='".$nombreCompleto."', ";
    $sql5.= "ci='".$ci."', ";
    $sql5.= "direccion='".$direccion."', ";
    $sql5.= "extension='".$extension."', ";
    $sql5.= "correo='".$correo."', ";
    $sql5.= "telefono='".$telefono."' ";
    $sql5.="WHERE usuario='".$usuarioc."'";
    $resultadofi=mysqli_query($con, $sql5);

?>