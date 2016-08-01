<?php 
$ConsultModelo = "SELECT DISTINCT modelo FROM productos";
$ResultModelo = mysqli_query($conexion, $ConsultModelo);
while ($Modelos = mysqli_fetch_assoc($ResultModelo)) {?>
	<li class="page-scroll"><a href="productos.php?id=<?php echo $Modelos['modelo']; ?>"><?php echo $Modelos['modelo']; ?></a></li>
<?php }
?>