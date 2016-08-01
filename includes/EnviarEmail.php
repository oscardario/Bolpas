<?php
$destino = "bolpas@bolpas.cl";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$ciudad = $_POST['ciudad'];
$mensaje = $_POST['mensaje'];
$contenido = "Nombre: " .$nombre. "\nCorreo: " .$email. "\nTelefono: " .$telefono. "\nCiudad: " .$ciudad. "\nMensaje:\n" .$mensaje;
mail($destino,"Contacto", $contenido);
?>
<script type="text/javascript"> 
document.location = ('../index.php'); </script>