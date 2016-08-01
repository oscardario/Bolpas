<!-- Modal -->
<div class="modal fade" id="ModalRegUsuario" tabindex="-1" role="dialog" aria-labelledby="ModalRegUsuarioLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalRegUsuarioLabel">Registrarse</h4>
      </div>
      <div class="modal-body">
<form name="FormRegistro" method="post" action="">
    <div class="form-group">
      <input type="email" class="form-control" name="correo" placeholder="Dirección Email" required>
    </div>
    <div class="form-group">
      <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="apellido" placeholder="Apellido" required>
    </div>
    <button type="submit" class="btn btn-success">Registrarse</button>
</form>
<?php 
if(isset($_POST['correo']) && isset($_POST['password']) && isset($_POST['nombre']) && isset($_POST['apellido'])){
include("conexion.php"); 
  $correo = $_POST['correo'];
  $password = $_POST['password'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
$sql = "INSERT INTO usuarios (correo,password,nombre, apellido) VALUES ('$correo','$password','$nombre','$apellido')";
$result = mysqli_query($conexion, $sql);
if($result){
  header('Location:index.php');
}else{
  echo 'Error al insertar';
} }
?>
      </div>
    </div>
  </div>
</div>