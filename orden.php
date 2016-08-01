<?php include 'includes/conexion.php';
  session_start();
  if(isset($_SESSION['correo'])){
    $session = true;
  }else{ $session = false; }

include "kpf/flowAPI.php";

$date = new DateTime();
$timestamp = $date->format('YmdHis');

$orden_compra = $_POST['orden'];
$monto = $_POST['monto'];
$concepto = $_POST['concepto'].' '.'Envío a la dirección: '.$_POST['direccion'];
$email_pagador = $_POST['pagador'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$sql = "INSERT INTO compras (pago,nombre,telefono, direccion, monto) VALUES ('$orden_compra','$email_pagador','$telefono','$direccion','$monto')";
$result = mysqli_query($conexion, $sql);

if(isset($_SESSION['carrito'])){
	$total=0;
	$datos = $_SESSION['carrito'];
	for($i=0;$i<count($datos);$i++){
		$articulo = $datos[$i]['Nombre'];
		$cantidad = $datos[$i]['Cantidad'];
	$sql2 = "INSERT INTO pedidos(pago,nombre,cantidad) VALUES ('$orden_compra','$articulo','$cantidad')";
	$result2 = mysqli_query($conexion, $sql2);
	}
}
//Opcional el medio de pago (Webpay = 1, Servipag = 2, Ambos = 9)
// $medioPago = $flow_medioPago;
$medioPago = $flow_medioPago;
$flowAPI = new flowAPI();

try {
	$flow_pack = $flowAPI->new_order($orden_compra, $monto, $concepto, $email_pagador);
	// Si desea enviar el medio de pago usar la siguiente línea
	//$flow_pack = $flowAPI->new_order($orden_compra, $monto, $concepto, $email_pagador, $medioPago);

} catch (Exception $e) {
	header('location: flow.php');
}

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
<div class="container">
	<h3>Por favor, confirme su orden antes de proceder al pago</h3>
	<p>
		Monto: <?php echo $monto?><br />
		Descripción: <?php echo $concepto ?><br />
		Email: <?php echo $email_pagador ?><br />
		Teléfono: <?php echo $telefono ?><br />
	</p>
	<form method="post" action="<?php echo $flow_url_pago?>">
	<input type="hidden" name="parameters" value="<?php echo $flow_pack ?>" />
	<button type="submit" class="btn btn-success btn-lg">Pagar</button>
	</form>
</div>

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
