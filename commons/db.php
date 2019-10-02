<?php 
define('HOST_NAME', '127.0.0.1');
define('DB_NAME', 'kaopiz');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '123456');

// Giúp tạo ra kết nối từ project php => cơ sở dữ liệu
function getConnect(){
	try{
		$conn = new PDO("mysql:host=" . HOST_NAME . ";dbname=" . DB_NAME . ";charset=utf8", DB_USERNAME, DB_PASSWORD);	
		return $conn;
	}catch(Exception $ex){
		var_dump($ex->getMessage());
		die;
	} 
	
}

// Giúp thực thi 1 câu lệnh bất kỳ với csdl
// ví dụ: $truyvan = "select * from users";
// $userList = executeQuery($truyvan, true);
// =>$userList là 1 mảng chứa tất cả dữ liệu của bảng users
// tham số $sql: câu truy vấn
// tham số $getAll (mặc định = true): quyết định lấy ra tất cả các bản ghi trong bảng hoặc lấy bản ghi đầu tiên
// $getAll: true|false
function executeQuery($sql, $getAll = true){
	$conn = getConnect();

	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->fetchAll();
	if($getAll == true){
		return $result;
	}

	if($result != null){
		return $result[0];
	}
}

// $method = 1 => get | 2 => post
// $name => name input
function getRequestValue($name, $method = 1){
	$value = '';
	if($method == 1){
		$value = isset($_GET[$name]) == true ? $_GET[$name] : "";
	}else{
		$value = isset($_POST[$name]) == true ? $_POST[$name] : "";
	}
	return $value;
}



 ?>