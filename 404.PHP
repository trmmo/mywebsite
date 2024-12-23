<?php
  session_start();
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
      
    <?php include 'includes/navbar.php'?>

    <div class="container-fluid text-light justify-content-center home-bg">
      <div class="overlay">
        <p class="display-1 text-center text-uppercase fw-bolder" id="animated-hovering">LỖI 404! KHÔNG TÌM THẤY TRANG!</p>
      </div>
    </div>
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