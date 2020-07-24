$(document).ready(function() {
    $("input[name='cpf']").blur(function() {
        var $nome = $("input[name='nome']");
        var $marca = $("input[name='marca']");
        var $orcamento = $("textarea[name='orcamento']");
        var cpf = $(this).val();

        $.getJSON('../modal/proc_pesq_user.php', { cpf },
            function(retorno) {
                $nome.val(retorno.nome);
                $marca.val(retorno.marca);
                $orcamento.val(retorno.orcamento);
            }
        );
    });
});