<?php include 'includes/conexion.php';
$producto = $_POST['buscar_producto'];
$buscar = "SELECT * FROM productos WHERE nombre like '%$producto%'";
$ResultBuscar = mysqli_query($conexion,$buscar);
while ($ListProduct = mysqli_fetch_assoc($ResultBuscar)) { ?>
	<script type="text/javascript"> document.location = ("productos.php?id=<?php echo $ListProduct['marca'] ?>"); </script>
<?php }
?>
