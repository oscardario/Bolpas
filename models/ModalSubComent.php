<!-- Modal -->
<div class="modal fade" id="ModalSubComent" tabindex="-1" role="dialog" aria-labelledby="ModalSubComentLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalSubComentLabel">Responder Comentario</h4>
      </div>
      <div class="modal-body">
<form name="FormSubComent" method="post" action="includes/InsertSubComent.php?id=<?php echo $nombre;?>" >
    <input type="hidden" class="form-control" name="subID" id="subID" value="" >
    <div class="form-group">
    <?php if($session) { ?>
    <input type="texto" class="form-control" name="usuario" id ="usuario" value="<?php echo$_SESSION['correo']?>" readonly>
    <?php }else { ?>
    <input type="text" class="form-control" name="usuario" id ="usuario" value="" placeholder="Deja aqui tu Nombre" required>
    <?php }?>
    </div>
    <div class="form-group">
      <textarea id="texto" name="texto" placeholder="Deja aqui tu Comentario..." style="width:100%" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Comentar</button>
</form>
</div>
    </div>
    </div>
</div>
