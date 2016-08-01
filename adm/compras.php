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
  <td ><b># de pago</b></td>
  <td ><b>Nombre</b></td>
  <td ><b>Dirección</b></td>
  <td ><b>Teléfono</b></td>
  <td ><b>Correo</b></td>
  <td ><b>Mensaje</b></td>
  <td ><b>Fecha</b></td>
  <td> <b>Total</b></td>
  <td> <b>Verificado</b></td>
  <td> <b>Correcto</b></td>
</tr>
<?php
  if($session){
  if($_SESSION['tipo'] == 'a'){
  $sql = "SELECT * FROM compras ORDER BY fecha DESC";
  $result = mysqli_query($conexion,$sql);
  while ($data = mysqli_fetch_assoc($result)){

    if($data['verificado'] == 'PENDIENTE') {?>
    <tr class= "warning" style="cursor:pointer;" title="Click aqui para ver los productos comprados" onclick = "location.href='pedidos.php?pago=<?php echo $data['pago'];?>'">
    <?php } if($data['verificado'] == 'INCORRECTO') {?>
    <tr class= "danger" style="cursor:pointer;" title="Click aqui para ver los productos comprados" onclick = "location.href='pedidos.php?pago=<?php echo $data['pago'];?>'">
    <?php }
    if($data['verificado'] == 'CORRECTO'){?>
    <tr class= "default" style="cursor:pointer;" title="Click aqui para ver los productos comprados" onclick = "location.href='pedidos.php?pago=<?php echo $data['pago'];?>'">
    <?php }?>

  <td ><?php echo $data['pago'];?> </td>
  <td ><?php echo $data['nombre'];?></td>
  <td ><?php echo $data['direccion'];?></td>
  <td ><?php echo $data['telefono'];?></td>
  <td ></td>
  <td ><?php echo $data['mensaje'];?></td>
  <td ><?php echo $data['fecha'];?></td>
  <td ><?php echo '$'.$data['monto'];?></td>
  <td ><?php echo $data['verificado'];?></td>
  <td>
    <div class="btn-group" role="group" aria-label="...">
      <a class="btn btn-success" role="button" href="CompraConcretada.php?pago=<?php echo $data['pago'];?>" title="Compra concretada">
      <span class="glyphicon glyphicon-ok"></span></a>
      <a class="btn btn-danger" role="button" href="PagoInvalido.php?pago=<?php echo $data['pago'];?>" title="Numero de pago no valido">
      <span class="glyphicon glyphicon-remove"></span></a>
  </div>
  </td>

</tr>

  <?php } 
  }else header('Location:../index.php');
}?>
</table>
</main>

</body>
</html>
