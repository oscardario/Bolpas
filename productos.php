<?php include 'includes/conexion.php';
  session_start();
  if(isset($_SESSION['correo'])){
    $session = true;
  }else{ $session = false; }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bolsas para Aspiradoras">
    <title>Bolpas - Venta de Bolsas para Aspiradoras</title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
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
    <!-- Header -->
  <header></header>
<div class="container"> <br>
  <h3>Tenemos disponibilidad de bolsas para una gran variedad de Marcas y Modelos de Aspiradoras</h3>
  <ul class="nav navbar-nav ">
    <li  class="dropdown">
      <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"> Marca de Aspiradoras <span class="caret"></span></button>
      <ul class="dropdown-menu">
      <?php include 'includes/ListaMarcas.php'; ?>
      </ul>
    </li>
  </ul>

  <ul class="nav navbar-nav ">
    <li  class="dropdown">
      <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#"> Modelos <span class="caret"></span></button>
      <ul class="dropdown-menu">
      <?php include 'includes/ListaModelos.php'; ?>
      </ul>
    </li>
  </ul>
</div> <br>
<center>
<div class="container">
<?php
$Id = $_GET['id'];
if ($_POST) {
$coinside_producto = $_POST['buscar_producto'];
$sql = "SELECT * FROM productos WHERE nombre like '%$coinside_producto%'";
}else
$sql = "SELECT * FROM productos WHERE marca = '$Id' OR modelo = '$Id'";
$result = mysqli_query($conexion,$sql);
while ($data = mysqli_fetch_assoc($result)){
  $numero = mysqli_num_rows($result); ?>

  <center>
    <div class="col-sm-6 col-md-4">
    <td>
      <div class="thumbnail" onclick="location.href='infoProducto.php?id=<?php echo $data['nombre']?>'" style="cursor:pointer;">
      <div class="caption">
      <img src="imagenes/<?php echo $data['imagen']?>" class="img-rounded" alt=""/ id="ImgCelda">

          <h3><a href="infoProducto.php?id=<?php echo $data['nombre']?>"><?php echo $data['nombre'];?></a>
            </h3>
          <p id="tarjetasProductos">
          Marca: <?php echo $data['marca'];?>
          Modelo: <?php echo $data['modelo'];?>
          Precio: $<?php echo $data['precio'];?> <br>
          </p>
          <!-- <p id="ShopCelda" class="page-scroll"><a href="#contact"><span class="glyphicon glyphicon-shopping-cart"></span></a></p> -->
        </div>
      </div>
      </td>
    </div>
  </center>
  <?php } ?>
 </div>  </center>

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
