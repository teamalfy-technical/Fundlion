<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <?php
    $title = 'Appointment Form - FundLion'; //news heading goes here
    include 'head.php';
    ?>
</head>

<body class="light-version">
    <?php
    include 'preloader.php';
    include 'header.php';
    ?>

    <!-- body -->
    <section style="margin-top: 8.5rem; padding: 1rem;" class="job_details_head">
        <div class="container" style="margin-top: 20px; margin-bottom: 20px;">

            <div class="row mb-40">
                <div class="col-md-8 col-md-offset-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="appointment.php">View all Appointments</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Book</li>
                        </ol>
                    </nav>

                    <div id="appointment_head_texts" class="header">
                        <h4 class="mb-0 details_header">Event Name Here </h4>
                        <span>24 July 2019, 12:30 PM <span class="ml-2"><a href="appointment.php" class="orange">Modify</a></span><span>
                                <div>30 min | Free</div>
                                <div class="mt-3"> <b>Staff Member </b></div>
                                <div>Senior Director, Fundlion</div>
                    </div>
                    <hr class="hr">

                    <div class="row">
                        <div class="col">
                            <div class="my-auto border contact_form_box ">
                                <h5 class="mb-4">
                                    Your Information
                                </h5>

                                <form class="contact-form d-flex flex-column " action="" method="POST">
                                    <div class="form-group  w-100">
                                        <input type="first_name" class="form-control" placeholder="First Name" name="first_name" required />
                                    </div>
                                    <div class="form-group  w-100">
                                        <input type="last_name" class="form-control" placeholder="Last Name" name="last_name" required />
                                    </div>
                                    <div class="form-group  w-100">
                                        <input type="email" class="form-control" placeholder="Email" name="name" required />
                                    </div>
                                    <div class="form-group  w-100">
                                        <input type="tel" class="form-control" placeholder="Phone Number" name="phone_number" required />
                                    </div>


                                    <h5 class="mt-4 float-left">
                                        Additional Information
                                    </h5>

                                    <div class="form-group  w-100">
                                        <label for="">Please give us a brief overview of your business financing requirements?</label>
                                        <input type="text" class="form-control" placeholder="" name="overview" required />
                                    </div>

                                    <button type="submit" class="btn btn-orange btn-info  w-100">Book Appointment</button>

                                </form>
                            </div>
                        </div>


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
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/dzsparallaxer.js"></script>
    <script src="js/jquery.syotimer.min.js"></script>
    <script src="js/zabuto_calendar.js"></script>
    <script src="js/script.js"></script>
    <script src="js/appointment.js"></script>
</body>

</html>