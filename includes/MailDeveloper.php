<?php
$destino = "oscardario.roman@gmail.com";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$contenido = "Nombre: " .$nombre. "\nCorreo: " .$email. "\nTelefono: " .$telefono. "\nMensaje:\n" .$mensaje;
mail($destino,"Cliente para Pagina web", $contenido);
?>
<script type="text/javascript">
document.location = ('../index.php'); </script>
