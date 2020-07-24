<?php

$pdoConnection = require_once "../core/conexao.php";

$cpf = filter_input(INPUT_GET, 'cpf', FILTER_SANITIZE_STRING);
if (!empty($cpf)) {

    $limit = 1;
    $result_aluno = "SELECT * FROM clientes WHERE cpf =:cpf LIMIT :limit";

    $resultado_aluno = $pdoConnection->prepare($result_aluno);
    $resultado_aluno->bindParam(':cpf', $cpf, PDO::PARAM_STR);
    $resultado_aluno->bindParam(':limit', $limit, PDO::PARAM_INT);
    $resultado_aluno->execute();

    $array_valores = array();

    if ($resultado_aluno->rowCount() != 0) {
        $row_aluno = $resultado_aluno->fetch(PDO::FETCH_ASSOC);
        $array_valores['nome'] = $row_aluno['nome'] . " " . $row_aluno['sobrenome'];
        $array_valores['marca'] = $row_aluno['marca'] . " " . $row_aluno['modelo'];
        $array_valores['orcamento'] = $row_aluno['orcamento'];
    } else {
        $array_valores['nome'] = 'Cliente não encontrado';
        $array_valores['marca'] = 'Veículo não encontrado';
    }
    echo json_encode($array_valores);
}
