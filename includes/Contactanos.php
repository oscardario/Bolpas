<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
            <center><h3>Si tienes alguna pregunta, contáctactanos y te responderemos a la brevedad posible.</h3></center>
                <form action="includes/EnviarEmail.php" method="post">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre" name = "nombre" required>

                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Tu Dirección Email" name="email"  required>

                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Número de Teléfono</label>
                            <input type="tel" class="form-control" placeholder="Numero de Teléfono" name="telefono" required>

                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Ciudad</label>
                            <input type="ciudad" class="form-control" placeholder="Ciudad" name="ciudad" required>

                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Mensaje</label>
                            <textarea rows="5" class="form-control" placeholder="Mensaje" name="mensaje" required></textarea>

                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
