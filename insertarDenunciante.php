<?php

include 'ConectarBD.php';

$ci=$_POST['ci'];
$nombre=$_POST['nombre'];
$apellidoPaterno=$_POST['apellidoPaterno'];
$apellidoMaterno=$_POST['apellidoMaterno'];
$telefono=$_POST['telefono'];


$consulta="INSERT INTO persona (ci,nombre,apellidoPaterno,apellidoMaterno,telefono) VALUES('".$ci."','".$nombre."','".$apellidoPaterno."','".$apellidoMaterno."','".$telefono."')";
mysqli_query($mysql,$consulta) or die (mysqli_error());
mysqli_close($mysql);

?>