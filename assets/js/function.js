$(function() {
    var formulario = $('form[name=formulario]');


    $('input[type=submit]').click(function(evento) {
        evento.preventDefault();
        var array = formulario.serializeArray();

        if (array[0].value == '' || array[1].value == '' || array[2].value == '' ||
            array[3].value == '' || array[4].value == '' ||
            array[5].value == '' || array[6].value == '' ||
            array[7].value == '' || array[8].value == '' ||
            array[9].value == '' || array[10].value == '' ||
            array[11].value == '' || array[12].value == '') {

            $('.resp').html('<div class="erros"><p>Preencha todos os campos corretamente para efetuarmos seu cadastro!</p></div>');
        } else {

            $.ajax({
                type: 'post',
                url: '../modal/cadastrar.php',
                data: { cadastrar: 'sim', campos: array },
                dataType: 'json',
                beforeSend: function() {
                    $('.resp').html('<div class="erros"><p>Aguarde enquanto processamos seus dados...</p></div>');
                },
                success: function(valor) {

                    if (valor.erro == "sim") {
                        Swal.fire({
                            icon: 'error',
                            title: valor.getErro,
                            showConfirmButton: true,
                        })
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: valor.msg,
                            showConfirmButton: true,
                        }).then((result) => {
                            if (result.value) {
                                window.location.href = "../index.php";
                            }

                        });


                    }



                }
            });


        }

        evento.preventDefault();
    });
});