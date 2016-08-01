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
</head>

<body id="page-top" class="index">
    <!-- Navigation -->
    <?php include 'control/menu.php';
          include 'models/inicio_sesion.php';

if (isset($_SESSION['carrito'])) { ?>
<!-- FORMULADRIO DE COMPRA -->
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
            <form role="form" action="compras/ConcretarCompra.php" method="post">
              <div class="form-group">
                <label for="nombre">Nombre Completo *</label>
                <input type="text" class="form-control" name="nombre" placeholder="Tu Nombre" required>
              </div>
              <div class="form-group">
                <label for="Telefono">Teléfono *</label>
                <input type="number" class="form-control" name="telefono" placeholder="Teléfono de Contacto" required>
              </div>
              <div class="form-group">
                <label for="Dirección">Dirección de envio *</label>
                <input type="text" class="form-control" name="direccion" placeholder="Tu Dirección" required>
              </div>
              <div class="form-group">
                <label for="pago">Numero de Deposito o Transferencia *</label>
                <input type="number" class="form-control" name="pago" placeholder="Pago" required>
              </div>
              <div class="form-group">
                <label for="mensaje">Dejanos un mensaje (Opcional)</label>
                <textarea rows="4" class="form-control" placeholder="Mensaje" name="mensaje"></textarea>
              </div>
              <button type="submit" class="btn btn-success">Concretar Compra</button>
            </form>
           </div></div></div>
<?php }
if(isset($_SESSION['pagado'])&& !isset($_SESSION['carrito'])&&($_SESSION['pagado'])==false){
   echo '<div class="alert alert-danger" role="alert">
<center> <h3>Aun no ha añadido productos al carrito</h3> </center></div>';}
if (isset($_SESSION['pagado'])&& !isset($_SESSION['carrito'])&&($_SESSION['pagado'])==true) {
  echo '<div class="alert alert-success" role="alert">
  <center> <h3>Gracias por tu compra, nos pondremos en contacto con tigo tan pronto realicemos el envio</h3> </center></div>';
}
?>
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
