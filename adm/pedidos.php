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
  <center><h2 >Lista de Pedidos de la compra: <?php echo $_GET['pago']; ?></h2></center>
  <div class="containers" style="text-align:center;">
  <table class="table table-hover">
 <tr>
  <td ><b>Bolsa</b></td>
  <td ><b>Cantidad</b></td>
</tr>
<?php
  $pago = $_GET['pago'];
  if($session){
  if($_SESSION['tipo'] == 'a'){
  $sql = "SELECT * FROM pedidos WHERE pago = '$pago'";
  $result = mysqli_query($conexion,$sql);
  while ($data = mysqli_fetch_assoc($result)){ ?>

  <td width="600"><?php echo $data['nombre'];?></td>
  <td ><?php echo $data['cantidad'];?></td>
  <td>
    <a href="compras.php">Volver a Compras</a>
  </td>

</tr>
</table>
</div>
</main>
  <?php }
  }else header('Location:../index.php');
}?>


</body>
</html>
