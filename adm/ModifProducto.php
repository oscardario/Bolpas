<?php include '../includes/conexion.php';
// $id = $_POST['idP'];
$nombre = $_POST['nombre'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$descripcion = $_POST['descripcion'];
$imagen = $_FILES['SelectImg']['name'];
$ruta = $_FILES["SelectImg"]["tmp_name"];
$destino = "../imagenes/".$imagen;
if($_FILES['SelectImg']['tmp_name']!=""){
	copy($ruta, $destino);
	$sql2 = "UPDATE productos SET imagen = '$imagen' WHERE nombre = '$nombre' ";
	$result2 = mysqli_query($conexion,$sql2);
}
$sql = "UPDATE productos SET nombre = '$nombre', cantidad = '$cantidad', marca = '$marca', modelo = '$modelo', descripcion = '$descripcion', precio = '$precio' WHERE nombre = '$nombre' ";
$result = mysqli_query($conexion, $sql);
if($result || $result2){ ?>
<script type="text/javascript">
document.location = ('ConsultProductos.php');
</script>
<?php
} ?>
