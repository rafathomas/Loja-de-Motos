<?php
include_once('../core/config.php');

$sql = "SELECT c.cpf FROM clientes c WHERE c.cpf = '".$_GET['cpf']."'";
$consulta = $pdo->query($sql);
$qtd = $consulta->fetchAll();

$retorno = array();
if (count($qtd) > 0){
	$retorno = array(
		'error' => true,
		'msg' => 'Usuário já cadastrado!',
		'type' => 'error'
	);
}else{
	$retorno = array(
		'error' => false,
		'msg' => '',
		'type' => ''
	);
}

echo json_encode($retorno)

?>