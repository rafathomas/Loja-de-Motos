<style>
    * {
        padding: 0;
        margin: 0;
    }

    table, tr, td,th {
        border-collapse: collapse;
        border-style: solid;
        position: relative;
        padding: 1px;
        
    }

    tr:hover {
        background-color: #fff;
    }
</style>


<?php
//recebemos nosso parâmetro vindo do form
$parametro = isset($_POST['pesquisaPeca']) ? $_POST['pesquisaPeca'] : null;
$msg = "";
//começamos a concatenar nossa tabela
$msg .= " <table width=100% borders=1>";
$msg .= "	<thead>";
$msg .= "		<tr>";
$msg .= "			<th>NOME</th>";
$msg .= "			<th>VALOR</th>";
$msg .= "			<th>QUANTIDADE NO ESTOQUE</th>";
$msg .= "		</tr>";
$msg .= "	</thead>";
$msg .= "	<tbody>";



//requerimos a classe de conexão
require_once('../class/Conexao.class.php');
try {
    $pdo = new Conexao();
    $resultado = $pdo->select("SELECT * FROM pecas WHERE nome LIKE '$parametro%' ORDER BY nome ASC");
    $pdo->desconectar();
} catch (PDOException $e) {
    echo $e->getMessage();
}
//resgata os dados na tabela
if (count($resultado)) {
    foreach ($resultado as $res) {

        $msg .= "				<tr>";
        $msg .= "					<td>" . $res['nome'] . "</td>";
        $msg .= "					<td>" . $res['valor'] . " </td>";
        $msg .= "					<td>" . $res['quantidade'] . "</td>";
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

