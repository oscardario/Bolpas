var inicio = function() {
    $(".cantidad").change(function(e) {
        if ($(this).val() != '') {

                var nombre = $(this).attr('data-id');
                var precio = $(this).attr('data-precio');
                var cantidad = $(this).val();
                $(this).parentsUntil('.jumbotron').find('.subtotal').text('Subtotal: $' + (precio * cantidad)+'.000');
                $.post('compras/modificarCantidadCarrito.php', {
                    Nombre: nombre,
                    Precio: precio,
                    Cantidad: cantidad
                }, function(e) {
                    $("#total").text( e +'.000');
                });
        }
    });
}

$(document).on('ready', inicio);
