<?php include '../includes/conexion.php';
  session_start();
  if(isset($_SESSION['correo'])){
    $session = true;
  }else{
    $session = false;
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/simple-sidebar.css">
	<title>Insertar Productos</title>

</head>
<body>
	<?php if($session){
		if($_SESSION['tipo'] == 'a'){ ?>
				<header><?php include '../control/sidebar.php';?></header>
			<?php }else header('Location:../index.php');
	}else header('Location:../index.php');?>	

</body>
</html>