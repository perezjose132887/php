<?php
$mysql = new mysqli(
    "localhost",
    "root",
    "perez",
    "violencia"
);
if($mysql->connect_error){
    die("la coneccion fallo".$mysql->connect_error);
}