<?php
      include('config.php');    
	  session_start();	  
	  if (!$_SESSION || $_SESSION['role'] != 'admin'){
        header('location:404');
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    
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
    <div class="container-xl">
        <div class="row">
            <div class="col-6 text-center">
                <a href="index">Xem trang chính</a>
            </div>
            <div class="col-6 text-center">
                <a href="logout">Đăng xuất</a>
            </div>
        </div>
    </div>
    <div class="container ">
        <h1 class="text-center my-5 fw-bolder text-uppercase" id="animated-hovering">Trang quản lý sản phẩm</h1>
    </div>

    <div class="container d-grid gap-2 col-6 mx-auto">
        <hr>
        <div class="modal fade" id="add" tabindex="-1" aria-labelledby="add" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Thêm món mới</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="add" method="post" id="product-form">
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên món ăn</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="describe" class="form-label">Mô tả</label>
                                <input type="text" class="form-control" id="describe" name="describe">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Giá</label>
                                <input type="number" class="form-control" id="price" name="price">
                            </div>
                            <div class="mb-3">
                                <label for="quantity" class="form-label">Số lượng</label>
                                <input type="number" class="form-control" id="quantity" name="quantity">
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Loại</label>
                                <input type="text" class="form-control" id="category" name="category">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Đường dẫn hình ảnh</label>
                                <input type="text" class="form-control" id="image" name="image">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" id="save-btn" disabled>Thêm</button>
                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
            // Bao gồm file kết nối cơ sở dữ liệu
            include 'config.php';  // Đảm bảo đường dẫn đúng đến file db_connect.php

            // Lấy danh sách sản phẩm
            $sql = "SELECT * FROM foods";
            $result = $conn->query($sql);
            $jsonFoods = json_encode($result);
        ?>
        <div class="container d-flex justify-content-center">
            <button type="button" class="btn btn-dark mb-4 py-3 w-50" data-bs-toggle="modal" data-bs-target="#add">
                Thêm món mới
            </button>
        </div>
        <h3 class="text-uppercase fw-bold">Danh sách sản phẩm</h3>
        <div class="table-container">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="text-align: center;">ID</th>
                        <th>Tên sản phẩm</th>
                        <th style="text-align: center;">Hình ảnh</th>
                        <th style="text-align: center;">Số lượng</th>
                        <th style="text-align: center;">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td style="text-align: center;"><?= $row['id'] ?></td>
                            <td><?= $row['name'] ?></td>
                            <td style="text-align: center;"><img src="img/dishes/<?= $row['img']?>" alt="<?= $row['img']?>" style="height:4rem; width:4rem; object-fit:cover; border-radius: 0.2rem;"></td>
                            <td style="text-align: center;"><?= $row['quantity'] ?></td>
                            <td style="text-align: center;">

                                <a href="edit?id=<?= $row['id'] ?>" class="btn btn-outline-dark btn-sm px-3">
                                    <span><i class="fa-regular fa-pen-to-square"></i></span>    
                                    Sửa
                                </a>

                                <a href="delete?id=<?= $row['id'] ?>" class="btn btn-outline-danger btn-sm  px-3" onclick="return confirm('Bạn chắc chắn muốn xoá sản phẩm này?')">
                                    <span><i class="fa-regular fa-pen-to-square"></i></span>    
                                    Xóa
                                </a>
                                
                                <button onclick="postVisibility(<?=$row['id']?>)" class="btn btn-sm btn-outline-warning"><i class="fa-regular fa-eye"></i><span id="btn-visibility-<?=$row['id']?>">
                                    <?php if ($row['visible'] == 1){ echo 'Ẩn';} else {echo 'Hiện';}?> </span>
                                </button>
                                <!-- <?php
                                    $buttonText = ($row['visible'] == 1) ? 'Ẩn' : 'Hiện';
                                ?>
                                <button onclick="postVisibility(<?php echo $row['id']; ?>)" 
                                        class="btn btn-sm btn-outline-warning btn-visibility" 
                                        id="btn-visibility-<?php echo $row['id']; ?>">
                                    <?php echo $buttonText; ?>
                                </button> -->
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

            

        <div class="modal fade" id="add" tabindex="-1" aria-labelledby="change" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Sản phẩm mới</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Lưu</button>
                    </div>
                </div>
            </div>
        </div>





    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="assets/js/admin.js"></script>
    <script>
        function postVisibility(uid){
            var button = document.getElementById('btn-visibility-'+uid);

            $.ajax({
                url: 'editvisibility',
                method: 'POST',
                data: {
                    id: uid
                },
                success: function() {
                    console.log(button.textContent);
                    if (button.textContent.trim() == 'Ẩn' ){
                        console.log('Hien');
                        button.textContent = 'Hiện';
                    }
                    else{
                        console.log('An');
                        button.textContent = 'Ẩn';
                    }
                }
            });
        }
    </script>
</body>

</html>