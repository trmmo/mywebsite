<?php
include('config.php');    
session_start();	  
if (!$_SESSION || $_SESSION['role'] != 'admin'){
  header('location:404');
}
include 'config.php';
// Nhận dữ liệu từ form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $describe = $_POST['describe'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $category = $_POST['category'];
    $image = $_POST['image'];

    // Chuẩn bị và thực thi câu lệnh SQL
    $sql = "INSERT INTO `foods` (`name`, `description`, `price`,`quantity`, `type` ,`img`) VALUES (?, ?, ?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdiss", $name, $describe, $price,$quantity, $category,$image);

    // Kiểm tra kết quả
    if ($stmt->execute()) {
        echo "Thêm sản phẩm thành công!";
        header("Location: admin"); // Điều hướng về trang chính sau khi thêm thành công
        exit();
    } else {
        echo "Có lỗi xảy ra: " . $conn->error;
    }

    $stmt->close();
}
$conn->close();
?>
