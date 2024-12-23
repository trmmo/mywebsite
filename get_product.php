<?php
    include 'config.php';

    if (isset($_POST['product_id'])) {
        $product_id = intval($_POST['product_id']);
        
        $sql = "SELECT name, description, price, type, img FROM foods WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            $product = $result->fetch_assoc();
            echo json_encode($product);
        } else {
            echo json_encode(["error" => "Product not found"]);
        }
    
        $stmt->close();
    }
?>