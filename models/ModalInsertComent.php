<!-- Modal -->
<div class="modal fade" id="ModalRegistroComent" tabindex="-1" role="dialog" aria-labelledby="ModalRegistroComentLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalRegistroComentLabel">Hacer un Comentario</h4>
      </div>
      <div class="modal-body">
<form name="FormComent" method="post" action="includes/InsertComent.php?id=<?php echo $Id?>" >
    <div class="form-group">
    <?php if($session) { ?>
    <input type="hidden" class="form-control" name="usuario" id ="usuario" value="<?php echo$_SESSION['correo']?>" >
    <?php }else { ?>
    <input type="hidden" class="form-control" name="usuario" id ="usuario" value="Anonimo" placeholder="Deja aqui tu Nombre" required>
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
