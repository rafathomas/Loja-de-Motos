
<?php

require_once "../core/config.php";

if (isset($_POST['cadastrar']) && $_POST['cadastrar'] == 'sim') :
	$novos_campos = array();
	$campos_post = $_POST['campos'];
	$respostas = array();
	foreach ($campos_post as $indice => $valor) {
		$novos_campos[$valor['name']] = $valor['value'];
	}


	if (!(strlen($novos_campos['telefone']) >= 14) && (strlen($novos_campos['telefone']) <= 14)) {
		$respostas['erro'] = 'sim';
		$respostas['getErro'] = 'O telefone informado não é valido!';
	} elseif (!(strlen($novos_campos['celular']) >= 13) && (strlen($novos_campos['celular']) <= 15)) {
		$respostas['erro'] = 'sim';
		$respostas['getErro'] = 'O celular informado não é valido!';
	} else {
		$inserir_banco = $pdo->prepare("INSERT INTO `clientes` SET nome = ?, sobrenome = ?, cpf = ?, cep = ?, rua = ?,  bairro = ?, cidade = ?, telefone = ?, celular= ?, marca = ?,  modelo = ?, placa = ?, km = ?");
		$array_sql = array(
			$novos_campos['nome'],
			$novos_campos['sobrenome'],
			$novos_campos['cpf'],
			$novos_campos['cep'],
			$novos_campos['rua'],
			$novos_campos['bairro'],
			$novos_campos['cidade'],
			$novos_campos['telefone'],
			$novos_campos['celular'],
			$novos_campos['marca'],
			$novos_campos['modelo'],
			$novos_campos['placa'],
			$novos_campos['km'],
		);
		if ($inserir_banco->execute($array_sql)) {
			$respostas['erro'] = 'nao';
			$respostas['msg'] = 'Cliente inserido com sucesso!';
		} else {
			$respostas['erro'] = 'sim';
			$respostas['getErro'] = 'Nao foi possível inserir o cliente no banco de dados';
		}
	}

	echo json_encode($respostas);
endif;
