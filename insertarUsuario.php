<?php

$conexion =mysqli_connect('localhost','root','perez','violencia');

if(!$conexion){
    echo "error de conexion";
}


$email=$_POST['email'];
$password=$_POST['password'];

$query="INSERT INTO usuario(idUsuario,correo,contrasenia) VALUES (NULL,'$email','$password')";
$resultado =mysqli_query($conexion,$query);

if($resultado){
    echo "registro correctamente";
}else{
    echo "error" ;
} 
?>