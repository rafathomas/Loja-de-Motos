<?php
session_start();
require_once "../functions/product.php";
require_once "../functions/cart.php";

$pdoConnection = require_once "../core/conexao.php";

if (isset($_GET['acao']) && in_array($_GET['acao'], array('add', 'del', 'up'))) {

	if ($_GET['acao'] == 'add' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])) {
		addCart($_GET['id'], 1);
	}

	if ($_GET['acao'] == 'del' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])) {
		deleteCart($_GET['id']);
	}

	if ($_GET['acao'] == 'up') {
		if (isset($_POST['prod']) && is_array($_POST['prod'])) {
			foreach ($_POST['prod'] as $id => $qtd) {
				updateCart($id, $qtd);
			}
		}
	}

	header('location: view/peca.php');
}

$resultsCarts = getContentCart($pdoConnection);
$totalCarts  = getTotalCart($pdoConnection);

?>

<?php if ($resultsCarts) : ?>


	<form action="carrinho.php?acao=up" method="post" id="carrinho">

		<table class="table table-strip">
			<thead>
				<tr>
					<th>Produto</th>
					<th>Quantidade</th>
					<th>Preço</th>
					<th>Subtotal</th>
					<th>Ação</th>

				</tr>
			</thead>
			<tbody id="content_retorno">
				<?php foreach ($resultsCarts as $result) : ?>
					<tr>

						<td><?php echo $result['nome'] ?></td>
						<td>
							<input type="text" name="prod[<?php echo $result['id'] ?>]" value="<?php echo $result['quantity'] ?>" size="1" />

						</td>
						<td>R$<?php echo number_format($result['valor'], 2, ',', '.') ?></td>
						<td>R$<?php echo number_format($result['subtotal'], 2, ',', '.') ?></td>
						<td><a href="carrinho.php?acao=del&id=<?php echo $result['id'] ?>" class="btn btn-danger">Remover</a></td>

					</tr>
				<?php endforeach; ?>
				<tr>
					<td colspan="3" class="text-right"><b>Total: </b></td>
					<td>R$<?php echo number_format($totalCarts, 2, ',', '.') ?></td>
					<td></td>
				</tr>
			</tbody>

		</table>

		<button class="btn btn-primary" type="submit">Atualizar Carrinho</button>

	</form>

<?php endif ?>

</div>