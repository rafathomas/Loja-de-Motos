<?php 

function getProducts($pdo){
	
	$sql = "SELECT * FROM produtos ";
	$pdo = $pdo->prepare($sql);
	$pdo->execute();
	return $pdo->fetchAll(PDO::FETCH_ASSOC);
}

function getProductsByIds($pdo, $ids) {
	
	$sql = "SELECT * FROM produtos WHERE id IN (".$ids.")";
	$pdo = $pdo->prepare($sql);
	$pdo->execute();
	return $pdo->fetchAll(PDO::FETCH_ASSOC);
}

?>