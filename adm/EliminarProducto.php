<?php include '../includes/conexion.php';
$id = $_GET['id'];
$sql = "DELETE FROM productos WHERE nombre = '$id'";
$result = mysqli_query($conexion,$sql);
if($result)
	header('Location:../adm/ConsultProductos.php');
?>
