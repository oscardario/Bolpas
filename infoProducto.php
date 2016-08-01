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
<meta name="description" content="Bolsas Alternativas para Aspiradoras">
<meta name="author" content="Oscar Dario Román">
    <title>Venta de Bolsas para Aspiradoras</title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="css/freelancer.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="css/estilo.css" rel="stylesheet">
</head>

<body id="page-top" class="index">
    <!-- Navigation -->
    <?php include 'control/menu.php';
          include 'models/inicio_sesion.php'; ?>
          <?php
          $Id = $_GET['id'];
          $sql = "SELECT * FROM productos WHERE nombre = '$Id'";
          $result = mysqli_query($conexion,$sql);
          while ($data = mysqli_fetch_assoc($result)){
            $numero = mysqli_num_rows($result); ?>
    <center>
   <!-- GRID -->
<div class="container-fluid">
  <!-- <h1>Titulo</h1> -->
  <div class="row">
    <div class="imgInfoProducto">
      <div class="col-sm-4">
        <p>
            <a id="IdImg" href="#ModalImgProducto" data-toggle="modal" data-imagen="imagenes/<?php echo $data['imagen']?>" title="Vista Previa">
           <img src="imagenes/<?php echo $data['imagen']; ?>" class="img-thumbnail" alt="Cinque Terre" width="100%" height="100%">
           </a>
        </p>
      </div>
      </div>
    <div class="col-sm-6" >
<p>
<!-- PANEL -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3><?php echo $data['nombre']; ?> <?php echo $data['marca'];?> <?php echo $data['modelo']; ?></h3>
          </div>
          <div class="panel-body">
            Precio: <h5>Solo por: $<?php echo $data['precio']; ?></h5>
            <h5><?php echo $data['descripcion'];?> </h5>
           Disponible:
          <?php if($data['cantidad'] == 0){
            echo "<b>".$data['cantidad']."</b>, Se pueden hacer encargos <br>";
          }else {
            echo "<b>".$data['cantidad']."</b><br>";
          }
          ?>
              <button type="button" class="btn btn-default btn-primary" onClick=" window.location.href='carrito.php?id=<?php echo $data['nombre']?>' ">
              <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Agregar al carrito
              </button>
          </div>
        </div>
        </p>
    </div>
  </div>
</div></center>
<!-- COMENTARIOS -->
  <div class="container">
    <?php if (!$session) {?>
      <button class="btn btn-success" type="button"  data-toggle="modal" data-target="#ModalRegistroComent">Nuevo Comentario</button><br>
    <?php }?>
<?php include 'includes/ListarComentarios.php';?> </div>

<?php include 'models/ModalInsertComent.php';?>
</center>
<?php }?>
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
    <!-- Seccion Sobre Nosotros -->
    <?php include 'includes/Contactanos.php'; ?>
    <?php include 'includes/Comocomprar.php'; ?>
    <!-- Seccion Sobre Nosotros -->
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
<script src="includes/adsense.js"></script>
</html>
