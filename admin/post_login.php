<?php 
session_start();
require_once '../commons/db.php';
define('BASE_PATH', 'http://localhost/pt14312-web');
$email = getRequestValue('email', 2);
$password = getRequestValue('password', 2);

$sql = "select * from users where email = '$email'";
$user = executeQuery($sql, false);


// $newPass = password_hash('someone', PASSWORD_DEFAULT);
// echo $newPass;
// mk dc ma hoa = password_hash
// muon so sanh mat khau nhap vao va mk db => password_verify
if(password_verify($password, $user['password'])){
	$_SESSION['AUTH'] = [
		'id' => $user['id'],
		'name' => $user['name'],
		'email' => $user['email'],
		'role' => $user['role'],
		'avatar' => $user['avatar'],
	];
	header('location: ' . BASE_PATH . '/admin');
	die;
}

header('location: ' . BASE_PATH . '/admin/login.php?msg=Sai tài khoản/mật khẩu');




 ?>