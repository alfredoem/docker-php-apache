<?php

include './conexion.php';

$codigo=$_POST['codigo'];
$producto=$_POST['producto'];
$precio=$_POST['precio'];
$fabricante=$_POST['fabricante'];

//$consulta="INSERT INTO producto VALUES('".$codigo."','".$producto."','".$precio."','".$fabricante."')";
$consulta="INSERT INTO producto VALUES('$codigo', '$producto', '$precio', '$fabricante')";

echo $consulta;

mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
