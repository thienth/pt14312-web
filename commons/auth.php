<?php
session_start();
// Role = 1 => member
// Role = 100 => admin
define('MEMBER_ROLE', 1);
define('ADMIN_ROLE', 100);
define('AUTH', 'AUTH');
define('BASE_PATH', 'http://localhost/pt14312-web');


function checkAuth($role = MEMBER_ROLE){
	if(!isset($_SESSION[AUTH]) || $_SESSION[AUTH] == null){
		header('location: ' . BASE_PATH . '/admin/login.php');
		die;
	}

	$user = $_SESSION[AUTH];
	// var_dump($user);die;
	if($user['role'] < $role){
		header('location: ' . BASE_PATH . '/403.php');
		die;
	}
}


 ?>