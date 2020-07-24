$(document).ready(function() {

    //Aqui a ativa a imagem de load
    function loading_show() {
        $('#loading').html("<img src='../assets/img/loading.gif'/>").fadeIn('fast');
    }

    //Aqui desativa a imagem de loading
    function loading_hide() {
        $('#loading').fadeOut('fast');
    }


    // aqui a função ajax que busca os dados em outra pagina do tipo html, não é json
    function load_dados(valores, page, div) {
        $.ajax({
            type: 'POST',
            dataType: 'html',
            url: page,
            beforeSend: function() { //Chama o loading antes do carregamento
                loading_show();
            },
            data: valores,
            success: function(msg) {
                loading_hide();
                var data = msg;
                $(div).html(data).fadeIn();
            }
        });
    }

    //Aqui eu chamo o metodo de load pela primeira vez sem parametros para pode exibir todos
    load_dados(null, '../controllers/busca.php', '#MostraPesq');


    //Aqui uso o evento key up para começar a pesquisar, se valor for maior q 0 ele faz a pesquisa
    $('#pesquisaCliente').keyup(function() {

        var valores = $('#cliente').serialize() //o serialize retorna uma string pronta para ser enviada

        //pegando o valor do campo #pesquisaCliente
        var $parametro = $(this).val();

        if ($parametro.length >= 1) {
            load_dados(valores, '../controllers/busca.php', '#MostraPesq');
        } else {
            load_dados(null, '../controllers/busca.php', '#MostraPesq');
        }
    });

});