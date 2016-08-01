<?php include '../includes/conexion.php';
$nombre = $_POST['nombre'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$descripcion = $_POST['descripcion'];
$imagen = $_FILES['imagen']['name'];
$ruta = $_FILES["imagen"]["tmp_name"];
$destino = "../imagenes/".$imagen;
copy($ruta, $destino);
$sql = "INSERT INTO productos (nombre,cantidad,precio, imagen, marca, modelo, descripcion) VALUES ('$nombre','$cantidad','$precio','$destino','$marca','$modelo', '$descripcion')";
$result = mysqli_query($conexion, $sql);
if($result){ ?>
<script type="text/javascript">
document.location = ('ConsultProductos.php');
</script>
<?php } ?>
