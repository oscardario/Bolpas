<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="../index.php">BOLPAS</a>
            </li>
            <li>
                <a href="" data-toggle="modal" data-target="#ModalRegistroProducto">Agregar Productos</a>
            </li>
            <li>
                <a href="ConsultProductos.php" >Modificar Productos</a>
            </li>
            <li>
                <a href="compras.php" >Compras Realizadas</a>
            </li>
            <li>
                <a href="../includes/CerrarSesion.php">Cerrar Sesión</a>
            </li>
        </ul>
    </div>
    <div id="page-content-wrapper">
        <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle"><span class="glyphicon glyphicon-align-justify"></span></a>
        <br>
    </div>
</div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
<?php include '../models/ModalInsertProducto.php'; ?>
