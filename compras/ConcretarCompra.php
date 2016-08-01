<?php include '../includes/conexion.php';
session_start();
if(isset($_SESSION['carrito'])){
$pago = $_POST['pago'];
$nombrePersona = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$mensaje = $_POST['mensaje'];
$destino = "bolpas@bolpas.cl";
$monto = $_SESSION['TotalPago']; ///CREE ESTA VARIABLE DE SESSION EN COMPAS/modificarCantidadCarrito
$fecha=date("d-m-Y");
$hora=date("H:i:s");
$asunto="Compra en Bolpas.cl";
$desde="www.bolpas.cl";
  $sql = "INSERT INTO compras (pago,nombre,telefono,direccion,mensaje,monto) VALUES ('$pago','$nombrePersona','$telefono','$direccion','$mensaje','$monto')";
$result = mysqli_query($conexion, $sql);


  $arreglo = $_SESSION['carrito'];
  for ($i=0; $i < count($arreglo) ; $i++) {
    $nombre = $arreglo[$i]['Nombre'];
    $cantidad = $arreglo[$i]['Cantidad'];
$sql2 = "INSERT INTO pedidos (pago,nombre,cantidad) VALUES ('$pago','$nombre','$cantidad')";
$result2 = mysqli_query($conexion,$sql2);
  }
}
if($result && $result2){
  $productos = "";
  for ($i=0; $i < count($arreglo) ; $i++) {
    $productos = $arreglo[$i]['Nombre'];
    $cantidadProducto = $arreglo[$i]['Cantidad'];
    $contenido = "Nombre: " .$nombrePersona. "\nTelefono: " .$telefono. "\nDireccion: " .$direccion. "\nNumero de Pago: " .$pago. "\nProducto: " .$productos. "\nCantidad: " .$cantidadProducto. "\nMensaje:\n" .$mensaje;
    mail($destino,"Compra", $contenido);
}


  unset($_SESSION['carrito']);
  unset($_SESSION['TotalPago']);
  $_SESSION['pagado'] = true;
header('Location:../pago.php');
}else {
  $_SESSION['pagado'] = false;
  echo 'No se puedo guardar la compra';
}?>
