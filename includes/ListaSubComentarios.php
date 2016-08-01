<?php
$ConsultSubComent = "SELECT * FROM subcoment WHERE id = '$DatosComent[id]'";
$ResultSubComent = mysqli_query($conexion,$ConsultSubComent);
while ($datos = mysqli_fetch_assoc($ResultSubComent)){ ?>
	<div class="subcomentario">
	<div class="panel panel-default" >


  <?php if ($session && $_SESSION['tipo'] == 'a'){?>
  <div class="btn-group" role="group" aria-label="..." style="float:right">
  <a class="btn btn-danger" role="button" href="includes/EliminarSubComent.php?id=<?php echo $datos['subID'];?>&producto=<?php echo $nombre?>"><span class="glyphicon glyphicon-trash"></span></a>
  </div>
  <?php }?>

  <div class="panel-body"> <span class="glyphicon glyphicon-triangle-right"> </span>
    <?php echo $datos['texto'] ?> - <span class="FechaComent"><?php echo $datos['fecha'];?> </span>
  </div>
</div>
</div>
<?php } ?>
