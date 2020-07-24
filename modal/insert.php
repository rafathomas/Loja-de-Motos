<?php 
$pdoConnection = require_once "../core/conexao.php";

    
    $up = $_POST['orcamento'];
    $cpf = $_POST['cpf'];
    
    
    $stmt = $pdoConnection->prepare("UPDATE `clientes` SET `orcamento` = '$up' WHERE `clientes`.`cpf` = '$cpf'");
    $stmt->execute();    
        
    
?>