<?php include 'conexion.php';
$IdComent = $_GET['id'];
$producto = $_GET['producto'];
$EliminarComent = "DELETE FROM comentarios WHERE id = '$IdComent'";
$ResultEliminaComent = mysqli_query($conexion,$EliminarComent);
if($ResultEliminaComent){ ?>
	<script type="text/javascript"> document.location = ('../infoProducto.php?id=<?php echo $producto ?>'); </script>
<?php }
?>
