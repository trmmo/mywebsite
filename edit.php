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

    // Lấy dữ liệu sản phẩm từ cơ sở dữ liệu
    $sql = "SELECT * FROM `foods` WHERE `id` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();
    $stmt->close();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy dữ liệu từ form và cập nhật sản phẩm
    $name = $_POST['name'];
    $describe = $_POST['describe'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $type = $_POST['type'];
    $image = $_POST['image'];

    $sql = "UPDATE `foods` SET `name` = ?, `description` = ?, `price` = ?,`quantity` = ?, `type` = ? , `img`= ? WHERE `id` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdissi", $name, $describe, $price,$quantity, $type, $image, $productId);

    if ($stmt->execute()) {
        header("Location: admin");
        exit();
    } else {
        echo 'Cập nhật sản phẩm không thành công!';
    }
    $conn->close();
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>TMT FOOD ADMIN</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" type="image/x-icon" href="/img/logo-01.png">
    <link rel='stylesheet' href='assets/css/bootstrap.css'>
    <link rel='stylesheet' href='assets/css/style.css'>
    <script src='assets/js/bootstrap.bundle.min.js'></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
      .col {
        border-color: black;
      }

      a {
        text-decoration: none;
      }
    </style>
    <link rel="stylesheet" href="assets/swiper/swiper-bundle.min.css" media="all">
    <script src="assets/swiper/swiper-bundle.min.js"></script>
  </head>

<body>
<header>
      <nav class="navbar navbar-expand-lg navbar-drk navbar-dark">
        <div class="container-xxl justify-content-center ">
          <a href="admin">
            <img src="img/logo-01.png" alt="" height="50px"
              class="rounded-circle ms-4 me-4 nav-logo" id="mainLogo">
            <span class="fw-bold text-light mt-3 ms-2 mt-3 display-6 text-logo" id="mainLogo">
              TMT FOOD ADMIN
            </span>
          </a>
        </div>
        <div class="collapse" id="search-form">

        </div>
      </nav>
    </header>
    <div class="container ">
        <h1 class="text-center my-5 fw-bolder text-uppercase" id="animated-hovering">Trang quản lý sản phẩm</h1>
    </div>
    <div class="container">
      <hr>
    <div class="text-center mt-5">
    <h3 class="text-uppercase fw-bold">Sửa sản phẩm</h3>
    </div>

        <form action="edit?id=<?= $productId ?>" method="post">
            <div class="mb-3">
                <label for="name" class="form-label  fw-bold">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= isset($product['name']) ? $product['name'] : '' ?>">
            </div>
            <div class="mb-3">
                <label for="describe" class="form-label fw-bold">Mô tả</label>
                <input type="text" class="form-control" id="describe" name="describe" value="<?= isset($product['description']) ? $product['description'] : '' ?>">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label fw-bold">Giá</label>
                <input type="number" class="form-control" id="price" name="price" value="<?= isset($product['price']) ? $product['price'] : '' ?>">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label fw-bold">Số lượng</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="<?= isset($product['quantity']) ? $product['quantity'] : '' ?>">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label fw-bold">Loại</label>
                <input type="text" class="form-control" id="type" name="type" value="<?= isset($product['type']) ? $product['type'] : '' ?>">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label fw-bold">Đường dẫn hình ảnh</label>
                <input type="text" class="form-control" id="image   " name="image" value="<?= isset($product['img']) ? $product['img'] : '' ?>">
            </div>
            <div class="container-fluid text-center">
              <button type="submit" class="btn btn-primary justify-content-center">Lưu</button>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>


