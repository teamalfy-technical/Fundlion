<!DOCTYPE html>

<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register - FundLion</title>
  <link rel="icon" href="img/core-img/favicon.png">
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



    .stepper_box {

      width: 100%;

      height: 42px;

      background-color: rgb(51, 51, 51);

      border-radius: 15px;

    }



    .stepper_active {

      background-color: rgb(255, 255, 255);

      border: 2px solid rgb(158, 158, 158);

      color: #d53d00 !important;

    }



    .stepper_active p {

      color: #d53d00 !important;

    }



    .stepper_state {

      background-color: rgb(51, 51, 51);

      color: #fff !important;

    }



    .stepper_state p {

      color: #fff !important;

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
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="light-version">
  <?php
  include 'preloader.php';
  include 'header.php';
  ?>

  <section class="white-bg relative section-padding" id="home">

    <div class="content" style="margin-top: 12rem;">



      <div class="container h-100">

        <div class="row mt-50 mb-50" id="loader" style="display: none;height: 200px;">

          <div class="col-12">

            <div class="preload-content">

              <div id="dream-load"></div>

              <p>Loading...</p>

            </div>

          </div>

        </div>

        <div class="row mb-50 " id="register_form">

          <!-- Welcome Content -->

          <div class="col-lg-3 col-md-3 p-0">

            <div class="card mt-150" style="border-color:#ccc;box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);">

              <div class="card-body">

                <h5 class="text-left mt-4" style="font-weight: 600;">Tell us a little About your business</h5>

                <p style="color: #000; font-size: 14px;">Fundlion can help you fund your business,car, house etc</p>

                <div class="row">

                  <div class="col-6">

                    <img src="img/partners/bbb-featured.png" style="max-width: 100%;">

                  </div>

                  <div class="col-6">

                    <img src="img/partners/privacy-seal_blog.png" style="max-width: 100%;">

                  </div>

                  <div class="col-12 pt-2">

                    <p><a href="#">Click to read more...</a></p>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="col-lg-6 col-md-6">

            <div class="card" style="border-color:#fff;">

              <div class="card-body text-center">

                <div style="

                          border-radius: 12px;

                          position: relative;

                          background-color: #fff;">



                  <form style="padding: 2px 25px;">

                    <section id="step1_section">

                      <h5 class="text-center mt-4">Company Information</h5>

                      <div class="form-group">

                        <input type="text" class="form-control" style="font-size: 12px;" placeholder="Business Address 'Line 1'">

                      </div>

                      <div class="form-group">

                        <select class="form-control" style="font-size: 12px;height: 32px;">

                          <option>Country</option>

                        </select>

                      </div>

                      <div class="form-group">

                        <select class="form-control" style="font-size: 12px;height: 32px;">

                          <option>Company tranding as</option>

                        </select>

                      </div>

                      <div class="form-group">

                        <select class="form-control" style="font-size: 12px;height: 32px;">

                          <option>Industry Sector</option>

                        </select>

                      </div>

                      <div class="form-group">

                        <select class="form-control" style="font-size: 12px;height: 32px;">

                          <option>Company tranding for</option>

                        </select>

                      </div>

                      <div class="form-group">

                        <select class="form-control" style="font-size: 12px;height: 32px;">

                          <option>Annual Business revenue</option>

                        </select>

                      </div>

                      <div class="row">

                        <div class="col-lg-6 col-md-6 col-xl-6">

                          <p class="text-left" style="font-size: 12px;">Is your Company Profitable</p>

                        </div>

                        <div class="col-lg-6 col-md-6 col-xl-6">

                          <div class="col-lg-6 col-md-6 col-xl-6">

                            <div class="form-check" style="text-align: left;">

                              <input type="radio" class="form-check-input" name="profitable" id="yes">

                              <label class="form-check-label" for="yes">Yes</label>

                            </div>

                          </div>

                          <div class="col-lg-6 col-md-6 col-xl-6">

                            <div class="form-check" style="text-align: left;">

                              <input type="radio" class="form-check-input" name="profitable" id="no">

                              <label class="form-check-label" for="no">No</label>

                            </div>

                          </div>

                        </div>

                      </div>



                    </section>

                    <section id="step2_section">

                      <h5 class="text-center mt-4">Contact Information</h5>

                      <div class="form-group">

                        <input type="text" class="form-control" style="font-size: 12px;" placeholder="Business Address 'Line 1'">

                      </div>

                      <div class="form-group">

                        <input type="text" class="form-control" style="font-size: 12px;" placeholder="Business Address 'Line 2'">

                      </div>

                      <div class="row">

                        <div class="col-lg-7 col-md-7 col-xl-7">

                          <div class="form-group">

                            <input type="text" class="form-control" style="font-size: 12px;" placeholder="City">

                          </div>

                        </div>

                        <div class="col-lg-5 col-md-5 col-xl-5">

                          <div class="form-group">

                            <input type="text" class="form-control" style="font-size: 12px;" placeholder="Post / Zip code">

                          </div>

                        </div>

                      </div>

                      <div class="row">

                        <div class="col-lg-5 col-md-5 col-xl-5">

                          <div class="form-group">

                            <select class="form-control" style="font-size: 12px;height: 32px;">

                              <option>UK (+44)</option>

                            </select>

                          </div>

                        </div>

                        <div class="col-lg-7 col-md-7 col-xl-7">

                          <div class="form-group">

                            <input type="text" class="form-control" style="font-size: 12px;" placeholder="0798536520">

                          </div>

                        </div>

                      </div>



                    </section>

                    <section id="step3_section">

                      <h5 class="text-center mt-4">Personal Information</h5>

                      <div class="row">

                        <div class="col-lg-6 col-md-6 col-xl-6">

                          <div class="form-group">

                            <input type="text" class="form-control" style="font-size: 12px;" placeholder="First Name">

                          </div>

                        </div>

                        <div class="col-lg-6 col-md-6 col-xl-6">

                          <input type="text" class="form-control" style="font-size: 12px;" placeholder="Last Name">

                        </div>

                      </div>

                      <div class="form-group">

                        <select class="form-control" style="font-size: 12px;">

                          <option>Role at Company</option>

                        </select>

                      </div>

                      <div class="form-group">

                        <input type="email" class="form-control" style="font-size: 12px;" placeholder="Business Email Address">

                      </div>

                      <div class="form-group">

                        <input type="tel" class="form-control" style="font-size: 12px;" placeholder="Preffered Telephone Number">

                      </div>

                      <div class="form-check" style="text-align: left;">

                        <input type="checkbox" class="form-check-input" id="agree">

                        <label class="form-check-label" style="font-size: 12px;" for="no">I Agree to Fundlion <a href="#" style="color:#d53d00;">Terms & Condition</a> and <a href="#" style="color:#d53d00;">Privacy Policy</a></label>

                      </div>

                      <div class="form-group text-right">

                        <button type="button" id="submit" class="btn btn-success" style="width: 7rem">Submit</button>

                      </div>



                    </section>

                  </form>

                </div>

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

  <script>
    $(function() {

      $('#submit').on('click', function() {

        $('#register_form').hide();

        $('#loader').show();

        setInterval(() => {

          window.location.href = "dashboard.php";

        }, 5000);

      });

    });
  </script>

</body>

</html>