<!-- Modal -->
<div class="modal fade" id="ModalRegistroProducto" tabindex="-1" role="dialog" aria-labelledby="ModalRegistroProductoLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalRegistroProductoLabel">Registrar Nuevo Producto</h4>
      </div>
      <div class="modal-body">
<form name="FormRegistro" method="post" action="../adm/InsertProducto.php" enctype="multipart/form-data">
    <div class="form-group">
      <input type="text" class="form-control" name="nombre" value="" placeholder="Nombre del Producto" required>
    </div>
    <div class="form-group">
      <input type="number" class="form-control" name="cantidad" placeholder="Cantidad de Productos Disponibles" required pattern="[0-9]*">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="marca" placeholder="Marca del Producto" required >
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="modelo" placeholder="Modelo" required >
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="descripcion" placeholder="Descripción" required >
    </div>
    <div class="form-group">
    <div class="input-group">
    <span class="input-group-addon">$</span>
      <input type="text" class="form-control" name="precio" placeholder="Precio por Unidad" required>

      </div>
    </div>
     <div class="form-group">
    <label for="imagen">Imagen del Producto</label>
    <input type="file" name="imagen" required>
  </div>

    <button type="submit" class="btn btn-success">Registrar Producto</button>
</form>

	</div>
    </div>
    </div>
</div>
