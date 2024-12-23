<?php
  session_start();
  // if (!$_SESSION){
  //   header('location:login');
  // }
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>TMT FOOD</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" type="image/x-icon" href="/img/logo-01.png">
    <link rel='stylesheet' href='assets/css/bootstrap.css'>
    <link rel='stylesheet' href='assets/css/style.css'>
    <script src='assets/js/bootstrap.bundle.min.js'></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> -->
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
    <marquee class="fw-bold text-danger mt-2" direction="left">TMT FOOD GIẢM GIÁ 15-30% TẤT CẢ SẢN PHẨM TỪ NGÀY 29/10 ĐẾN HẾT
      NGÀY 01/12!!</marquee>
    <?php
    include 'includes/navbar.php';
    ?>

    <div class="container-fluid text-light justify-content-center home-bg">
      <div class="overlay">
        <p class="display-4 text-center fst-italic">Welcome to TMT FOOD</p>
        <p class="display-1 text-center text-uppercase fw-bolder" id="animated-hovering">Chào mừng bạn đến với <br>TMT
          food</p>
      </div>
    </div>
    <section id="recommendation">
      <h2 class="fw-bold text-center py-5 display-5 border-bottom text-uppercase">Hôm nay ăn gì?</h2>
      <div class="container-lg">
        <div class="row justify-content-center">
          <?php
            include 'config.php';
            $arr = array();
            // var_dump($arr);
            $numbers = range(1, 11); // Tạo mảng từ 1 đến 10
            shuffle($numbers); // Trộn ngẫu nhiên các phần tử trong mảng
            $arr = array_slice($numbers, 0, 4); // Lấy 4 phần tử đầu tiên
            // var_dump($arr);
            foreach ($arr as $i) {
              // echo $i;
              $sql = "SELECT `name`, `description`, `price`, `type`, `img`, `visible` FROM `foods` WHERE id=$i and visible=1"; // Đảm bảo tên cột khớp với bảng
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-12 col-md-6 col-xl-3 my-3">';
                    echo '<div class="card shadow h-100" style="width: 18rem;">';
                    echo '<div class="card-body">';
                    echo '<img src="img/dishes/' . htmlspecialchars($row["img"]) . '" class="img-fluid" alt="' . htmlspecialchars($row["img"]) . '" style="width: 18rem; height: 15rem; object-fit:cover; border-radius: 0.3rem;">';
                    echo '<div class="container-fluid">';
                    echo '<h5 class="card-title mt-3 fw-bold text-uppercase fs-5">' . htmlspecialchars($row["name"]) . '</h5>';
                    echo '</div>';
                    // echo '<div class="container-fluid">';
                    // echo '<p class="card-text">' . htmlspecialchars($row["description"]) . '</p>';
                    // echo '</div>';
                    echo '<div class="container-fluid mt-auto">';
                    echo '<p class="card-text"> Giá bán: <b>' . number_format($row["price"]) . 'đ</b></p>';
                    echo '</div>';
                    echo '<div class="container mt-auto mx-0">';
                    echo '<button class="btn btn-dark w-100" id="detail-btn">Xem chi tiết</a>';
                    echo '</div>';
                    echo '</div></div></div>';
                    
                }
              } else {
                  echo '<p>No items found.</p>';
              }
              // $conn->close();
            }
            $conn->close();
          ?>
        </div>
      </div>
    </section>
    <section id="findUs">
      <div class="container-fluid py-5 border border-dark border-top border-bottom bg-find-us"
        style="position: relative; background-image: url(img/finedining1.jpg);">
        <!-- <div class="box" style="position: absolute; top:0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5);">dsaasdasdad</div> -->
        <div class="row justify-content-center py-5"></div>
        <div class="row align-items-center justify-content-center py-3 text-center">
          <div class="col-9 col-lg-4 col-xl-3 p-4 rounded bg-dark text-light align-items-center justify-content-center">
            <h3 class="text-center fw-bold pb-2 display-6">TÌM NHÀ HÀNG <br> GẦN BẠN</h3>
            <select class="form-select mb-2" aria-label="Default select example">
              <option selected>Tỉnh/Thành phố</option>
              <option value="1">Hà Nội</option>
              <option value="2">TP.HCM</option>
              <option value="3">Đà Nẵng</option>
            </select>
            <select class="form-select mb-2" aria-label="Default select example">
              <option selected>Quận/Huyện</option>
              <option value="1">Quận Hà Đông</option>
              <option value="2">Huyện Sóc Sơn</option>
              <option value="3">Quận Hoàn Kiếm</option>
            </select>
            <button class="btn btn-light mt-3">Tìm kiếm</button>
          </div>
        </div>
        <div class="row justify-content-center py-5"></div>
      </div>
    </section>
    <section id="latest-blog" class="pb-4 mt-4">
      <div class="container-lg">
        <div class="row">
          <div class="section-header d-flex align-items-center justify-content-between my-4">
            <h2 class="section-title fw-bold">Tin tức gần đây</h2>
            <a href="#" class="btn btn-outline-dark">Xem thêm</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <article class="post-item card border-0 shadow-sm p-3 my-3">
              <div class="image-holder zoom-effect">
                <a href="#" height="10rem">
                  <img src="img/finedining.jpg" alt="post" class="card-img-top img-fluid"
                    style="height: 15rem; width: 100%; object-fit: cover;">
                </a>
              </div>
              <div class="card-body">
                <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                  <div class="meta-date"><svg width="16" height="16">
                      <use xlink:href="#calendar"></use>
                    </svg>18/10/2024</div>
                </div>
                <div class="post-header">
                  <h3 class="post-title">
                    <a href="#" class="text-decoration-none text-dark h4">KHAI TRƯƠNG CỬA HÀNG THỨ 3</a>
                  </h3>
                  <p>Vào ngày 17/10/2024, tại tuyến đường Trần Phú sầm uất của phường Mỗ Lao...</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-4">
            <article class="post-item card border-0 shadow-sm p-3 my-3">
              <div class="image-holder zoom-effect">
                <a href="#" height="10rem">
                  <img src="img/Koreaan-Home-Cafe-Drinks14.jpg" alt="post" class="card-img-top img-fluid"
                    style="height: 15rem; width: 100%; object-fit: cover;">
                </a>
              </div>
              <div class="card-body">
                <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                  <div class="meta-date"><svg width="16" height="16">
                      <use xlink:href="#calendar"></use>
                    </svg>25/09/2024</div>
                  <!-- <div class="meta-categories"><svg width="16" height="16">
                      <use xlink:href="#category"></use>
                    </svg>trending</div> -->
                </div>
                <div class="post-header">
                  <h3 class="post-title">
                    <a href="#" class="text-decoration-none text-dark h4">TMT RA MẮT MẪU ĐỒ UỐNG MỚI</a>
                  </h3>
                  <p>Bắt kịp với xu hướng, TMT đã cho ra mắt 3 mẫu đồ uống mới...</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-4">
            <article class="post-item card border-0 shadow-sm p-3 my-3">
              <div class="image-holder zoom-effect">
                <a href="#">
                  <img src="img/finedining1.jpg" alt="post" class="card-img-top" height="10rem"
                    style="height: 15rem; width: 100%; object-fit: cover;">
                </a>
              </div>
              <div class="card-body">
                <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                  <div class="meta-date"><svg width="16" height="16">
                      <use xlink:href="#calendar"></use>
                    </svg>24/08/2024</div>
                  <!-- <div class="meta-categories"><svg width="16" height="16">
                      <use xlink:href="#category"></use>
                    </svg>inspiration</div> -->
                </div>
                <div class="post-header">
                  <h3 class="post-title">
                    <a href="#" class="text-decoration-none text-dark h4">KHUYẾN MÃI NHÂN DỊP MỪNG TMT FOOD 3 TUỔI</a>
                  </h3>
                  <p>Từ 25/8 đến 24/9, TMT giảm giá toàn bộ sản phẩm...</p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
    
    <section class="page-section bg-light" id="team">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase pt-5">Đội ngũ</h2>
          <h3 class="section-subheading text-muted pb-4">Các thành viên của TMT FOOD</h3>
        </div>
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-4 ">
            <div class="team-member">
              <img class="mx-5 rounded-circle" id="animated-hovering" height="10rem" src="img/tu01.jpg" alt="..." />
              <h4 class="my-4">Trần Minh Tú</h4>
              <p class="text-muted">Người sáng lập</p>
              <a class="btn btn-social mx-2" href="https://instagram.com/trmmo/" target="_blank"
                aria-label="Trần Minh Tú Profile" style="background-color: deeppink;"><i
                  class="fab fa-instagram"></i></a>
              <a class="btn btn-primary btn-social px-3 mx-2" href="https://facebook.com/trmmo/" target="_blank"
                aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-dark btn-social mx-2" href="https://github.com/trmmo" target="_blank" aria-label="Parveen Anand LinkedIn Profile"><i
                  class="fab fa-github"></i></a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="team-member">
              <img class="mx-5 rounded-circle" id="animated-hovering" src="img/tu02.jpg" alt="..." />
              <h4 class="my-4">Minh Tu Tran</h4>
              <p class="text-muted">Đồng sáng lập TMT FOOD</p>
              <a class="btn btn-social mx-2" href="https://instagram.com/trmmo/" target="_blank"
                aria-label="Trần Minh Tú Profile" style="background-color: deeppink;"><i
                  class="fab fa-instagram"></i></a>
              <a class="btn btn-primary btn-social px-3 mx-2" href="https://facebook.com/trmmo/" target="_blank"
                aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-dark btn-social mx-2" href="https://github.com/trmmo" target="_blank" aria-label="Parveen Anand LinkedIn Profile"><i
                  class="fab fa-github"></i></a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="team-member">
              <img class="mx-5 rounded-circle" id="animated-hovering" src="img/tu03.jpg" alt="..." />
              <h4 class="my-4">Chén Míng Xiù (陈明秀)</h4>
              <p class="text-muted">Đồng sáng lập TMT FOOD</p>
              <a class="btn btn-social mx-2" href="https://instagram.com/trmmo/" target="_blank"
                aria-label="Trần Minh Tú Profile" style="background-color: deeppink;"><i
                  class="fab fa-instagram"></i></a>
              <a class="btn btn-primary btn-social px-3 mx-2" href="https://facebook.com/trmmo/" target="_blank"
                aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-dark btn-social mx-2" href="https://github.com/trmmo" target="_blank" aria-label="Parveen Anand LinkedIn Profile"><i
                  class="fab fa-github"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-dark text-light py-5">
      <div class="container py-5">
        <div class="text-center">
          <h2>Hãy luôn cập nhật với chúng tôi</h2>
          <p class="lead">Nhận tin tức và khuyến mãi mới nhất từ chúng tôi</p>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <p class="my-4 h5">Nhập chính xác địa chỉ email của bạn, nếu cần bạn có thể huỷ bất kỳ lúc nào!
            </p>
            <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#reg-modal">Đăng ký</button>
          </div>
        </div>
      </div>
    </section>
    <div class="modal fade" id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal-title">Đăng ký nhận tin</h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="text-center">Hãy điền địa chỉ email của bạn</p>
            <input type="email" name="email" id="modal-email" class="form-control" placeholder="Ví dụ: abc@xyz.com">
          </div>
          <div class="modal-footer">
            <button class="btn btn-dark">Gửi</button>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="container"> -->
      <footer class="container py-5">
        <div class="row">
          <div class="col-sm-6 col-md-6 mb-3">
            <h4 class="fw-bold">TMT FOOD</h4>
            <p> <span><i class="fa-solid fa-location-dot me-2"></i></span>Phố Lụa, phường Vạn Phúc, quận Hà Đông, TP. Hà
              Nội</p>
            <p><span><i class="fa-solid fa-phone me-2"></i></span>0986 962 203</p>
            <a href="mailto:tutm.b21at199@stu.ptit.edu.vn" class="text-dark"><span><i
                  class="fa-solid fa-envelope me-2"></i></span>tutm.b21at199@stu.ptit.edu.vn</a>
          </div>

          <div class="col-6 col-md-3 mb-3">
            <h5 class="fw-bold">Thông tin</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Về TMT FOOD</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Thực đơn</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Tin tức</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Nhà Hàng</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
            </ul>
          </div>

          <div class="col-6 col-md-3 mb-3">
            <h5 class="fw-bold">Kết nối với <br>TMT FOOD</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="https://facebook.com/trmmo" target="_blank"
                  class="nav-link p-0 text-body-secondary">Facebook</a></li>
              <li class="nav-item mb-2"><a href="https://m.me/trmmo" target="_blank"
                  class="nav-link p-0 text-body-secondary">Messenger</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Zalo</a></li>
            </ul>
          </div>

          <div class="col-sm-6 col-md-6 mb-3">
            <h4 class="fw-bold">Fanpage chính thức</h4>
            <iframe
              src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTheReunionTG&tabs=timeline&width=500&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId"
              width="100%" height="200" style="border:none;" frameborder="0" allowfullscreen="true"
              allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
          </div>
          <div class="col-sm-12 col-md-6 mb-3">
            <h4 class="fw-bold">Bản đồ</h4>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2936.6831285993344!2d105.78944618966209!3d20.981102554944925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1svi!2s!4v1730083708386!5m2!1svi!2s"
              width="100%" height="200px" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
          <p>&copy; 2024 TMT FOOD.</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                  <use xlink:href="#twitter" />
                </svg></a></li>
            <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                  <use xlink:href="#instagram" />
                </svg></a></li>
            <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                  <use xlink:href="#facebook" />
                </svg></a></li>
          </ul>
        </div>
      </footer>
    <!-- </div> -->
    <script>
    </script>
  </body>

</html>