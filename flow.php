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
          include 'models/inicio_sesion.php';
    if(isset($_SESSION['carrito'])){
          ?>

<section id="contact">
    <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <h3 class="text-center"> Antes de seguir con la compra, verifique que su producto sea el correcto y rellene los campos necesarios</h3>
            <form action="orden.php" method="post">

<?php
  $sql = "SELECT pago FROM  compras ORDER BY pago DESC LIMIT 1";
  $result = mysqli_query($conexion,$sql);
  while ($data = mysqli_fetch_assoc($result)){
  $numero = mysqli_num_rows($result);
?>
    <input type="hidden" name="orden" id="orden" class="form-control"
    value="<?php echo $data['pago']+1 ?>" readonly/>
<?php } ?>
            <label>Productos agregados: </label>

<?php
  $total=0;
  if(isset($_SESSION['carrito'])){
    $total=0;
    $datos = $_SESSION['carrito'];
    for($i=0;$i<count($datos);$i++){
?>
<a href="infoProducto.php?id=<?php echo $datos[$i]['Nombre']?>"><?php echo '('.$datos[$i]['Cantidad'].') '.$datos[$i]['Nombre']?></a> |
<?php $total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total; } } ?><br>



<input type="hidden" name="concepto" id="concepto" value="
<?php
  if(isset($_SESSION['carrito'])){
    $info = $_SESSION['carrito'];
    for($i=0;$i<count($info);$i++){
      echo 'Pago de: ('.$info[$i]['Cantidad'].') '.$info[$i]['Nombre']. ' | ';
    }
  }
?>
"/>
                        <label>Monto a pagar: </label> $<?php echo $total.'.000' ?>

                        <input type="hidden" name="monto" id="monto" value="<?php echo $total.'000' ?>"
                        class="form-control" readonly/>
                        <div class="row control-group">
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email</label>
                                <input type="text" name="pagador" id="pagador" placeholder="Tu email de contácto" required class="form-control" required/>
                              </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Teléfono</label>
                                <input type="text" name="telefono" id="telefono" placeholder="Tu número de teléfono" equired class="form-control" required/>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Dirección</label>
                                <input type="text" name="direccion" id="direccion" placeholder="Dirección de envío" equired class="form-control" required/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg" id="btnAceptar">Seguir con la compra</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php }else {
  echo "<h3 class='text-center'> Por favor agregue primero productos al carrito</h3>";
} ?>
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
