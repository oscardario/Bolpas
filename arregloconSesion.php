<?php
session_start();
// asigno un arreglo a la variable de session
$_SESSION['fotos']= array('oscar'=>'drio','maikel'=>'jose');
// a una variable le asigno el arreglo que se encuentra en la session
$arreglo = $_SESSION['fotos'];
// elimino el campo que deseo de la variable que contiene el arreglo
unset($arreglo['oscar']);
// le asigno el nuevo valor del arreglo a la variable de ssesion
$_SESSION['fotos'] = $arreglo;
// muestro por pantalla la estructra del arreglo
var_dump($_SESSION['fotos']);
// muestro por pantalla el numero de valores del arreglo
echo count($_SESSION['fotos']);

// recorro el arreglo y muestro solo las keys de cada indice
for($i=0;$i<count($_SESSION['fotos']);$i++)
   {
      echo key($_SESSION['fotos']);
      next($_SESSION['fotos']);
   }
?>







<?php/*
session_start();
$hola = 'hola';
$_SESSION['fotos']= array('oscar'=>'drio','maikel'=>'jose');
$arreglo = $_SESSION['fotos'];

$_SESSION['fotos'] = $arreglo;
var_dump($_SESSION['fotos']);
echo count($_SESSION['fotos']);
for($i=0;$i<count($_SESSION['fotos']);$i++)
   {
      echo key($_SESSION['fotos']);
      next($_SESSION['fotos']);
   } -->
