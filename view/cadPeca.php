<?php
include_once("index.php");
?>

<?php
$pdoConnection = require_once "../core/conexao.php";
?>
<link rel="stylesheet" href="../assets/css/estilo.css">
<link rel="stylesheet" href="../assets/css/styless.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="../assets/css/modal.css">
<div class="wrapper">

  <form id="formulario1" method="post" name="formulario1">
    <h1>Cadastrar um novo produto</h1>
    <hr class="sep" />
    <div class="group">
      <input type="text" required="required" name="nome" /><span class="highlight"></span><span class="bar"></span>
      <label>Nome do produto</label>
    </div>
    <div class="group">
      <input type="text" required="required" id="valor" name="valor" /><span class="highlight"></span><span class="bar"></span>
      <label>Valor do produto</label>
    </div>
    <div class="group">
      <input type="number" required="required" name="quantidade" /><span class="highlight"></span><span class="bar"></span>
      <label>Quantidade no estoque</label>
    </div>
    <div class="group">
      <input type="text" required="required" id="custo" name="custo" /><span class="highlight"></span><span class="bar"></span>
      <label>Custo</label>
    </div>
    <div class="btn-box">
      <input class="btn btn-submit" type="submit" value="Salvar">
      <input type="hidden" id="cadastrar" name="cadastrar" value="sim">
    </div>
  </form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="../assets/js/alert.js"></script>
<script src="../assets/js/functionPeca.js"></script>
<script src="../assets/js/jquery.maskMoney.js" type="text/javascript"></script>

<script type="text/javascript">
  $(function() {
    $("#valor").maskMoney({
      symbol: 'R$',
      showSymbol: true,
      thousands: '.',
      decimal: ',',
      symbolStay: true
    });
  })
</script>
<script type="text/javascript">
  $(function() {
    $("#custo").maskMoney({
      symbol: 'R$',
      showSymbol: true,
      thousands: '.',
      decimal: ',',
      symbolStay: true
    });
  })
</script>