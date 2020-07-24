<link rel="stylesheet" href="../bootstrap1/css/bootstrap.css">

<?php
//recebemos nosso parâmetro vindo do form
$parametro = isset($_POST['pesquisaCliente']) ? $_POST['pesquisaCliente'] : null;
$msg = "";
//começamos a concatenar nossa tabela
$msg .= " <table class='table table-striped' border='1'>";
$msg .= "	<thead>";
$msg .= "		<tr>";
$msg .= "			<th scope='col'>NOME DO CLIENTE</th>";
$msg .= "			<th scope='col'>MODELO DO VEÍCULO</th>";
$msg .= "		</tr>";
$msg .= "	</thead>";
$msg .= "	<tbody>";



//requerimos a classe de conexão
require_once('../class/Conexao.class.php');
try {
    $pdo = new Conexao();
    $resultado = $pdo->select("SELECT * FROM clientes WHERE nome LIKE '$parametro%' ORDER BY nome ASC");
    $pdo->desconectar();
} catch (PDOException $e) {
    echo $e->getMessage();
}
//resgata os dados na tabela
if (count($resultado)) {
    foreach ($resultado as $res) {

        $msg .= "				<tr>";
        $msg .= "					<td>" . $res['nome'] . " " . $res['sobrenome'];"</td>";
        $msg .= "					<td>" . $res['modelo'] . "</td>";
        $msg .= "				</tr>";
    }
} else {
    $msg = "";
    $msg .= "Nenhum resultado foi encontrado...";
}
$msg .= "	</tbody>";
$msg .= "</table>";
//retorna a msg concatenada
echo $msg;
?>

