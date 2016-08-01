<?php 
$ConsultMarca = "SELECT DISTINCT marca FROM productos";
$ResultMarca = mysqli_query($conexion, $ConsultMarca);
while ($Marcas = mysqli_fetch_assoc($ResultMarca)) {?>
	<li class="page-scroll"><a href="productos.php?id=<?php echo $Marcas['marca']; ?>"><?php echo $Marcas['marca']; ?></a></li>
<?php }
?>