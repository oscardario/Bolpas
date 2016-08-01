<!-- Modal -->
<div class="modal fade" id="ModalModifProducto" tabindex="-1" role="dialog" aria-labelledby="ModalModifProductoLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalModifProductoLabel">Modificar Producto</h4>
      </div>
      <div class="modal-body">
<form name="FormDatosProducto" method="post" action="../adm/ModifProducto.php" enctype="multipart/form-data">
    <div class="form-group">
    <input type="hidden" class="form-control" name="idP" id="idP" value="" >
    <label for="nombre">Nombre del Producto</label>
      <input type="text" class="form-control" name="nombre" id="nombre" value="" >
    </div>
    <div class="form-group">
    <label for="cantidad">Cantidad de Productos Disponibles</label>
      <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="Cantidad de Productos Disponibles" >
    </div>
    <div class="form-group">
    <div class="input-group">
    <span class="input-group-addon">Precio: $</span>
      <input type="number" class="form-control" name="precio" id="precio">
      <span class="input-group-addon">.00</span>
      </div>
    </div>
    <div class="form-group">
    <label for="cantidad">Marca</label>
      <input type="text" class="form-control" name="marca" id="marca">
    </div>
    <div class="form-group">
    <label for="cantidad">Modelo</label>
      <input type="text" class="form-control" name="modelo" id="modelo">
    </div>
    <div class="form-group">
    <label for="descripcion">Descripción</label>
      <input type="text" class="form-control" name="descripcion" id="descripcion">
    </div>
     <div class="form-group">
    <label for="imagen">Imagen actual del Producto: </label>
    <div class="row">
  <div class="col-sm-6 col-md-4">
    <a href="#" class="thumbnail">
      <img src="" id="imagen"><br>
    </a>
  </div>
</div>
    
    <label for="SelectImg">Seleccionar Nueva Imagen</label>
    <input type="file" name="SelectImg" id="SelectImg" >
  </div>
   
    <button type="submit" class="btn btn-success">Modificar Producto</button>
</form>
</div>
</div>
</div>
</div>
