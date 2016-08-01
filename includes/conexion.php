<?php
$server = 'localhost';
$usuario = 'root';
$password = '12345678';
$db = 'bolpascl_bolpas';

$conexion = @mysqli_connect($server,$usuario,$password,$db);
if( !$conexion) die("Error de Conexion".mysqli_connect_error());
?>
