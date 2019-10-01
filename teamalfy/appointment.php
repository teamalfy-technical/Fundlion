<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <?php
    $title = 'Appointment - FundLion'; //news heading goes here
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
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="contact.php#online_appointments_redirect">View all Appointments</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Book</li>
                        </ol>
                    </nav>

                    <div id="job_details_head" class="header">
                        <h4 class="mb-0 details_header orange">Bridging the business financing gap in the UK post Brexit </h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div id="calendar"></div>
                    <div id="no_event" class="col">
                        Please choose a highlighted date to see available times. There are no available times on this day.
                    </div>
                </div>
                <div class="col-md-6" id="time_col">



                    <div class="row" id="time_event_2_cols">

                        <div class="col-6 text-center times">
                            <b class="">Morning</b>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td onClick="document.location.href='appointment_form.php'" class="cursor-pointer"> 09:30 AM</td>
                                        <td onClick="document.location.href='appointment_form.php'" class="cursor-pointer">10:00 AM</td>
                                    </tr>
                                    <tr>
                                        <td onClick="document.location.href='appointment_form.php'" class="cursor-pointer">10:30 AM</td>
                                        <td onClick="document.location.href='appointment_form.php'" class="cursor-pointer">11:00 AM</td>
                                    </tr>
                                    <tr>
                                        <td onClick="document.location.href='appointment_form.php'" class="cursor-pointer">11:30 AM</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-6 text-center times">
                            <b>Afternoon</b>
                            <table class="table">

                                <tbody>
                                    <tr>
                                        <td onClick="document.location.href='appointment_form.php'" class="cursor-pointer">12:00 PM</td>
                                        <td onClick="document.location.href='appointment_form.php'" class="cursor-pointer">12:30 PM</td>
                                    </tr>
                                    <tr>
                                        <td onClick="document.location.href='appointment_form.php'" class="cursor-pointer">01:00 PM</td>
                                        <td onClick="document.location.href='appointment_form.php'" class="cursor-pointer">01:30 PM</td>
                                    </tr>
                                    <tr>
                                        <td onClick="document.location.href='appointment_form.php'" class="cursor-pointer">02:00 PM</td>
                                        <td onClick="document.location.href='appointment_form.php'" class="cursor-pointer">02:30 PM</td>
                                    </tr>
                                    <tr>
                                        <td onClick="document.location.href='appointment_form.php'" class="cursor-pointer">03:00 PM</td>
                                        <td onClick="document.location.href='appointment_form.php'" class="cursor-pointer">03:30 PM</td>
                                    </tr>
                                    <tr>
                                        <td onClick="document.location.href='appointment_form.php'" class="cursor-pointer">04:00 PM</td>
                                        <td onClick="document.location.href='appointment_form.php'" class="cursor-pointer">04:30 PM</td>
                                    </tr>
                                    <tr>
                                        <td onClick="document.location.href='appointment_form.php'" class="cursor-pointer">05:00 PM</td>
                                    </tr>
                                </tbody>
                            </table>
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