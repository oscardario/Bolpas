<?php
include '../includes/conexion.php';
  session_start();
// le asigno el arreglo de la session a una variable
$arreglo = $_SESSION['carrito'];
// elimino el campo del arreglo en la nueva variable
$nombre2 = $_GET['id'];
for($i=0;$i<count($arreglo);$i++){
  $nombre = $arreglo[$i]['Nombre'];
  if($nombre != $nombre2){
    $datosNuevos[]=array(

            'Nombre'=>$arreglo[$i]['Nombre'],
            'Precio'=>$arreglo[$i]['Precio'],
            'Imagen'=>$arreglo[$i]['Imagen'],
            'Marca'=>$arreglo[$i]['Marca'],
            'Modelo'=>$arreglo[$i]['Modelo'],
            'Descripcion'=>$arreglo[$i]['Descripcion'],
            'Cantidad'=>$arreglo[$i]['Cantidad']);
  }
}
if(isset($datosNuevos)){
  $_SESSION['carrito'] = $datosNuevos;
}else{
  // al no entrar en la condicion del for y de el arreglo nuevo quiere decir que solo queda 1 asi que se elimina por completo el arrelgo
  unset($_SESSION['carrito']);
}
  header('Location: ../carrito.php');
?>
