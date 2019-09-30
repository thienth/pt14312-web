<?php 
session_start();
require_once './commons/db.php';
$id = $_GET['id'];

$sql = "select * from products where id = $id";
$pro = executeQuery($sql, false);

if(isset($_SESSION['CART']) == false || $_SESSION['CART'] == null || count($_SESSION['CART']) == 0){

 	$_SESSION['CART'] = [
 		[
 			'id' => $pro['id'],
 			'name' => $pro['name'],
 			'image' => $pro['image'],
 			'quantity' => 1,
 			'price' => $pro['price'],
 		]
 	];

}else{

	$cart = $_SESSION['CART'];
	$existed = -1;
	for ($i = 0; $i < count($cart); $i++) {
		if($cart[$i]['id'] == $id){
			$existed = $i;
			break;
		}
	}


	if($existed == -1){
		$item = [
 			'id' => $pro['id'],
 			'name' => $pro['name'],
 			'image' => $pro['image'],
 			'quantity' => 1,
 			'price' => $pro['price'],
 		];
 		$cart[] = $item;
	}else{
		$cart[$existed]['quantity'] +=1;
	}

	$_SESSION['CART'] = $cart;
}

header('location: a.php');
 ?>

