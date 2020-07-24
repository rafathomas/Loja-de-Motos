<?php
include_once("index.php");
require_once "../functions/product.php";
?>
<title>Busca e venda de peças</title>
<link rel="stylesheet" href="../assets/css/estilo.css">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="../assets/css/styless.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- BUSCAR PEÇAS E ADICIONAR PEÇAS -->
<form name="form_pesquisa1">
  <div class="container" style="position: relative;">
    <div class="row"></div>
    <div class="col-10">
      <center><label id="nome" for="busca">BUSCAR PEÇAS</label></center>
      <br>
      <br>
      <input type="text" name="buscar" id="busca" placeholder="Buscar por...">
      <div id="resultado_busca"></div>
    </div>
  </div>
</form>
<?php
include_once("../modal/carrinho.php");
?>