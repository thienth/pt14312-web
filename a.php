<?php 
session_start();
require_once './commons/db.php';
$sql = "select * from products limit 4";
$products = executeQuery($sql);

 ?>

 Số sp trong giỏ hàng: <?php echo count($_SESSION['CART']) ?>

 <?php foreach ($products as $pro): ?>
 	<li>
 		<a href="cart.php?id=<?php echo $pro['id'] ?>" title="">
 			<?php echo $pro['name'] . ' - ' . $pro['price'] ?>
 		</a>
 	</li>
 <?php endforeach ?>


 <?php 

var_dump($_SESSION['CART']);
  ?>