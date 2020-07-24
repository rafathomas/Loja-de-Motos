<?php
session_start();
if (isset($_POST['busca']) && $_POST['busca'] == 'sim') {
	$pdoConnection = require_once "../core/conexao.php";
	$textoBusca = strip_tags($_POST['texto']);
	$buscar = $pdoConnection->prepare("SELECT * FROM `produtos` WHERE `nome` LIKE '%$textoBusca%'");
	$buscar->execute();
	$retorno = array();
	$retorno['dados'] = '';
	$retorno['qtd'] = $buscar->rowCount();
	if ($retorno['qtd'] >= 0) {
		while ($conteudo = $buscar->fetchObject()) {
			$retorno['dados'] .= '<a href="#" id="' . $conteudo->id . ':' . $conteudo->valor . '">' . utf8_encode($conteudo->nome) . '</a>';
		}
	}

	echo json_encode($retorno);
}

if (isset($_POST['add_produto'])) {
	$pdoConnection = require_once "../core/conexao.php";
	$retorno = array();
	$retorno['dados'] = '';

	$produtoId = (int) $_POST['produto'];
	if (isset($_SESSION['carrinho'][$produtoId])) {
		$_SESSION['carrinho'][$produtoId] += 1;
	} else {
		$_SESSION['carrinho'][$produtoId] = 1;
	}
	$total = 0;
	foreach ($_SESSION['carrinho'] as $idProd => $qtd) {
		$pegaProduto = $pdoConnection->prepare("SELECT * FROM `produtos` WHERE `id` = ?");
		$pegaProduto->execute(array($idProd));
		$dadosProduto = $pegaProduto->fetch();
		$subTotal = ($dadosProduto['valor'] * $qtd);
		$total += $subTotal;

		$retorno['dados'] .= '<tr><td>' . utf8_encode($dadosProduto['nome']) . '</td><td>Valor</td><td><input type="text" id="qtd" value="' . $qtd . '" size="3" /></td>';
		$retorno['dados'] .= '<td>R$ ' . number_format($subTotal, 2, ',', '.') . '</td></tr>';
	}
	$retorno['dados'] .= '<tr><td colspan="3">Total</td><td id="total">R$ ' . number_format($total, 2, ',', '.') . '</td></tr>';
	echo json_encode($retorno);
}
