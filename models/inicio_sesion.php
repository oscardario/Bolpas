<!-- Modal Sesion -->
<div class="modal fade" id="ModalSesion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Iniciar Sesión</h4>
      </div>
      <div class="modal-body">
<form name="formSesion" method="post" action="" class="form-inline">
  <div class="form-group">
    <input type="text" class="form-control" name="correo" placeholder="Email">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="password" placeholder="Contraseña">
  </div>
  <button type="submit" class="btn btn-success">Iniciar Sesión</button>
</form>
<?php
  if(isset($_POST['correo']) && isset($_POST['password'])){
  
  $correo = $_POST['correo'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND password = '$password' ";
  $result = mysqli_query($conexion,$sql);
  if ($data = mysqli_fetch_assoc($result)){
    session_start();
    $_SESSION['correo'] = $data['correo'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['nombre'] = $data['nombre'];
    $_SESSION['tipo'] = $data['tipo']; ?>
    
    <script type="text/javascript">
    document.location=('index.php');
    </script>
<?php
  }else{
      echo 'El usuario no esta registrado///';
  }

  }
?>
      </div>
    </div>
  </div>
</div>
</div>