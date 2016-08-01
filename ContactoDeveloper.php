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
    <link rel="import" href="archivos.html" media="screen" title="no title" charset="utf-8">
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

    <?php include 'includes/EmailForDeveloper.php' ?>

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
<!--Start of Tawk.to Script-->
<!--End of Tawk.to Script-->
</html>
