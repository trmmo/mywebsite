<?php
      include('config.php');    
	  session_start();	  
	  if ($_SESSION){
        header('location:index');
	  }
	  if(isset($_POST['login'])){
		  // Lấy giá trị từ form
		  $username = $_POST['username'];
		  $password = $_POST['password'];
          $hash = md5($password);

		  // Tạo câu truy vấn
		  $sql = "SELECT * FROM users WHERE username='$username' AND password='$hash' LIMIT 1";
		  
		  // Thực thi câu truy vấn bằng MySQLi
		  $query = mysqli_query($conn, $sql);
		  
		  // Kiểm tra số lượng kết quả trả về
		  $nums = mysqli_num_rows($query);
		  
		  if($nums > 0){
			  // Lấy dữ liệu từ kết quả
			  $row = mysqli_fetch_array($query);
			  
			  // Lưu thông tin vào session
			  $_SESSION['username'] = $row['username'];
			  $_SESSION['role'] = $row['role'];	
			  $_SESSION['id'] = $row['id'];  
			  
			  // Điều hướng đến trang index
			  if ($_SESSION['role'] == "admin"){
                header("location: admin");
              }
              else{
                header("location: index");

              }
			// echo 'OK';
		  } else {
		      echo "<script> alert('Sai thông tin đăng nhập!')</script>";
		  }		  
	  }
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
    <header>
      <nav class="navbar navbar-expand-lg navbar-drk navbar-dark">
        <div class="container-xxl ">
          <a href="index">
            <img src="img/logo-01.png" alt="" height="50px"
              class="rounded-circle ms-4 me-4 nav-logo" id="mainLogo">
            <span class="fw-bold text-light mt-3 ms-2 mt-3 display-6 text-logo" id="mainLogo">
              TMT FOOD
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#hiddenNav"
            aria-controls="hiddenNav" aria-expanded="false" aria-label="Nav-toggler">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse" id="search-form">

        </div>
      </nav>
    </header>
    <section class="vh-100" style="background-color: #ddd;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card shadow" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block" style="background-image: url('img/finedining1.jpg'); object-fit: cover; background-position: center center; background-size: cover;border-radius: 1rem 0 0 1rem;">
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="login" method="post">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">TMT FOOD</span>
                  </div>
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="username" class="form-control form-control-lg" name="username" />
                    <label class="form-label" for="username">Tên đăng nhập</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="password" class="form-control form-control-lg" name="password"/>
                    <label class="form-label" for="password">Mật khẩu</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="submit" name="login">Đăng nhập</button>
                  </div>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Bạn chưa có tài khoản? <a href="registration"
                      style="color: #393f81;">Đăng ký ngay!</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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