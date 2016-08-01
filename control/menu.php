<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <img src="img/logoBolpas.png"  width="250" height="100" class="img-responsive"/> -->
    <a class="navbar-brand" href="index.php">BOLPAS</a>
            </div>
            <form name="BuscarProducto" method="post" action="productos.php?id=" class="navbar-form navbar-left" role="search">
                            <div class="input-group col-md-12">
                                <input type="text" class="form-control" name="buscar_producto" id="buscar_producto" placeholder="Buscar productos" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="submit">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                  </form>
            <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#portfolio">Galeria</a>
                </li>

                <li class="page-scroll">
                    <a href="#about">Sobre Nosotros</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Contactanos</a>
                </li>
                <li class="page-scroll">
                    <a href="#comocomprar">Como Comprar</a>
                </li>
                        <!--Si es Administrador muestro opcion de administrar-->
                <?php if($session) {
                if($_SESSION['tipo'] == 'a'){?>
                <li class="page-scroll">
                    <a href="adm/administrar.php">Admin</a>
                 </li>
                <?php }}?>
                        <!-- Buscar Productos-->
                <li class="page-scroll">
                    <a href="productos.php?id=">Productos</a>
                </li>
                <!--<li class="page-scroll">
                    <a href="SecComentarios.php">Comentarios</a>
                </li> -->
                        <!-- Mostrar opciones si inicio sesion o no-->
                <?php if($session) { ?>
                <li class="page-scroll">
                    <a href="includes/CerrarSesion.php" >Cerrar Sesion</a>
                </li>
                <?php }else{ ?>
                <li class="page-scroll">
                    <a href="" data-toggle="modal" data-target="#ModalSesion">Iniciar Sesion</a>
                </li>
                <?php } ?>
                <li class="page-scroll">
                    <a href="carrito.php"><span id="ShopCelda" class="glyphicon glyphicon-shopping-cart"></span><span class="badge">
                      <?php
                      if (isset($_SESSION['carrito'])) {
                        echo count($_SESSION['carrito']); }else{echo '0';}?></span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script type="text/javascript" src="js/chat.js"></script>
