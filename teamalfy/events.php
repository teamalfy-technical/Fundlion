<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <?php
    $title = 'Events - FundLion';
    include 'head.php';
    ?>
</head>

<body class="light-version">

    <?php
    include 'preloader.php';
    include 'header.php';
    $hero_title = 'Events';
    $hero_subtitle = 'Explore and register for our current and upcoming events.';
    $hero_id = 'home_about';
    include 'hero.php';
    ?>

    <!-- body -->
    <section class="about-us-area clearfix">
        <div class="container" style="padding: 30px 15px;">

            <div class="row">

                <div class="col-lg-9 col-md-9 col-sm-12">

                    <div class="row">
                        <div class="col">
                            <div class="card border-0">
                                <div class="row ">
                                    <div class="col-md-3">
                                        <div class="card midcards news_card" style="border-radius: 10px;border: 2px solid #7c7d81;">
                                            <div class="card-body text-center p-0">
                                                <img class="event_img" src="img/events-img/quick_books.png" style="max-width: 100%;border-radius: 10px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 px-3">
                                        <div class="card-block event_body">
                                            <h5 class="card-title news_heading">QuickBooks Connect</h5>
                                            <div class="card-text">
                                                <div>
                                                    <i class="fa fa-calendar orange"></i> 3-4 March 2020
                                                </div>
                                                <div class="">
                                                    <i class="fa fa-map-marker orange fa-lg"></i> Olympia, London
                                                </div>
                                                <div>
                                                    <a href="https://uk.quickbooksconnect.com" target="__blank">
                                                        <i class="fa fa-link orange"></i> https://uk.quickbooksconnect.com
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="card-text event_text">
                                                QuickBooks Connect is a really inspirational place to spend some time for a couple days, to speak to other small to
                                                medium size businesses, and accountants who are running their own businesses.
                                            </div>
                                            <div>
                                                <a href="./event_details.php" class="btn btn-primary btn-news">Read More</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr class="hr">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card border-0">
                                <div class="row ">
                                    <div class="col-md-3">
                                        <div class="card midcards news_card" style="border-radius: 10px;border: 2px solid #7c7d81;">
                                            <div class="card-body text-center p-0">
                                                <img class="event_img" src="img/events-img/SME.jpg" style="max-width: 100%;border-radius: 10px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 px-3">
                                        <div class="card-block event_body">
                                            <h5 class="card-title news_heading">Fundlion Meetup and SME Networking Event</h5>
                                            <div class="card-text">
                                                <div>
                                                    <i class="fa fa-calendar orange"></i> 3-4 October 2019
                                                </div>
                                                <div class="">
                                                    <i class="fa fa-map-marker orange fa-lg"></i> IOD, London
                                                </div>
                                                <div>
                                                    <a href="https://fundlion.com" target="__blank">
                                                        <i class="fa fa-link orange"></i> https://fundlion.com
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="card-text event_text">
                                                Looking to take your business further? Attend a Fundlion meetup to network with like-minded entrepreneurs, hear
                                                inspiring stories and get expert advice to help you get finance-ready!
                                            </div>
                                            <div>
                                                <a href="./event_details.php" class="btn btn-primary btn-news">Read More</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr class="hr">

                            </div>
                        </div>
                    </div>

                    <div class="row mt-20 mb-40">
                        <div class="col w-100">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 upcoming_events_text">
                    <div class="row px-3">
                        <div class="col btn btn-dark" style="cursor:unset;">
                            Upcoming Events
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <hr class="hr">
                            <a href="./event_details.php" class="text-dark">
                                <h5 class="text-dark orange right_event_heading">Event Example 1</h5>
                            </a>
                            <div> 7-8 Aug 2019, </div>
                            <div> Olympio, London</div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <hr class="hr">
                            <a href="./event_details.php" class="text-dark">
                                <h5 class="text-dark orange right_event_heading">Event Example 2</h5>
                            </a>
                            <div>7-8 Aug 2019,</div>
                            <div>IOD, London</div>
                            <!-- <span class="righ_event_description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Eum et explicabo nulla error recusandae reiciendis labore impedit amet ex soluta corrupti ratione,
                                sapiente architecto molestiae. Quisquam, sit perferendis. Sint, iste.
                            </span> -->

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
    <script src="js/script.js"></script>
    <script src="js/news.js"></script>

</body>
</html>