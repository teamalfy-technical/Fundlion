<!DOCTYPE html>

<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

  <meta charset="UTF-8">

  <meta name="description" content="">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



  <!-- Title -->

  <title>Login - FundLion</title>



  <!-- Favicon -->

  <!-- <link rel="icon" href="img/core-img/favicon.ico"> -->



  <!-- Core Stylesheet -->

  <link rel="stylesheet" href="css/style.css">



  <!-- Responsive Stylesheet -->

  <link rel="stylesheet" href="css/responsive.css">

  <style>
    .topnav {

      overflow: hidden;

      background-color: rgb(221, 219, 219);

    }



    .topnav a {

      float: left;

      text-align: center;

      padding: 14px 16px;

      text-decoration: none;

      font-size: 12px;

      color: rgb(213, 61, 0);

    }



    .topnav a:hover {

      background-color: #ddd;

      color: black;

    }



    .topnav a.active {

      background-color: #4CAF50;

      color: white;

    }



    .topnav-right {

      float: right;

    }



    .message-navigation ul li {

      border-right: 1px solid #d63d01;

      height: 100%;

      font-weight: 600;

      font-size: 14px;

    }



    .message-navigation ul li a {

      padding: 0 10px;

      color: #d63d01 !important;

      cursor: pointer;

    }



    .message-navigation ul li a:hover {

      text-decoration: underline;

      color: #ff0000;

      background-color: #fff;

    }



    .message-navigation ul li:last-of-type {

      border-right: none;

    }



    .message-navigation ul ul li {

      border-right: none;

    }
  </style>

</head>



<body class="light-version">

  <?php
  include 'preloader.php';
  include 'header.php';
  ?>

<!-- body -->
  <section class="hero-section white-bg relative section-padding" id="home">

    <div class="hero-section-content" style="margin-top: 12rem;">



      <div class="container h-100">



        <div class="row h-100 mb-50 align-items-center">

          <!-- Welcome Content -->

          <!-- <div class="col-12 col-lg-6 offset-lg-3 col-md-12">

                        

                    </div> -->

          <div class="card" style="border-color:#fff;width: 26rem;">

            <div class="card-body text-center">

              <!-- <img src="img/core-img/logo2.png" style="width: 15rem;margin-bottom: 40px;" alt="logo"> -->

              <form>

                <div class="form-group">

                  <input type="email" class="form-control" placeholder="joselyne.gen@fundlion.com">

                </div>

                <div class="form-group">

                  <input type="password" class="form-control" placeholder="*****************">

                </div>

                <div class="form-check" style="text-align: right;">

                  <input type="radio" class="form-check-input" id="remember_me">

                  <label class="form-check-label" for="remember_me">Remember me</label>

                </div>

                <div class="form-group text-center mt-4 mb-0">

                  <button type="submit" class="btn btn-success" style="width: 10rem">Login</button>

                </div>

                <div class="form-group text-center">

                  <a href="#" class="text-dark" style="font-size: 14px;font-weight:600">Forgot password?</a>

                </div>

              </form>

              <div class="form-group text-center mt-5">

                <p>If you don't have an account, <a href="#" style="font-size: 14px;font-weight: 500; color: #d53d00;">contact Fundlion</a></p>

              </div>

            </div>

          </div>



        </div>

      </div>

    </div>

  </section>

  <section style="background-image: url(img/core-img/dotted_box.png);height: 80px;background-size: cover;"></section>
  <div class="clearfix"></div>

  <?php
  // footer
  include 'footer.php';
  ?>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/dzsparallaxer.js"></script>
  <script src="js/jquery.syotimer.min.js"></script>
  <script src="js/script.js"></script>

</body>
</html>