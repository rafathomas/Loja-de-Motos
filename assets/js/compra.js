$(function() {
    $('#busca').keyup(function() {
        var buscaTexto = $(this).val();
        if (buscaTexto.length >= 1) {
            $.ajax({
                method: 'post',
                url: '../controllers/sys.php',
                data: { busca: 'sim', texto: buscaTexto },
                dataType: 'json',
                success: function(retorno) {
                    if (retorno.qtd == 0) {
                        $('#resultado_busca').html('<p>Não encontramos resultados para sua busca</p>');
                    } else {
                        $('#resultado_busca').html(retorno.dados);
                    }
                }
            });
        } else {
            $('#resultado_busca').html("");
        }
    });

    $('body').on('click', '#resultado_busca a', function() {
        var dadosProduto = $(this).attr('id');
        var splitDados = dadosProduto.split(':');

        $.ajax({
            method: 'post',
            url: '../controllers/sys.php',
            data: { add_produto: 'sim', produto: splitDados[0] },
            dataType: 'json',
            success: function(retorno) {
                $('tbody#content_retorno').html(retorno.dados);
            }
        });
    });
});