<?php
$nombre = $_GET['id'];
$ConsultaComentarios = "SELECT * FROM comentarios WHERE nombre = '$nombre'";
$ResultComentarios = mysqli_query($conexion,$ConsultaComentarios);
while ($DatosComent = mysqli_fetch_assoc($ResultComentarios)) {?>

<!-- PANEL--><br>
<div class="comentarios">
<div class="panel panel-primary">
<!-- TITULO DEL PANEL-->



<!--CUERPO DEL PANEL-->
  <div class="panel-body">
    <div style="float:right;">
      <?php if ($session && $_SESSION['tipo'] == 'a'){?>
        <div class="btn-group" role="group" aria-label="...">
          <button id="prueba"  data-id="<?php echo $DatosComent['id']?>" class="btn btn-success" data-toggle="modal" data-target="#ModalSubComent">Responder</button>
          <a class="btn btn-danger" role="button" href="includes/EliminarComent.php?id=<?php echo $DatosComent['id'];?>&producto=<?php echo $nombre?>"><span class="glyphicon glyphicon-trash"></span></a>
        </div>
      <?php } ?>
    </div> <span class="glyphicon glyphicon-triangle-bottom"></span>
    <?php echo $DatosComent['texto']; ?> <span class="FechaComent">- <?php echo $DatosComent['fecha'];?> </span>
    <?php include 'ListaSubComentarios.php'; ?>
  </div>
</div>
</div>
<!-- SCRIPT PARA PASAR EL ID DEL COMENTARIO AL MODAL SUBCOMENTARIO-->
<script type="text/javascript">
  $(document).on("click", "#prueba", function () {
  var IdComent = $(this).data('id');
  $(".modal-body #subID").val(IdComent);
});
</script>
<?php } include 'ListaSubComentarios.php';
include 'models/ModalSubComent.php'; ?>
