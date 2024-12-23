<?php
include('config.php');    
session_start();	  
if (!$_SESSION || $_SESSION['role'] != 'admin'){
  header('location:404');
}
include 'config.php';

// Lấy ID sản phẩm từ yêu cầu GET
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    $sql = "DELETE FROM foods WHERE id = ?;";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $productId);

    if ($stmt->execute()) {
        header("location: admin");
        exit();
    } else {
        // Nếu có lỗi xảy ra
        echo 'Có lỗi khi xóa sản phẩm';
    }

    $stmt->close();
    $conn->close();
}
?>
