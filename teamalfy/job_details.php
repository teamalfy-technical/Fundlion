<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <?php
    $title = 'Job Details'; //should be the job title name
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
                                <li class="breadcrumb-item"><a href="#">Careers</a></li>
                                <li class="breadcrumb-item"><a href="job_results.php">Open Positions</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Management</li>
                            </ol>
                        </nav>

                        <div id="job_details_head" class="header">

                            <h1 class="mb-0 details_header">Customer Service Manager</h1>
                            <!-- <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active"><a href="#">Field Agent</a></li>
                                </ol>
                            </nav> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row mt-50">
                <div class="col btn-apply-job">
                    <a class="cta-primary cta-combo__primary" title="Learn More" href="#" data-js-primary-cta="" style="color: #fff;
                                                
                background-color: #d63d01;
    
                border-color: #d63d01;            
    
                display: inline-block;
    
                padding: .875rem 1.5rem;
    
                padding: calc(.875rem - 1px) 1.5rem;
    
                font-size: 1.25rem;
    
                line-height: 1;
    
                text-align: center;
    
                text-decoration: none;
    
                vertical-align: middle;
    
                cursor: pointer;
    
                border-style: solid;
    
                border-width: 1px;
    
                margin-right: .5rem;
    
                border-radius: .5rem;
    
                transition: all .1s ease-in;">

                        Apply for this Job

                    </a>
                </div>
            </div>

            <div class="row mt-30">
                <div class="col">
                    <p>
                        Job details go here... ipsum dolor sit amet consectetur, adipisicing elit. Eaque repudiandae laudantium provident officiis fugiat
                        natus eveniet aspernatur veritatis quidem? Sequi sunt reiciendis quaerat incidunt dolor dolores nulla eligendi pariatur consectetur!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quo, eos ea optio deleniti amet labore nisi officiis inventore,
                        error quisquam nam aliquid dolores quia id dicta tempora, consequuntur quam.
                    </p>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus eos voluptatum tempore vel alias totam neque
                        facere repellat voluptate? Ipsa expedita vel ullam itaque sint quod amet, ipsam ea est.
                    </p>
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
    <script src="js/job_details.js"></script>

</body>
</html>