$(function() {
    var formulario1 = $('form[name=formulario1]');

    $('input[type=submit]').click(function(evento) {
        evento.preventDefault();
        var array = formulario1.serialize();


        $.ajax({
            type: 'post',
            url: '../modal/cadastrarPeca.php',
            data: formulario1.serialize(),

            beforeSend: function() {
                $('.resp').html('<div class="erros"><p>Aguarde enquanto processamos seus dados...</p></div>');
            },
            success: function(valor) {

                if (valor.erro == "sim") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Nao foi possível inserir uma peça no banco de dados',
                        showConfirmButton: true,
                    })
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: 'Peça inserido com sucesso!',
                        showConfirmButton: true,
                    }).then((result) => {
                        if (result.value) {
                            location.reload();
                        }

                    });


                }



            }
        });




        return false;
    });
});