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
<meta name="description" content="Bolsas Alternativas para Aspiradoras">
<meta name="author" content="Oscar Dario Román">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bolpas - Venta de Bolsas para Aspiradoras</title>
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
          include 'models/inicio_sesion.php'; ?>
    <!-- Header -->
<header style="height:100px"></header>  
  <div class="container"> <br>
    <center>
      <!--COLLAPSE Comentarios-->
      <button class="btn btn-success" type="button"  data-toggle="modal" data-target="#ModalRegistroComent">Nuevo Comentario</button>
        <?php include 'includes/ListarComentarios.php';?>
    </center>
    <?php include 'models/ModalInsertComent.php';?>
  </div> 
    <!-- Portfolio Grid Section -->
    <?php include 'includes/gridSection.php'; ?>
    <!-- Seccion Sobre Nosotros -->
    <?php include 'includes/SobreNosotros.php'; ?>
    <!-- Seccion de Contacto -->
    <?php include 'includes/Contactanos.php'; ?>
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
