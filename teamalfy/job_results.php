<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <?php
    $title = 'Job Results - FundLion';
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
            <div class="row">
                <div class="col-md-3 text-center">
                    <img class="card-img-top" src="img/3476962581.jpg" alt="Card image cap" style="height: 12rem; border-radius: 6rem;">
                </div>
                <div class="col-md-8  col-xs-12 details_top_right" style="padding-left: 2.8rem;">

                    <div style="margin-top:3rem;" class="">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="careers.php">Careers</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Open Positions <span>(3)</span> </li>
                            </ol>
                        </nav>

                        <div id="job_details_head" class="header">

                            <h1 class="mb-0 details_header">Managment</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table table-striped table-hover table-borderless">
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Team</th>
                                <th>Office</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr onclick="window.location='./job_details.php';" style="cursor: pointer;">
                                <td>Customer Service Manager</td>
                                <td>Customer Service</td>
                                <td>Bangalore</td>
                            </tr>
                            <tr onclick="window.location='./job_details.php';" style="cursor: pointer;">
                                <td>Data Engineer (Data Science)</td>
                                <td>Data Insights</td>
                                <td>San Francisco</td>
                            </tr>
                            <tr onclick="window.location='./job_details.php';" style="cursor: pointer;">
                                <td>Lending Analyst</td>
                                <td>Finance and Accounting</td>
                                <td>Atlanta</td>
                            </tr>
                        </tbody>
                    </table>
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
    <script src="js/script.js"></script>

</body>
</html>