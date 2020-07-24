<?php
sleep(2);
require_once "../core/config.php";

if (isset($_POST['cadastrar']) && $_POST['cadastrar'] == 'sim') :
	$novos_campos = array();
	$nome = $_POST['nome'];
	$valor = $_POST['valor'];
	$valor = str_replace(",", ".", $valor);
	$valor = str_replace("R$","",$valor);
	$quantidade = $_POST['quantidade'];
	$custo = $_POST['custo'];
	$custo = str_replace(",", ".", $custo);
	$custo = str_replace("R$","",$custo);
	$respostas = array();


	$inserir_banco = $pdo->prepare("INSERT INTO `produtos` SET nome = ?, valor = ?, quantidade = ?, custo = ?");
	$array_sql = array(

		$nome,
		$valor,
		$quantidade,
		$custo,
	);
	($inserir_banco->execute($array_sql));


endif;
?>