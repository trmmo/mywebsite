<?php
$conn="";

	$dbHost = 'localhost';   
	$dbUsername = 'root';       
	$dbPassword = '123';             
	$dbName = 'food_menu';          

	$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword);

	if (!$conn) {
		die("Kết nối thất bại: " . mysqli_connect_error());
	}
	
	if (!mysqli_select_db($conn, $dbName)) {
		die("Không thể chọn cơ sở dữ liệu: " . mysqli_error($conn));
	}
?>	