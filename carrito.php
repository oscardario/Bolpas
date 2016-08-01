<?php include 'includes/conexion.php';
  session_start();
  if(isset($_SESSION['correo'])){
    $session = true;
  }else{ $session = false; }
  include 'compras/AgregarAlCarro.php'
?>
<!DOCTYPE html>
<html ng-app>
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bolsas para Aspiradoras">
    <title>Bolpas - Venta de Bolsas para Aspiradoras</title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/cambiaCantidad.js"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="css/freelancer.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body id="page-top" class="index">
    <!-- Navigation -->
    <?php include 'control/menu.php';
          include 'models/inicio_sesion.php'; ?>
<center>
  <?php
  if(!isset($_SESSION['carrito'])){
    echo '<div class="alert alert-danger" role="alert">
    <center> <h3>Aun no ha añadido productos al carrito</h3> </center></div>';
  }
  ?>
<div class="container">
  <div class="row">
    <div class="col-sm-10">
        <?php
        $total=0;
if(isset($_SESSION['carrito'])){
  $total=0;
  $datos = $_SESSION['carrito'];
  for($i=0;$i<count($datos);$i++)
  {?>
<div class="jumbotron">
  <div class="row">
    <div class="col-sm-4">
      <!-- lado de la imagen -->
      <a id="IdImg" href="#ModalImgProducto" data-toggle="modal" data-imagen="imagenes/<?php echo $datos[$i]['Imagen']?>" title="Vista Previa">
      <img src="imagenes/<?php echo $datos[$i]['Imagen']?>" class="img-rounded" alt=""/ id="ImgCelda"> </a>
    </div>
    <div class="col-sm-8">

      <div class="row">
    <div class="col-sm-8" >
      <!-- lado de los datos -->
      <h3><?php echo $datos[$i]['Nombre'];?> </h3>
        Precio: $<?php echo $datos[$i]['Precio'];?><br>
      <?php echo $datos[$i]['Descripcion'];?>
    </div>
    <div class="col-sm-4" >
      <!-- BOTON CANTIDAD -->
      Cantidad: <input type="number" name="cantidad" value="<?php echo $datos[$i]['Cantidad'];?>"
        data-id="<?php echo $datos[$i]['Nombre']?>"
        data-precio="<?php echo $datos[$i]['Precio']?>"
        class="cantidad "><br>
          <span class="subtotal">Subtotal: $<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'].'.000';?></span>
          <!-- ELIMINAR PRODUCTO --><br>
          <a  class="text-warning" href="compras/EliminarProductoCarrito.php?id=<?php echo $datos[$i]['Nombre'];?>"
          title="Eliminar Producto"> Eliminar</a>
    </div>
  </div>
      <!-- fin -->
    </div>
  </div>
</div>
    <?php
    $total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
  }

}/*else{
  echo '<center><h2>No has añadido ningun producto</h2></center>';
} */?>
  </div>
  <div class="col-sm-1"> </div>
  <?php
  if (isset($_SESSION['carrito'])) {
    echo '<center><h2>Total: $<span id="total">'.$total.'.000</span></h2></center>'; ?>
    <button type="button" class="btn btn-success" onclick="location.href='flow.php'">
    Comprar</button>
  <?php } ?>
  </div>
 </div>


 </center>
<script type="text/javascript">
  $(document).on("click", "#IdImg", function () {
  var ImgProducto = $(this).data('imagen');
  var lo = document.getElementById('imagen');
  lo.src = ImgProducto; });
</script>
<?php include 'models/ModalImgProducto.php';?>
    <!-- Portfolio Grid Section -->
    <?php include 'includes/gridSection.php'; ?>
    <!-- Seccion Sobre Nosotros -->
    <?php include 'includes/SobreNosotros.php'; ?>
    <!-- Seccion de Contacto -->
    <?php include 'includes/Contactanos.php'; ?>
    <?php include 'includes/Comocomprar.php'; ?>
    <!-- Footer -->
    <?php include 'control/footer.php'; ?>
    <!-- Parte del Index-->
    <?php include 'control/ModalsImgGrid.php'; ?>
    <!-- Plugin JavaScript  para efecto al ver galeria contacto etc.-->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- efecto del menu -->
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <!-- Efecto Para Moviles -->
    <script src="js/freelancer.js"></script>


</body>
</html>
