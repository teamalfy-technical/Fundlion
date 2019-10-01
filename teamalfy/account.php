<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Account</title>

    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">

    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">

    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">

    <link rel="manifest" href="manifest.json">

    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#7e7dcf">

    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">

    <link rel="stylesheet" href="fonts/myriad-pro-cufonfonts-webfont/myriad-pro-style.css">

    <link rel="stylesheet" href="css/vendor.min.css">

    <link rel="stylesheet" href="css/elephant.min.css">

    <link rel="stylesheet" href="css/application.min.css">

    <link rel="stylesheet" href="css/step-progress.min.css">

    <style>

        .banks {

            display: inline-block;

            float: none;

        }



        p {

            margin: 0;

        }



        .grid-divider {

            overflow-x: hidden;

            position: relative;

        }



        .grid-divider>[class*="col-"]:nth-child(n + 2):after {

            content: "";

            background-color: #999;

            position: absolute;

            top: 0;

            bottom: 0;

        }



        @media (max-width: 767px) {

            .grid-divider>[class*="col-"]:nth-child(n + 2):after {

                width: 100%;

                height: 2px;

                left: 0;

                top: -4px;

            }

        }



        @media (min-width: 768px) {

            .grid-divider>[class*="col-"]:nth-child(n + 2):after {

                width: 2px;

                height: auto;

                left: -1px;

            }

        }



        #black-card {

            background-image: url(img/core-img/cards.png);

            width: 100%;

            height: 100%;

            margin: 0% 0px;

            position: absolute;

            background-size: 25%;

            background-repeat: no-repeat;

            background-position: 100% 100%;

        }



        .delete_file {

            font-size: 26px;

            position: absolute;

            right: 10px;

            cursor: pointer;

            color: red;

        }



        .files {

            margin: 4px;

            border-color: #fff;

        }



        .files:hover {

            border-radius: 15px;

            box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);

        }



        .files span {

            opacity: 0;

            transition: opacity 0.5s;

        }



        .files:hover span {

            opacity: 1;

						transition: opacity 0.5s;

            animation-fill-mode: forwards;

        }

    </style>

</head>



<body class="layout layout-header-fixed">

    <div class="layout-header">

        <div class="navbar navbar-default">

            <div class="navbar-header">

                <a class="navbar-brand navbar-brand-center" href="index.php">

                    <img class="navbar-brand-logo" src="img/core-img/logo2.png" alt="fundlion">

                </a>

                <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse"

                    data-target="#sidenav">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="bars">

                        <span class="bar-line bar-line-1 out"></span>

                        <span class="bar-line bar-line-2 out"></span>

                        <span class="bar-line bar-line-3 out"></span>

                    </span>

                    <span class="bars bars-x">

                        <span class="bar-line bar-line-4"></span>

                        <span class="bar-line bar-line-5"></span>

                    </span>

                </button>

                <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse"

                    data-target="#navbar">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="arrow-up"></span>

                    <span class="ellipsis ellipsis-vertical">

                        <img class="ellipsis-object" width="32" height="32" src="img/avatar.jpg" alt="Joselyne Gen">

                    </span>

                </button>

            </div>

            <div class="navbar-toggleable" style="background-color: #fff;">

                <nav id="navbar" class="navbar-collapse collapse">

                    <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true"

                        type="button">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="bars">

                            <span class="bar-line bar-line-1 out"></span>

                            <span class="bar-line bar-line-2 out"></span>

                            <span class="bar-line bar-line-3 out"></span>

                            <span class="bar-line bar-line-4 in"></span>

                            <span class="bar-line bar-line-5 in"></span>

                            <span class="bar-line bar-line-6 in"></span>

                        </span>

                    </button>

                    <ul class="nav navbar-nav navbar-right">

                        <li class="visible-xs-block">

                            <h4 class="navbar-text text-center">Hi, Joselyne Gen</h4>

                        </li>



                        <li class="dropdown hidden-xs">

                            <button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">

                                <img class="circle" width="36" height="36" src="img/avatar.jpg" alt="Joselyne Gen">

                                Joselyne Gen

                                <span class="caret"></span>

                            </button>

                            <ul class="dropdown-menu dropdown-menu-right">

                                <!-- <li class="divider"></li> -->

                                <li><a href="contacts.php">Contacts</a></li>

                                <li><a href="profile.php">Profile</a></li>

                                <li><a href="login-1.php">Sign out</a></li>

                            </ul>

                        </li>

                        <li class="visible-xs-block">

                            <a href="contacts.php">

                                <span class="icon icon-users icon-lg icon-fw"></span> Contacts

                            </a>

                        </li>

                        <li class="visible-xs-block">

                            <a href="profile.php">

                                <span class="icon icon-user icon-lg icon-fw"></span> Profile

                            </a>

                        </li>

                        <li class="visible-xs-block">

                            <a href="login-1.php">

                                <span class="icon icon-power-off icon-lg icon-fw"></span> Sign out

                            </a>

                        </li>

                        <li class="dropdown">

                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"

                                aria-haspopup="true">

                                <span class="icon-with-child hidden-xs">

                                    <span class="icon icon-bell-o icon-lg"></span>

                                    <!-- <span class="badge badge-primary badge-above right">7</span> -->

                                </span>

                                <span class="visible-xs-block">

                                    <span class="icon icon-bell icon-lg icon-fw"></span>

                                    <span class="badge badge-primary pull-right">7</span> Notifications

                                </span>

                            </a>

                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">

                                <div class="dropdown-header">

                                    <a class="dropdown-link" href="#">Mark all as read</a>

                                    <h5 class="dropdown-heading">Recent Notifications</h5>

                                </div>

                                <div class="dropdown-body">

                                    <div class="list-group list-group-divided custom-scrollbar">

                                        <a class="list-group-item" href="#">

                                            <div class="notification">

                                                <div class="notification-media">

                                                    <span

                                                        class="icon icon-exclamation-triangle bg-warning circle sq-40"></span>

                                                </div>

                                                <div class="notification-content">

                                                    <small class="notification-timestamp">35 min</small>

                                                    <h5 class="notification-heading">Update Status</h5>

                                                    <p class="notification-text">

                                                        <small class="truncate">Failed to get available update data. To

                                                            ensure the proper functioning of your application, update

                                                            now.</small>

                                                    </p>

                                                </div>

                                            </div>

                                        </a>

                                        <a class="list-group-item" href="#">

                                            <div class="notification">

                                                <div class="notification-media">

                                                    <span class="icon icon-flag bg-success circle sq-40"></span>

                                                </div>

                                                <div class="notification-content">

                                                    <small class="notification-timestamp">43 min</small>

                                                    <h5 class="notification-heading">Account Contact Change</h5>

                                                    <p class="notification-text">

                                                        <small class="truncate">A contact detail associated with your

                                                            account teddy.wilson, has recently changed.</small>

                                                    </p>

                                                </div>

                                            </div>

                                        </a>

                                        <a class="list-group-item" href="#">

                                            <div class="notification">

                                                <div class="notification-media">

                                                    <span

                                                        class="icon icon-exclamation-triangle bg-warning circle sq-40"></span>

                                                </div>

                                                <div class="notification-content">

                                                    <small class="notification-timestamp">1 hr</small>

                                                    <h5 class="notification-heading">Failed Login Warning</h5>

                                                    <p class="notification-text">

                                                        <small class="truncate">There was a failed login attempt from

                                                            "192.98.19.164" into the account teddy.wilson.</small>

                                                    </p>

                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                </div>

                                <div class="dropdown-footer">

                                    <a class="dropdown-btn" href="#">See All</a>

                                </div>

                            </div>

                        </li>

                        <li class="dropdown">

                            <a class="dropdown-toggle" href="#" role="button">

                                <span class="icon-with-child hidden-xs">

                                    <span class="icon icon-cog icon-lg"></span>

                                </span>

                                <span class="visible-xs-block">

                                    <span class="icon icon-cog icon-lg icon-fw"></span> Messages

                                </span>

                            </a>



                        </li>

                    </ul>

                    <div class="title-bar">

                        <!-- <h1 class="title-bar-title">

                <span class="d-ib">Dasxxhboard</span>

              </h1> -->

                        <nav aria-label="breadcrumb">

                            <ol class="breadcrumb" style="margin: 10px 0px 10px 0px;font-size: 15px;">

                                <li class="breadcrumb-item"><a href="#" class="text-muted">Your Profile</a></li>

                                <li class="breadcrumb-item active" style="color: #FF5722;" aria-current="page">Account

                                </li>

                            </ol>

                        </nav>

                    </div>

                </nav>

            </div>

        </div>

    </div>

    <div class="layout-main">

        <div class="layout-sidebar">

            <div class="layout-sidebar-backdrop"></div>

            <div class="layout-sidebar-body">

                <div class="custom-scrollbar">

                    <nav id="sidenav" class="sidenav-collapse collapse">

                        <ul class="sidenav level-1">

                            <li class="sidenav-heading" style="font-size:16px;color: #fff;">PROFILE</li>

                            <li class="sidenav-item">

                                <a href="dashboard.php" aria-haspopup="true">

                                    <!-- <span class="sidenav-icon icon icon-works">&#103;</span> -->

                                    <span class="sidenav-label">Dashboards</span>

                                </a>

                            </li>

                            <li class="sidenav-item">

                                <a href="messages.php">

                                    <span class="sidenav-label">Messages</span>

                                </a>

                            </li>

                            <li class="sidenav-item">

                                <a href="myloans.php">

                                    <span class="sidenav-label">My Loans</span>

                                </a>

                            </li>

                            <li class="sidenav-item active">

                                <a href="account.php">

                                    <span class="sidenav-label">Account</span>

                                </a>

                            </li>

                            <li class="sidenav-item">

                                <a href="lenders.php">

                                    <span class="sidenav-label">Lenders</span>

                                </a>

                            </li>

                            <li class="sidenav-item">

                                <a href="#">

                                    <span class="sidenav-label">Reports</span>

                                </a>

                            </li>

                            <li class="sidenav-heading" style="font-size:16px;color: #fff;">HELP</li>

                            <li class="sidenav-item">

                                <a href="#">

                                    <span class="sidenav-label">Support</span>

                                </a>

                            </li>

                            <li class="sidenav-item">

                                <a href="#">

                                    <span class="sidenav-label">How it works</span>

                                </a>

                            </li>

                            <li class="sidenav-item">

                                <a href="#">

                                    <span class="sidenav-label">Terms of Service</span>

                                </a>

                            </li>

                            <li class="sidenav-item">

                                <a href="#">

                                    <span class="sidenav-label">Contact Fundlion</span>

                                </a>

                            </li>

                        </ul>

                    </nav>

                </div>

            </div>

        </div>

        <div class="layout-content">

            <div class="layout-content-body" style="background-color: #e0e0e0;font-weight: 700;height: 100%;">

                <div class="row gutter-xs">

                    <div class="col-lg-10 col-lg-offset-1">

                        <h2 style="color: #000000;font-weight: 900;">Hi Joselyne, <span style="font-weight: 100;">Here

                                is your Account</span></h2>

                    </div>

                </div>

                <div class="row" style="margin-top: 30px;">

                    <div class="col-lg-10 col-lg-offset-1">

                        <div class="row gutter-xs">

                            <div class="col-lg-12">

                                <div class="card"

                                    style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);">

                                    <div class="card-body no-border">

                                        <div class="row grid-divider">

                                            <div class="col-lg-7 col-md-7" style="padding: 0 30px;">

                                                <h3 style="color: #000000; font-weight: 900;">Your Company Details</h3>

                                                <div class="row">

                                                    <div class="col-lg-5">

                                                        <p style="font-weight: 900;color: #000000;font-size: 16px;">

                                                            Company Name:</p>

                                                    </div>

                                                    <div class="col-lg-7">

                                                        <p style="font-size: 16px;color: #343439;font-weight: 100;">Team

                                                            Alfy</p>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-lg-5">

                                                        <p style="font-weight: 900;color: #000000;font-size: 16px;">

                                                            Industry Sector:</p>

                                                    </div>

                                                    <div class="col-lg-7">

                                                        <p style="font-size: 16px;color: #343439;font-weight: 100;">Web

                                                            Development</p>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-lg-5">

                                                        <p style="font-weight: 900;color: #000000;font-size: 16px;">

                                                            Trading As:</p>

                                                    </div>

                                                    <div class="col-lg-7">

                                                        <p style="font-size: 16px;color: #343439;font-weight: 100;">Sole

                                                            Trader</p>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-lg-5">

                                                        <p style="font-weight: 900;color: #000000;font-size: 16px;">

                                                            Trading For:</p>

                                                    </div>

                                                    <div class="col-lg-7">

                                                        <p style="font-size: 16px;color: #343439;font-weight: 100;">5

                                                            Years</p>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-lg-5">

                                                        <p style="font-weight: 900;color: #000000;font-size: 16px;">

                                                            Business Revenue:</p>

                                                    </div>

                                                    <div class="col-lg-7">

                                                        <p style="font-size: 16px;color: #343439;font-weight: 100;">$

                                                            100,000</p>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-lg-5">

                                                        <p style="font-weight: 900;color: #000000;font-size: 16px;">

                                                            Business Address:</p>

                                                    </div>

                                                    <div class="col-lg-7">

                                                        <p style="font-size: 16px;color: #343439;font-weight: 100;">24

                                                            East Avenue, Harrow London, HA 13 6DS</p>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-lg-5">

                                                        <p style="font-weight: 900;color: #000000;font-size: 16px;">

                                                            Business Telephone:</p>

                                                    </div>

                                                    <div class="col-lg-7">

                                                        <p style="font-size: 16px;color: #343439;font-weight: 100;">+44

                                                            587 9657 548</p>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-lg-5">

                                                        <p style="font-weight: 900;color: #000000;font-size: 16px;">

                                                            Business Email:</p>

                                                    </div>

                                                    <div class="col-lg-7">

                                                        <p style="font-size: 16px;color: #343439;font-weight: 100;">

                                                            info@teamalfy.com</p>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-lg-5 col-md-5">

                                                <h3 style="color: #000000; font-weight: 900;">Your Personal Details</h3>

                                                <div class="row">

                                                    <div class="col-lg-5 col-md-5">

                                                        <div>

                                                            <img class="circle" width="120" height="120"

                                                                src="img/avatar.jpg" alt="Joselyne Gen">

                                                            <!-- < -->

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-7 col-md-7">

                                                        <h2 style="color: #000; font-weight: 900;">Joselyne Gen</h2>

                                                        <div class="media">

                                                            <div class="media-middle media-left">

                                                                <a href="#">

                                                                    <img width="20" height="20"

                                                                        src="img/core-img/phone-call.png"

                                                                        alt="Harry Jones">

                                                                </a>

                                                            </div>

                                                            <div class="media-middle media-body" style="color: #000;">

                                                                <h5 class="m-y-0">+44 254 9657 964</h5>

                                                            </div>

                                                        </div>

                                                        <div class="media">

                                                            <div class="media-middle media-left">

                                                                <a href="#">

                                                                    <img width="20" height="20"

                                                                        src="img/core-img/mail.png" alt="Harry Jones">

                                                                </a>

                                                            </div>

                                                            <div class="media-middle media-body" style="color: #000;">

                                                                <h5 class="m-y-0">joselyne@fundlion.com</h5>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="row" style="margin-top: 20px;">

                                                    <div class="col-lg-7 col-md-7">

                                                        <div class="media">

                                                            <div class="media-middle media-left">

                                                                <a href="#">

                                                                    <img class="img-circle" width="40" height="40"

                                                                        src="img/core-img/location.png"

                                                                        alt="Harry Jones">

                                                                </a>

                                                            </div>

                                                            <div class="media-middle media-body" style="color: #000;">

                                                                <h5 class="m-y-0" style="font-size: 18px;">24 East

                                                                    Avenue</h5>

                                                                <small>Harrow, London</small><br>

                                                                <small>HA 13 6DS</small>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-5 col-md-5 text-right">

                                                        <button class="btn btn-success">Edit Detials</button>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row" style="margin-top: 60px;">

                    <div class="col-lg-10 col-lg-offset-1">

                        <div class="row gutter-xs">

                            <div class="col-lg-12">

                                <div class="card"

                                    style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);">

                                    <div class="card-body no-border">

                                        <div class="row grid-divider">

                                            <div class="col-lg-12" style="padding: 0 30px;">

                                                <h3 class="text-center" style="color: #000000; font-weight: 900;">

                                                    Documents</h3>

                                                <div class="row"

                                                    style="margin-top: 30px;overflow-x: auto;white-space: nowrap;">

                                                    <div class="banks col-lg-2 col-md-2 col-sm-4 col-xs-4">

                                                        <div class="card files">

                                                            <span class="delete_file">x</span>

                                                            <div class="card-image">

                                                                <img class="card-img img-responsive"

                                                                    style="margin: 20px auto;width: 75px;"

                                                                    src="img/core-img/pdf-file.png" alt="Lloyds">

                                                            </div>

                                                        </div>

                                                        <h4 class="text-center" style="color: #000000;">Passport</h4>

																										</div>

																										<div class="banks col-lg-2 col-md-2 col-sm-4 col-xs-4">

                                                        <div class="card files">

                                                            <span class="delete_file">x</span>

                                                            <div class="card-image">

                                                                <img class="card-img img-responsive"

                                                                    style="margin: 20px auto;width: 75px;"

                                                                    src="img/core-img/pdf-file.png" alt="Lloyds">

                                                            </div>

                                                        </div>

                                                        <h4 class="text-center" style="color: #000000;">Bank Statement</h4>

																										</div>

																										<div class="banks col-lg-2 col-md-2 col-sm-4 col-xs-4">

                                                        <div class="card files">

                                                            <span class="delete_file">x</span>

                                                            <div class="card-image">

                                                                <img class="card-img img-responsive"

                                                                    style="margin: 20px auto;width: 75px;"

                                                                    src="img/core-img/pdf-file.png" alt="Lloyds">

                                                            </div>

                                                        </div>

                                                        <h4 class="text-center" style="color: #000000;">I.D</h4>

																										</div>

																										<div class="banks col-lg-2 col-md-2 col-sm-4 col-xs-4">

                                                        <div class="card files">

                                                            <span class="delete_file">x</span>

                                                            <div class="card-image">

                                                                <img class="card-img img-responsive"

                                                                    style="margin: 20px auto;width: 75px;"

                                                                    src="img/core-img/pdf-file.png" alt="Lloyds">

                                                            </div>

                                                        </div>

                                                        <h4 class="text-center" style="color: #000000;">Other File</h4>

																										</div>

																										<div class="banks col-lg-2 col-md-2 col-sm-4 col-xs-4">

                                                        <div class="card files">

                                                            <span class="delete_file">x</span>

                                                            <div class="card-image">

                                                                <img class="card-img img-responsive"

                                                                    style="margin: 20px auto;width: 75px;"

                                                                    src="img/core-img/pdf-file.png" alt="Lloyds">

                                                            </div>

                                                        </div>

                                                        <h4 class="text-center" style="color: #000000;">Other File</h4>

																										</div>

																										<div class="banks col-lg-2 col-md-2 col-sm-4 col-xs-4">

                                                        <div class="card files">

                                                            <span class="delete_file">x</span>

                                                            <div class="card-image">

                                                                <img class="card-img img-responsive"

                                                                    style="margin: 20px auto;width: 75px;"

                                                                    src="img/core-img/pdf-file.png" alt="Lloyds">

                                                            </div>

                                                        </div>

                                                        <h4 class="text-center" style="color: #000000;">Other File</h4>

																										</div>

																										<div class="banks col-lg-2 col-md-2 col-sm-4 col-xs-4">

                                                        <div class="card files">

                                                            <span class="delete_file">x</span>

                                                            <div class="card-image">

                                                                <img class="card-img img-responsive"

                                                                    style="margin: 20px auto;width: 75px;"

                                                                    src="img/core-img/pdf-file.png" alt="Lloyds">

                                                            </div>

                                                        </div>

                                                        <h4 class="text-center" style="color: #000000;">Other File</h4>

																										</div>

																										<div class="banks col-lg-2 col-md-2 col-sm-4 col-xs-4">

                                                        <div class="card files">

                                                            <span class="delete_file">x</span>

                                                            <div class="card-image">

                                                                <img class="card-img img-responsive"

                                                                    style="margin: 20px auto;width: 75px;"

                                                                    src="img/core-img/pdf-file.png" alt="Lloyds">

                                                            </div>

                                                        </div>

                                                        <h4 class="text-center" style="color: #000000;">Other File</h4>

																										</div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

								</div>

								<div class="row" style="margin-top: 60px;">

                    <div class="col-lg-10 col-lg-offset-1">

                        <div class="row gutter-xs">

                            <div class="col-lg-12">

                                <div class="card"

                                    style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);">

                                    <div class="card-body no-border">

                                        <div class="row">

                                            <div class="col-lg-6 col-md-6" style="padding: 0 30px;">

                                                <h3 class="text-center" style="color: #696969;margin: 60px 0;font-weight: 900;">

                                                    Upload Your Documents here</h3>

																						</div>

																						<div class="col-lg-6 col-md-6" style="padding: 0 30px;">

																							<div class="card uploader" id="uploader" style="padding: 0px;margin-top: 10px; background-color: #eaeaea; border: 1px solid #46474c;border-radius: 10px;">

																									<div class="card-body" style="padding: 0px;">

																										<div class="row">

																												<form action="" enctype="multipart/form-data">

																														<div class="form-group text-center" style="margin: 0;">

																															<label style="padding: 30px 0;">

																																	<div class="media">

																																			<div class="media-middle media-body" style="color: #000;opacity: .5;">

																																					<img width="50" height="50"

																																					src="img/core-img/upload-icon.png" style="margin:10px;">	

																																					<span class="m-y-0">Drop your file here or Click to upload:

																																						<input type="file" style="display: none;" id="file-upload"  name="file">

																																					</span>

																																			</div>

																																	</div>

																															</label>

																														</div>

																												</form>

																										</div>

																									</div>

																							</div>

																						</div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="js/vendor.min.js"></script>

    <script src="js/elephant.min.js"></script>

    <script src="js/application.min.js"></script>

    <script src="js/dropzone.js"></script>

    <script>

        $(document).ready(function(){

					$(".delete_file").click(function (event) {

						$(this).parents('.banks').remove();

					});



					$("#uploader").dropzone({ url: "/file/post" });

				});



    </script>

</body>



</html>

