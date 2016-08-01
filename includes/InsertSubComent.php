<?php include 'conexion.php';
$idComent = $_POST['subID'];
$usuario = $_POST['usuario'];
$texto = $_POST['texto'];
$nombre = $_GET['id'];
$SubComent = "INSERT INTO subcoment (id,usuario,texto) VALUES ('$idComent','$usuario','$texto')";
$resulta = mysqli_query($conexion, $SubComent);
if($resulta){ ?>
	<script type="text/javascript"> document.location = ('../infoProducto.php?id=<?php echo $nombre;?>'); </script>
<?php } ?>
