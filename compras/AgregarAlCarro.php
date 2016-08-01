<?php
if(isset($_SESSION['correo'])){
  $session = true;
}else{ $session = false; }

if(isset($_SESSION['carrito'])){
  $_SESSION['pagado'] = false;
  if(isset($_GET['id'])){
        $arreglo=$_SESSION['carrito'];
        $encontro=false;
        $numero=0;
        for($i=0;$i<count($arreglo);$i++){
          if($arreglo[$i]['Nombre']==$_GET['id']){
            $encontro=true;
            $numero=$i;
          }
        }
        if($encontro==true){
          $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
          $_SESSION['carrito']=$arreglo;
        }else{
          $nombre="";
          $precio=0;
          $imagen="";
          $marca="";
          $modelo="";
          $descripcion="";
          $id=$_GET['id'];
          $sql = "SELECT * FROM productos WHERE nombre='$id'";
          $result = mysqli_query($conexion,$sql);
          while ($f = mysqli_fetch_assoc($result)){
            $nombre=$f['nombre'];
            $precio=$f['precio'];
            $marca=$f['marca'];
            $modelo=$f['modelo'];
            $descripcion=$f['descripcion'];
            $imagen=$f['imagen'];
          }
          $datosNuevos=array(
                  'Nombre'=>$nombre,
                  'Precio'=>$precio,
                  'Imagen'=>$imagen,
                  'Marca'=>$marca,
                  'Modelo'=>$modelo,
                  'Descripcion'=>$descripcion,
                  'Cantidad'=>1);

          array_push($arreglo, $datosNuevos);
          $_SESSION['carrito']=$arreglo;

        }
  }

}else{
  if(isset($_GET['id'])){
    $nombre="";
    $precio=0;
    $imagen="";
    $marca="";
    $modelo="";
    $descripcion="";
    $id=$_GET['id'];
    $sql = "SELECT * FROM productos WHERE nombre='$id'";
    $result = mysqli_query($conexion,$sql);
    while ($f = mysqli_fetch_assoc($result)){
      $nombre=$f['nombre'];
      $precio=$f['precio'];
      $marca=$f['marca'];
      $modelo=$f['modelo'];
      $descripcion=$f['descripcion'];
      $imagen=$f['imagen'];
    }
    $arreglo[]=array(
            'Nombre'=>$_GET['id'],
            'Precio'=>$precio,
            'Imagen'=>$imagen,
            'Marca'=>$marca,
            'Modelo'=>$modelo,
            'Descripcion'=>$descripcion,
            'Cantidad'=>1);
    $_SESSION['carrito']=$arreglo;
    $_SESSION['pagado'] = false;
  }
}?>
