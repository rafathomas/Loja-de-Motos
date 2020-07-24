<?php
include_once("index.php");

?>
<?php
include_once('../core/config.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro de clientes</title>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="../assets/js/alert.js" type="text/javascript" charset="utf-8" async defer></script> 
  <link rel="stylesheet" href="../assets/css/wireframe.css">
  
</head>


<body class="bg-light">
  <div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-12 order-md-1">
          <form id="formulario" method="post" action="" enctype="multipart/form-data" name="formulario">
            <center>
              <b>
              <br>
                <h1 class=""><img src="../assets/img/icons7.png">
                  <contenteditable="true">Cadastrar cliente
                </h1>
              </b>
            </center>
            <br>
            <center> <strong>Dados do cliente</strong></center>
            <hr>
            <form id="formulario" method="post" action="" enctype="multipart/form-data" name="formulario">
              <div class="row">
                <div class="col-md-6 mb-3"> <label for="firstName">Nome</label>
                  <input type="text" class="form-control" name="nome" id="nome" placeholder="" value="" required="">
                  <div class="invalid-feedback"> Nome precisa ser válido. </div>
                </div>
                <div class="col-md-6 mb-3"> <label for="lastName">Sobrenome</label>
                  <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="" value="" required="">
                  <div class="invalid-feedback"> Sobrenome nome precisa ser válido. </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3"> <label for="cpf">CPF</label>
                  <input type="text" class="form-control" id="cpf" name="cpf" placeholder="" value="" required="">
                  <div class="invalid-feedback"> CPF precisa ser válido. </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3"> <label for="telefone">Telefone Fixo</label>
                  <input type="text" class="form-control telefone" name="telefone" id="telefone" placeholder="" value="" required="">
                  <div class="invalid-feedback"> Telefone precisa ser válido. </div>
                </div>
                <div class="col-md-6 mb-3"> <label for="celular">Celular</label>
                  <input type="text" class="form-control celular" name="celular" id="celular" placeholder="" value="" required="">
                  <div class="invalid-feedback"> Celular precisa ser válido. </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 mb-3"> <label for="cep">CEP</label>
                  <input type="text" class="form-control cep-mask" name="cep" id="cep" placeholder="" required="">
                  <div class="invalid-feedback"> CEP precisa ser válido.</div>
                </div>
                <div class="col-md-4 mb-3"> <label for="rua">Logadouro</label>
                  <input type="text" class="form-control" name="rua" id="rua" placeholder="" required="">
                  <div class="invalid-feedback"> Rua precisa ser válido. </div>
                </div>
                <div class="col-md-2 mb-3"> <label for="bairro">Bairro</label>
                  <input type="text" class="form-control" name="bairro" id="bairro" placeholder="" required="">
                  <div class="invalid-feedback"> Bairro precisa ser válido. </div>
                </div>
                <div class="col-md-3 mb-3"> <label for="cidade">Cidade</label>
                  <input type="text" class="form-control" name="cidade" id="cidade" placeholder="" required="">
                  <div class="invalid-feedback"> Cidade precisa ser válido. </div>
                </div>
              </div>
              <center> <strong>Informações do veículo</strong></center>
              <hr>
              <div class="row">
                <div class="col-md-3 mb-3"> <label for="marca">Marca</label>
                  <input type="text" class="form-control" name="marca" id="marca" placeholder="" required="">
                  <div class="invalid-feedback"> Marca precisa ser válido. </div>
                </div>
                <div class="col-md-4 mb-3"> <label for="modelo">Modelo</label>
                  <input type="text" class="form-control" name="modelo" id="modelo" placeholder="" required="">
                  <div class="invalid-feedback"> Modelo precisa ser válido. </div>
                </div>
                <div class="col-md-2 mb-3"> <label for="placa">Placa</label>
                  <input type="text" class="form-control" name="placa" id="placa" placeholder="" maxlength="7">
                  <div class="invalid-feedback"> Placa precisa ser válido. </div>
                </div>
                <div class="col-md-3 mb-3"> <label for="km">Quilometragem</label>
                  <input type="number" class="form-control" name="km" id="km" placeholder="" required="">
                  <div class="invalid-feedback"> KM precisa ser válido. </div>
                </div>
              </div>
              <hr class="mb-4">
              <center><input type="submit" name="submit" id="salvar" class="btn btn-success" value="Cadastrar" </center> </form> </div> </div> </div> </div> <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
            </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="../assets/js/mask.js"></script>
  <script src="../assets/js/alert.js"></script>
  <script src="../assets/js/function.js"></script>
  <script src="../assets/js/cep.js"></script>


  <script>
    $(document).ready(function() {
      var $seuCampoCpf = $("#cpf");
      $seuCampoCpf.mask('000.000.000-00', {
        reverse: true
      });
    });
  </script>
  	<script type="text/javascript">
		$(function() {

			$("#cpf").change(function() {
				var cpf = $("#cpf").val();

				$.get('valida_usuario.php?cpf=' + cpf, function(data) {

					data = JSON.parse(data);
					if (data.error) {
						Swal.fire({
							icon: 'error',
							title: data.msg,
							showConfirmButton: true,
						}).then((result) => {
							if (result.value) {
								$("#cpf").val('');
								$('#salvar').hide();
							}
						});
					} else {
						$('#salvar').show();
					}

				});
			});

		});
	</script>
    	<script type="text/javascript">
		$(function() {

			$("#placa").change(function() {
				var placa = $("#placa").val();

				$.get('valida_placa.php?placa=' + placa, function(data) {

					data = JSON.parse(data);
					if (data.error) {
						Swal.fire({
							icon: 'error',
							title: data.msg,
							showConfirmButton: true,
						}).then((result) => {
							if (result.value) {
								$("#placa").val('');
								$('#salvar').hide();
							}
						});
					} else {
						$('#salvar').show();
					}

				});
			});

		});
	</script>


</body>

</html>