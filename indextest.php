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
    <style>
      .col {
        border-color: black;
      }

      a {
        text-decoration: none;
      }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
      <div class="container-xxl ">
        <a href="/index.html" class="rd-flex align-items-center">
          <img src="img/labuda.jpg" alt="" height="50px"
            class="border border-4 border-black rounded-circle ms-4 me-5 nav-logo" id="mainLogo">
          <span class="fw-bold text-light mt-3 ms-2 mt-3 display-6 text-logo" id="mainLogo">
            TMT FOOD
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#hiddenNav"
          aria-controls="hiddenNav" aria-expanded="false" aria-label="Nav-toggler">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end align-center me-3" id="hiddenNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-end" aria-current="page" href="index.html">Trang chủ</a>
          </li>
          <li class="nav-item dropdown text-light text-end">
            <a class="nav-link dropdown" href="/menu.html" aria-expanded="false">Thực đơn</a>
            <ul class="dropdown-menu bg-dark">
              <li><a class="dropdown-item text-end text-light" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item text-light text-end">
            <a class="nav-link">Tin tức</a>
          </li>

          <li class="nav-item text-light text-end">
            <a class="nav-link" href="#">Về TMT</a>
          </li>
          <li class="nav-item text-light text-end">
            <a class="btn bg-transparent" data-bs-toggle="collapse" href="#search-form" role="button"
              aria-expanded="false" aria-controls="search-form">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                viewBox="0 0 16 16">
                <path
                  d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
              </svg>
            </a>
          </li>
        </ul>
      </div>
      <div class="collapse" id="search-form">
        <form role="search">
          <input class="form-control bg-success me-3" type="search" placeholder="Tìm kiếm" aria-label="Search">
        </form>
      </div>
    </nav>

    <div class="container-fluid text-light justify-content-center home-bg"
      style="background-image: url(img/finedining2.jpg);">
      <div class="overlay">
        <p class="display-4 text-center fst-italic">Welcome to TMT catering</p>
        <p class="display-1 text-center text-uppercase fw-bolder" id="animated-hovering">Chào mừng bạn đến với <br>TMT
          catering</p>
      </div>
    </div>
    <section id="recommendation">
      <h2 class="fw-bold text-center py-5 display-5 border-bottom text-uppercase">Hôm nay ăn gì?</h2>
      <div class="container-fluid">
        <div class="row my-3 align-items-center justify-content-center">
          <div class="col-8 col-lg-4 col-xl-3 py-3">
            <div class="card shadow">
              <div class="card-body text-center py-4">
                <h4 class="card-title">Món 1</h4>
                <img src="img/m1.jpg" alt="" class="img-fluid my-3 w-100">

                <p class="card-text">Giá: 999.000đ</p>
                <button class="btn btn-outline-dark btn-lg">Mua ngay</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-xl-3 py-3">
            <div class="card border-2 border-dark shadow">
              <div class="card-body text-center py-5">

                <h4 class="card-title">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stars"
                    viewBox="0 0 16 16">
                    <path
                      d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z" />
                  </svg> Món 2
                </h4>
                <img src="img/m2.jpg" alt="" class="img-fluid my-3">
                <p class="card-text">Giá: 499.000đ</p>
                <button class="btn btn-dark btn-lg mt-3  ">Mua ngay</button>
              </div>
            </div>
          </div>
          <div class="col-8 col-lg-4 col-xl-3 py-3">
            <div class="card shadow">
              <div class="card-body text-center py-4">
                <h4 class="card-title">Món 3</h4>
                <img src="img/m3.jpg" alt="" class="img-fluid my-3">
                <p class="card-text">Giá: 249.000đ</p>
                <button class="btn btn-dark btn-lg mt-3  ">Mua ngay</button>
              </div>
            </div>
          </div>
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
    <section id="myInfo">
      <div class="container-fluid">
          <div class="row justify-content-end align-items-center">
              <div class="col-md-5 text-center text-md-end">
                  <h1>
                      <div class="display-2">Tran Minh Tu</div>
                      <div class="display-5 text-muted">HVCNBCVT</div>
                  </h1>
                  <p class="lead my-4 text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                  <a href="#" class="btn btn-secondary btn-lg">Button</a>
              </div>
              <div class="col-md-5 text-center text-md-start">
                  <img src="img/m7.jpg" alt="drm" class="img-fluid">
              </div>
          </div>
      </div>
    </section>
    <div class="embed-responsive embed-responsive-16by9">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/7vxiqdJwbKw?si=au5BmWHwA5Z47gUt"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <section class="page-section bg-light" id="team">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase pt-5">Đội ngũ</h2>
          <h3 class="section-subheading text-muted pb-4">Các thành viên của TMT FOOD</h3>
        </div>
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-4 ">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/m1.jpg" alt="..." />
              <h4>Trần Minh Tú</h4>
              <p class="text-muted">Lead Designer</p>
              <a class="btn btn-dark btn-social mx-2" href="https://instagram.com/trmmo/" target="_blank"
                aria-label="Trần Minh Tú Profile"><i class="fab fa-instagram"></i></a>
              <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i
                  class="fab fa-facebook-f"></i></a>
              <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i
                  class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/m2.jpg" alt="..." />
              <h4>Minh Tu Tran</h4>
              <p class="text-muted">Lead Marketer</p>
              <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i
                  class="fab fa-twitter"></i></a>
              <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i
                  class="fab fa-facebook-f"></i></a>
              <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i
                  class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/m3.jpg" alt="..." />
              <h4>Chén Míng Xiù (陈明秀)</h4>
              <p class="text-muted">Lead Developer</p>
              <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i
                  class="fab fa-twitter"></i></a>
              <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i
                  class="fab fa-facebook-f"></i></a>
              <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i
                  class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-light py-5">
      <div class="container py-5">
        <div class="text-center">
          <h2>Hãy luôn cập nhật với chúng tôi</h2>
          <p class="lead">Nhận tin tức và khuyến mãi mới nhất từ chúng tôi</p>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <p class="text-muted my-4 h5">Nhập chính xác địa chỉ email của bạn, nếu cần bạn có thể huỷ bất kỳ lúc nào!
            </p>
            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#reg-modal">Đăng ký</button>
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
            <p class="text-center">Hay dien dia chi email cua ban</p>
            <input type="email" name="email" id="modal-email" class="form-control" placeholder="E.g abc@xyz.com">
          </div>
          <div class="modal-footer">
            <button class="btn btn-dark">Gửi</button>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex container-fluid justify-content-center">
      <button class="d-inline btn btn-primary text-center mx-2">Btn 1</button>
      <button class="d-inline btn btn-primary text-center mx-2">Btn 2</button>
      <button class="d-inline btn btn-primary text-center mx-2">Btn 3</button>
    </div>
    <div class="container">
      <footer class="py-5">
        <div class="row">
          <div class="col-6 col-md-2 mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
          </div>

          <div class="col-md-5 offset-md-1 mb-3">
            <form>
              <h5>Subscribe to our newsletter</h5>
              <p>Monthly digest of what's new and exciting from us.</p>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                <button class="btn btn-dark" type="button">Subscribe</button>
              </div>
            </form>
          </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
          <p>&copy; 2024 Company, Inc. All rights reserved.</p>
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
    </div>
    <div class="container-fluid">
      <div class="box" style="background-color: rgba(0, 0, 0, 0.5); width: 100%; height: 50vh;"></div>
    </div>
    <script>
      const navEl = document.querySelector('.navbar');
      const navLg = document.querySelector('.nav-logo');
      const txtLg = document.querySelector('.text-logo');
      window.addEventListener('scroll', () => {
        if (window.scrollY >= 56) {
          navEl.classList.add('navbar-scrolled');
          navLg.classList.add('nav-logo-scrolled');
          txtLg.classList.add('text-logo-scrolled');
        }
        else {
          navEl.classList.remove('navbar-scrolled')
          navLg.classList.remove('nav-logo-scrolled');
          txtLg.classList.remove('text-logo-scrolled');
        }
      });
    </script>
  </body>

</html>