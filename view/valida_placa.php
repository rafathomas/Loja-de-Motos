<?php
include_once('../core/config.php');

$sql = "SELECT c.placa FROM clientes c WHERE c.placa = '".$_GET['placa']."'";
$consulta = $pdo->query($sql);
$qtd = $consulta->fetchAll();

$retorno = array();
if (count($qtd) > 0){
	$retorno = array(
		'error' => true,
		'msg' => 'Placa já cadastrada!',
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