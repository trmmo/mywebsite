<?php
session_start();

include 'config.php';

$search = isset($_GET['search']) ? $_GET['search'] : '';
$records_per_page = 12; 
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($current_page - 1) * $records_per_page;

$sort = isset($_GET['sort']) ? $_GET['sort'] : 'id'; // Mặc định sắp xếp theo ID
$order_by = "id"; // Mặc định

if ($sort === "price_asc") {
    $order_by = "price ASC";
} elseif ($sort === "price_desc") {
    $order_by = "price DESC";
}


// $order_by = isset($_GET['order_by']) ? $_GET['order_by'] : 'id';
// $order_dir = isset($_GET['order_dir']) && $_GET['order_dir'] == 'desc' ? 'desc' : 'asc';

$sql = "SELECT * FROM foods where visible=1";
// var_dump($sql);
if ($search) {
    $sql .= " and name LIKE '%" . $conn->real_escape_string($search) . "%' ";
}
// var_dump($search);
$sql .= " ORDER BY $order_by LIMIT $offset, $records_per_page";
// var_dump($sql);
$result = $conn->query($sql);

$total_records_sql = "SELECT COUNT(*) AS total FROM foods where visible = 1";
if ($search) {
    $total_records_sql .= " and name LIKE '%" . $conn->real_escape_string($search) . "%'";
}
// var_dump($sql);
// var_dump($total_records_sql);
$total_records_result = $conn->query($total_records_sql);
$total_records = $total_records_result->fetch_assoc()['total'];
// var_dump($total_records);
$total_pages = ceil($total_records / $records_per_page);
// Lấy danh sách sản phẩm
// $sql = "SELECT * FROM products ORDER BY $order_by";
// $result = $conn->query($sql);

function getSortUrl($column, $current_order, $current_dir) {
    $next_dir = ($column == $current_order && $current_dir == 'asc') ? 'desc' : 'asc';
    return "menu?order_by=$column&order_dir=$next_dir&search=" . htmlspecialchars($_GET['search'] ?? '') . "&page=" . htmlspecialchars($_GET['page'] ?? 1);
}
?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>TMT TEST</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='assets/css/bootstrap.css'>
    <link rel='stylesheet' href='assets/css/style.css'>
    <script src='assets/js/bootstrap.bundle.min.js'></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet">
      <link rel="icon" type="image/x-icon" href="/img/logo-01.png">
    <style>
      a {
        text-decoration: none;
      }
    </style>
  </head>

  <body style="m-0 p-0">
    <marquee class="fw-bold text-danger mt-2" direction="left">TMT FOOD GIẢM GIÁ 15-30% TẤT CẢ SẢN PHẨM TỪ NGÀY 29/10 ĐẾN HẾT
      NGÀY 01/12!!</marquee>
    <?php
      include 'includes/navbar.php'
    ?>
    <!-- <div class="container-fluid py-5"></div> -->
    <section id="menu-title mb-0" class="pt-5"
      style="background-image: url(img/finedining2.jpg);background-repeat: no-repeat; background-position: center 25%; background-size: cover;">
      <div class="container py-3"></div>
      <h2 class="fw-bold text-center py-5 display-5 border-bottom text-uppercase text-light">MENU</h2>
    </section>
    <div class="container">
      <form action="menu" method="GET">
        <div class="container input-group mb-3 mt-2 w-50 d-flex flex-nowrap">
            <input type="text" id="search" name="search" class="form-control"
                placeholder="Tìm món..." value="<?php echo htmlspecialchars($search);?>">
            <button class="btn text-light" type="submit" style="background-color: #9a3324">
                <i class="fa fa-search p-2"></i>
            </button>
        </div>
        <!-- <div class="container">
          <div class="w-25 d-flex justify-content-end">
            <label for="sort-options" class="form-label text-nowrap pe-3">Sắp xếp theo:</label>
            <select name="sort" class="form-select"  onchange="this.form.submit()">
                <option value="id" <?php echo $sort === 'id' ? 'selected' : ''; ?>>Theo ID</option>
                <option value="price_asc" <?php echo $sort === 'price_asc' ? 'selected' : ''; ?>>Giá tăng dần</option>
                <option value="price_desc" <?php echo $sort === 'price_desc' ? 'selected' : ''; ?>>Giá giảm dần</option>
            </select>
          </div>
        </div> -->
        <div class="d-flex justify-content-end bd-highlight mb-3">
          <label for="sort-options" class="form-label text-nowrap pt-2 pe-3 fs-5">Sắp xếp theo:</label>
          <select name="sort" class="form-select"  onchange="this.form.submit()" style="width: 15%;">
            <option value="id" <?php echo $sort === 'id' ? 'selected' : ''; ?>>Theo ID</option>
            <option value="price_asc" <?php echo $sort === 'price_asc' ? 'selected' : ''; ?>>Giá tăng dần</option>
            <option value="price_desc" <?php echo $sort === 'price_desc' ? 'selected' : ''; ?>>Giá giảm dần</option>
          </select>
        </div>
      </form>
      <hr>
    </div>
    <div class="container">
      <form action="menu" method="GET">
      </form>
    </div>
    <div class="container">
      <div class="row">
        <?php
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo '<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-3">';
                  echo '<div class="card shadow h-100" style="width: 18rem;">';
                  echo '<div class="card-body">';
                  echo '<img src="img/dishes/' . htmlspecialchars($row["img"]) . '" class="img-fluid" alt="' . htmlspecialchars($row["img"]) . '" style="width: 18rem; height: 15rem; object-fit:cover; border-radius: 0.3rem;">';
                  echo '<div class="container-fluid">';
                  echo '<h5 class="card-title mt-3 fw-bold text-uppercase fs-5">' . htmlspecialchars($row["name"]) . '</h5>';
                  echo '</div>';
                  echo '<div class="container-fluid mt-auto">';
                  echo '<p class="card-text"> Giá bán: <b>' . number_format($row["price"]) . 'đ</b></p>';
                  echo '</div>';
                  echo '<div class="container mt-auto mx-0">';
                  echo '<button class="btn btn-dark w-100" type="button" data-bs-toggle="modal" data-bs-target="#detail" id="detail-btn">Xem chi tiết</a>';
                  // echo '<button class="btn btn-dark w-100 detail-btn" 
                  //       type="button" 
                  //       data-bs-toggle="modal" 
                  //       data-bs-target="#detail" 
                  //       data-id="' . $row["id"] . '">
                  //       Xem chi tiết
                  //       </button>';
                  echo '</div>';
                  echo '</div></div></div>';
                  
              }
          } else {
              echo '<div class="container justify-content-center text-center">
              <img src="img/notfound.jpg" style="width:20rem;"/>
              <p>Không tìm thấy sản phẩm!</p>
              </div>';
          }

          $conn->close();
        ?>
      </div>
      <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="detail" aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                      <h1 class="modal-title fs-5">Thông tin sản phẩm</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <div class="container-fluid d-flex">
                        <div class="container w-50">
                          <img src="img/labuda.jpg" alt="" style="width:100%; border-radius: 0.2rem;">
                        </div>
                        <div class="container w-50">
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên:</label>
                                <p id="modal-name text-uppercase"></p>
                            </div>
                            <div class="mb-3">
                                <label for="describe" class="form-label">Mô tả:</label>
                                <p id="describe"></p>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Giá:</label>
                                <p id="price"></p>
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Loại:</label>
                                <p id="type"></p>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Link sản phẩm:</label>
                                <p id="img"></p>
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <hr>
    </div>
    <nav aria-label="Page navigation">
      <ul class="pagination justify-content-center mt-4" style="color: #9a3324;">
          <?php if ($current_page > 1): ?>
          <li class="page-item">
              <a class="page-link"
                  href="menu?page=<?php echo $current_page - 1; ?><?php if ($search!="") echo '&search='.htmlspecialchars($search); ?><?php if ($sort!="id") echo '&sort='.htmlspecialchars($sort);?>">Trước</a>
          </li>
          <?php endif; ?>

          <?php for ($i = 1; $i <= $total_pages; $i++): ?>
          <li class="page-item <?php echo $i == $current_page ? 'active' : ''; ?>">
              <a class="page-link"
                  href="menu?page=<?php echo $i; ?><?php if ($search!="") echo '&search='.htmlspecialchars($search); ?><?php if ($sort!="id") echo '&sort='.htmlspecialchars($sort);?>"><?php echo $i; ?></a>
          </li>
          <?php endfor; ?>

          <?php if ($current_page < $total_pages): ?>
          <li class="page-item">
              <a class="page-link"
                  href="menu?page=<?php echo $current_page + 1; ?><?php if ($search!="") echo '&search='.htmlspecialchars($search); ?><?php if ($sort!="id") echo '&sort='.htmlspecialchars($sort);?>">Sau</a>
          </li>
          <?php endif; ?>
      </ul>
    </nav>
  <?php
    include 'includes/footer.php';
  ?>    
    
    <script src="assets/js/script.js"></script>
    
  </body>

</html>