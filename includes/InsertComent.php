<?php include '../includes/conexion.php';
$usuario = $_POST['usuario'];
$texto = $_POST['texto'];
$nombre = $_GET['id'];
$sql = "INSERT INTO comentarios (usuario,texto,nombre) VALUES ('$usuario','$texto','$nombre')";
$result = mysqli_query($conexion, $sql);
if($result){ ?>
	<script type="text/javascript"> document.location = ('../infoProducto.php?id=<?php echo $nombre;?>'); </script>
<?php } ?>
