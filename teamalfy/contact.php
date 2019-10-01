<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <?php
    $title = 'Contact Us - FundLion';
    include 'head.php';
    ?>
</head>

<body class="light-version">

    <?php
    include 'preloader.php';
    include 'header.php';
    $hero_title = 'Contact Us';
    $hero_subtitle = 'Sub-title goes here';
    $hero_id = 'home_about';
    include 'hero.php';
    ?>

    <!-- body/contact form -->
    <section class="resume-section mt-40 mb-40 text-center" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="my-auto border contact_form_box ">
                        <h2 class="mb-4">
                            Send us a message
                        </h2>

                        <form class="contact-form d-flex flex-column align-items-center" action="https://formspree.io/youremail@mail.com" method="POST">
                            <div class="form-group  w-100">
                                <input type="name" class="form-control" placeholder="Name" name="name" required />
                            </div>
                            <div class="form-group  w-100">
                                <input type="email" class="form-control" placeholder="Email" name="name" required />
                            </div>
                            <div class="form-group  w-100">
                                <input type="text" class="form-control" placeholder="Subject" name="subject" required />
                            </div>

                            <div class="form-group w-100">
                                <textarea class="form-control" type="text" placeholder="Message" rows="3" name="name" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-orange btn-info  w-100">Send</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="my-auto contact_form_box ">
                        <div class="mb-20">
                            <span>Call Us</span>
                            <h5>+44 223 5544 656 </h5>
                        </div>
                        <div class="mb-20">
                            <span>Email</span>
                            <h5>info@fundlion.com </h5>
                        </div>
                        <div class="mb-20">
                            <span>Mailing Address</span>
                            <h5>107 Crown Street,</h5>
                            <h5>W1G 2SA</h5>
                        </div>
                        <div class="mb-20">
                            <span>Support</span>
                            <h5>support@fundlion.com</h5>
                        </div>
                        <span id="online_appointments_redirect"></span>
                        <div class="mb-20">
                            <span>Press</span>
                            <h5>press@fundlion.com</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- book appointment -->
    <section>
        <div class="container">
            <h3 class="text-dark body_head">
                ONLINE APPOINTMENTS
            </h3>

            <hr class="hr">

            <div class="row">
                <div class="col-md-6">
                    <div class="card-block event_body">
                        <h5 class="card-title news_heading">Business Loans & Corporate Lending</h5>
                        <div class="card-text">
                            <div>
                                <i class="fa fa-calendar orange"></i> 30 min | Free
                            </div>
                            <div class="">
                                <i class="fa fa-map-marker orange fa-lg"></i> Olympia, London
                            </div>
                        </div>
                        <div class="card-text event_text">
                            Conference call to discuss your business financing requirements.
                        </div>

                    </div>
                </div>
                <div class="col-md-6 display-table">
                    <div class="text-center display-table-cell">
                        <a href="appointment.php" class="btn btn-orange mt-20">Book</a>
                    </div>
                </div>
            </div>

            <hr class="hr">

            <div class="row">
                <div class="col-md-6">
                    <div class="card-block event_body">
                        <h5 class="card-title news_heading">Business Loans & Corporate Lending</h5>
                        <div class="card-text">
                            <div>
                                <i class="fa fa-calendar orange"></i> 30 min | Free
                            </div>
                            <div class="">
                                <i class="fa fa-map-marker orange fa-lg"></i> Olympia, London
                            </div>
                        </div>
                        <div class="card-text event_text">
                            Conference call to discuss your business financing requirements.
                        </div>

                    </div>
                </div>
                <div class="col-md-6 display-table">
                    <div class="text-center display-table-cell">
                        <a href="appointment.php" class="btn btn-orange mt-20">Book</a>
                    </div>
                </div>
            </div>

            <hr class="hr">

            <div class="row">
                <div class="col-md-6">
                    <div class="card-block event_body">
                        <h5 class="card-title news_heading">Business Loans & Corporate Lending</h5>
                        <div class="card-text">
                            <div>
                                <i class="fa fa-calendar orange"></i> 30 min | Free
                            </div>
                            <div class="">
                                <i class="fa fa-map-marker orange fa-lg"></i> Olympia, London
                            </div>
                        </div>
                        <div class="card-text event_text">
                            Conference call to discuss your business financing requirements.
                        </div>

                    </div>
                </div>
                <div class="col-md-6 display-table">
                    <div class="text-center display-table-cell">
                        <a href="appointment.php" class="btn btn-orange mt-20">Book</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    // recurring html
    include 'consistent_body.php';
    // footer
    include 'footer.php';
    ?>

    <!-- ########## All JS ########## -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/dzsparallaxer.js"></script>
    <script src="js/jquery.syotimer.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>