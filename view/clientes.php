<?php
include_once "../core/conexao.php";
?>

<?php
include_once("index.php");
?>
<link rel="stylesheet" href="../assets/css/estilo.css">
<link rel="stylesheet" href="../assets/css/styless.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- BUSCAR CLIENTES E ADICIONAR CLIENTE -->
<form name="form_pesquisa" id="cliente">
  <div class="container">
    <div class="row"></div>
    <div class="col-10">
      <center><label id="nome1" for="busca">BUSCAR CLIENTES</label></center>
      <br>
      <br>
     <input type="text" name="pesquisaCliente" id="pesquisaCliente" placeholder="Buscar por...">
    </div>
    <div class="col-2">
      <img src="../assets/img/orcamento.png" id="orcamento" data-toggle="modal" data-target="#add_data_Modal" title="Adicionar novo orçamento">
    </div>
  </div>
  <div id="contentLoading">
    <center>
      <div id="loading"></div>
    </center>
  </div>
  <div class="container3">
    <div class="row">
      <div class="col-10">
        <div id="MostraPesq">Aqui aparecerá os dados buscados...</div>
        <script src="../assets/js/buscaCliente.js"></script>
      </div>
    </div>
  </div>
</form>

<div id="add_data_Modal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Fazer um orçamento</h4>
      </div>
      <div class="modal-body">
        <form method="post" id="insert_form">
          <label for="cpf">Consultar Cliente - CPF</label>
          <a href="cadCliente.php">
          <i class="fas fa-user-plus fa-2x" id="cliente" title="Adicionar um cliente" style="float: right; color:black;"></i>
          </a>
          <input type="text" class="form-control" id="cpf" name="cpf" style="width:230px;" placeholder="Digite o CPF" required>
          <br />

          <label>Nome do cliente</label>
          <input type="text" name="nome" id="name" class="form-control" placeholder="Nome completo" disabled="disabled" />
          <br />

          <label>Veículo do cliente</label>
          <input type="text" name="marca" id="designation" class="form-control" placeholder="Modelo do veículo" disabled="disabled" />
          <br />

          <label>Descrição do serviço</label>
          <textarea name="orcamento" id="address" class="form-control" placeholder="Descreva o serviço"></textarea>
          <br />
          <input type="hidden" name="employee_id" id="employee_id" />
          <center><input type="submit" class="btn btn-success" name="insert" id="insert" value="Salvar" style="width:230px;"></input></center>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<script src="../assets/js/personalizado.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
<link rel="stylesheet" href="../assets/css/orcamento.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function() {
    var $seuCampoCpf = $("#cpf");
    $seuCampoCpf.mask('000.000.000-00', {
      reverse: true
    });
  });
</script>
<script>
  $(document).ready(function() {
    $('#add').click(function() {
      $('#insert').val("Insert");
      $('#insert_form')[0].reset();
    });

    $('#insert_form').on("submit", function(event) {
      event.preventDefault();
      if ($('#name').val() == "") {
        alert("Name is required");
      } else if ($('#address').val() == '') {
        alert("Address is required");
      } else if ($('#marca').val() == '') {
        alert("Designation is required");
      } else {
        $.ajax({
          url: "../modal/insert.php",
          method: "POST",
          data: $('#insert_form').serialize(),
          beforeSend: function() {
            $('#insert').val("Inserting");
          },
          success: function(data) {
            $('#insert_form')[0].reset();
            $('#add_data_Modal').modal('hide');
            $('#employee_table').html(data);
          }
        });
      }
    });

  });
</script>