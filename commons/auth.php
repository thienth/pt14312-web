<?php
session_start();
require_once '../commons/utils.php';


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