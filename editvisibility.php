<?php
include('config.php');    
session_start();	  
if (!$_SESSION || $_SESSION['role'] != 'admin'){
  header('location:404');
}
// Kết nối cơ sở dữ liệu
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uid = $_POST['id'];

    if (isset($uid)) {
        $sql = "UPDATE foods SET visible = (visible + 1)%2 WHERE id = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Gán giá trị và thực thi truy vấn
            $stmt->bind_param('i',$uid);
            if ($stmt->execute()) {
                echo "Visibility updated successfully!";
            } else {
                echo "Failed to update visibility.";
            }
            $stmt->close();
        } else {
            echo "Error preparing statement.";
        }
    } else {
        echo "Invalid input data.";
    }
} else {
    echo "Invalid request method.";
}
$conn->close();
?>
