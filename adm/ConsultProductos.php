<?php include '../includes/conexion.php';
  session_start();
  if(isset($_SESSION['correo'])){
    $session = true;
  }else{
    $session = false;
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/dropdown.js"></script>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/simple-sidebar.css">
  <title>Consultar Productos</title>

</head>
<body>
<header><?php include '../control/sidebar.php';?></header>
<main>
  <table class="table table-hover">
 <tr>
  <td ><b>Nombre</b></td>
  <td ><b>Precio</b></td>
  <td ><b>Cantidad</b></td>
  <td ><b>Marca</b></td>
  <td ><b>Modelo</b></td>
  <td ><b>Descripción</b></td>
  <td ><b>Imagen</b></td>
  <td> <b>Opciones</b></td>
</tr>
<?php
  if($session){
  if($_SESSION['tipo'] == 'a'){
  $sql = "SELECT * FROM productos ";
  $result = mysqli_query($conexion,$sql);
  while ($data = mysqli_fetch_assoc($result)){

  if($data['cantidad'] >= 1)
    echo "<tr class= 'default' >";
  else
    echo "<tr class= 'danger' title='Prodcuto Agotado'>";
  ?>

  <td ><?php echo $data['nombre'];?> </td>
  <td ><?php echo $data['precio'];?></td>
  <td ><?php echo $data['cantidad'];?></td>
  <td ><?php echo $data['marca'];?></td>
  <td ><?php echo $data['modelo'];?></td>
  <td ><?php echo $data['descripcion'];?></td>
  <td ><img src="../imagenes/<?php echo $data['imagen']?>" width=50 height=50/></td>
  <td>
    <div class="btn-group" role="group" aria-label="...">
    <button type="button" data-nombre="<?php echo $data['nombre']?>" data-cantidad="<?php echo $data['cantidad']?>"
    data-precio="<?php echo $data['precio']?>" data-imagen="../imagenes/<?php echo $data['imagen']?>" data-marca="<?php echo $data['marca']?>"
    data-modelo="<?php echo $data['modelo']?>" data-descripcion="<?php echo $data['descripcion']?>" class="pb btn btn-warning" data-toggle="modal"
    data-target="#ModalModifProducto" title="Editar Producto"><span class = "glyphicon glyphicon-pencil"></span></button>
    <a class="btn btn-danger" role="button" href="EliminarProducto.php?id=<?php echo $data['nombre'];?>"
    title="Eliminar Producto"> <span class="glyphicon glyphicon-trash"></span></a>
  </div>
    </td>
<script type="text/javascript">
  $(document).on("click", ".pb", function () {
  var NomProducto = $(this).data('nombre');
  var CantProducto = $(this).data('cantidad');
  var PrecioProducto = $(this).data('precio');
  var MarcaProducto = $(this).data('marca');
  var ModeloProducto = $(this).data('modelo');
  var Descripcion = $(this).data('descripcion');
  var ImgProducto = $(this).data('imagen');
  $(".modal-body #nombre").val(NomProducto);
  $(".modal-body #cantidad").val(CantProducto);
  $(".modal-body #precio").val(PrecioProducto);
  $(".modal-body #marca").val(MarcaProducto);
  $(".modal-body #modelo").val(ModeloProducto);
  $(".modal-body #descripcion").val(Descripcion);
  var lo = document.getElementById('imagen');
  lo.src = ImgProducto;

});
</script>
<?php include '../models/ModalModifProducto.php'; } ?>
</tr>
</table>
</main>
  <?php }else header('Location:../index.php');
  }else header('Location:../index.php');?>


</body>
</html>
