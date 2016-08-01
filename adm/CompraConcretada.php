<?php
include '../includes/conexion.php';
session_start();
$pago = $_GET['pago'];
  if (isset($_SESSION['tipo']) && $_SESSION['tipo'] == 'a'){
$sql = "UPDATE compras SET verificado = 'CORRECTO' WHERE pago = '$pago'";
$result = mysqli_query($conexion, $sql);
if($result)
header('Location: compras.php');
}
?>
