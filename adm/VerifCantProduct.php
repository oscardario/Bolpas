<?php 
$ConsultCantProduct = "SELECT cantdad FROM productos WHERE id = $data[id] ";
$ResultCantP = mysqli_fetch($conexion,$ConsultCantProduct);
if($ResultCantP > 0){
	$CantidadP = "info";
}else{$CantidadP = "danger"}
?>