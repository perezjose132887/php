<?php

include 'ConectarBD.php';
$email=$_POST['email'];
$password=$_POST['password'];

//$email="gorila@gmail.com";
//$password="gorila";

$sentencia=$mysql->prepare("SELECT * FROM usuario WHERE correo=? AND contrasenia=?");
$sentencia->bind_param('ss',$email,$password);
$sentencia->execute();

$resultado=$sentencia->get_result();
if($fila=$resultado->fetch_assoc()){
    echo json_encode($fila,JSON_UNESCAPED_UNICODE);
}

$sentencia->close();
$mysql->close();

?>