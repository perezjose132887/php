<?php

include 'ConectarBD.php';

$ci=$_POST['ci'];
$tipoDeDenuncia=$_POST['tipoDeDenuncia'];
$declaracion=$_POST['declaracion'];





$consulta="INSERT INTO denuncia (ci,tipoDeDenuncia,declaracion) VALUES('".$ci."','".$tipoDeDenuncia."','".$declaracion."')";
mysqli_query($mysql,$consulta) or die (mysqli_error());
mysqli_close($mysql);
?>