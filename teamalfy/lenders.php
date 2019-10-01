<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Lenders</title>

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

    <link rel="stylesheet" href="css/style2.css">

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

            background-color: #c2c2c2;

            position: absolute;

            top: 0;

            bottom: 0;

        }



        @media (max-width: 767px) {

            .grid-divider>[class*="col-"]:nth-child(n + 2):after {

                width: 100%;

                height: 1.5px;

                left: 0;

                top: -4px;

            }

        }



        @media (min-width: 768px) {

            .grid-divider>[class*="col-"]:nth-child(n + 2):after {

                width: 1.5px;

                height: auto;

                left: -1px;

            }

        }



        .lenders:hover {

            background: rgb(78, 74, 74);

            background: linear-gradient(0deg, rgba(78, 74, 74, 1) 0%, rgba(255, 255, 255, 1) 100%);

            color: #fff !important;

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

                <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">

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

                <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#navbar">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="arrow-up"></span>

                    <span class="ellipsis ellipsis-vertical">

                        <img class="ellipsis-object" width="32" height="32" src="img/avatar.jpg" alt="Joselyne Gen">

                    </span>

                </button>

            </div>

            <div class="navbar-toggleable" style="background-color: #fff;">

                <nav id="navbar" class="navbar-collapse collapse">

                    <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">

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

                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">

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

                                                    <span class="icon icon-exclamation-triangle bg-warning circle sq-40"></span>

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

                                                    <span class="icon icon-exclamation-triangle bg-warning circle sq-40"></span>

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

                                <li class="breadcrumb-item active" style="color: #FF5722;" aria-current="page">Lenders

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

                            <li class="sidenav-item">

                                <a href="account.php">

                                    <span class="sidenav-label">Account</span>

                                </a>

                            </li>

                            <li class="sidenav-item active">

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

                                are our Lenders</span></h2>

                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-10 col-lg-offset-1">

                        <div class="row gutter-xs" style="margin: 30px 0;">

                            <div class="col-lg-7 col-lg-offset-5">

                                <div class="form-group">

                                    <label class="col-sm-5 control-label" style="text-align: right;font-size: 20px;font-weight: 100;color: #000;">Search Lenders</label>

                                    <div class="col-sm-7">

                                        <div class="input-group">

                                            <input class="form-control" type="text">

                                            <span class="input-group-btn">

                                                <label class="btn btn-default file-upload-btn">

                                                    <span class="icon icon-search icon-lg"></span>

                                                </label>

                                            </span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- new -->
                <div class="row">
                    <div class="row gutter-xs">
                        <div class="col-lg-10 col-lg-offset-1">

                            <div class="table-responsive">
                                <table class="table" style="background-color: #e0e0e0;">

                                    <thead>
                                        <tr>
                                            <th class="text-center">Lenders</th>
                                            <th class="text-center"></th>
                                            <th class="text-center">Match Score</th>
                                            <th class="text-center">Approval Time</th>
                                            <th class="text-center">Expected Cost</th>
                                            <th class="text-center"></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr class="white-rows">
                                            <td class="text-left"><img src="img/partners/market_place_invoice.png" width="30" alt=""></td>
                                            <td class="text-left vertical-align-middle">
                                                <h5>Title goes here</h5>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad repudiandae, modi, aliquid
                                                    earum id nihil minus tempore, illo libero voluptatibus quae eos temporibus fuga consequatur nam vero
                                                    esse. Recusandae, eos.
                                                </p>
                                            </td>
                                            <td class="vertical-align-middle orange text-center">78%</td>
                                            <td class="vertical-align-middle text-center">Days</td>
                                            <td class="vertical-align-middle text-center">Low</td>
                                            <td class="vertical-align-middle text-center">
                                                <button class="btn  btn-orange btn-lender">Apply Now</button>
                                            </td>
                                        </tr>

                                        <tr class="white-rows">
                                            <td class="text-left"><img src="img/partners/market_place_invoice.png" width="30" alt=""></td>
                                            <td class="text-left vertical-align-middle">
                                                <h5>Title goes here</h5>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad repudiandae, modi, aliquid
                                                    earum id nihil minus tempore, illo libero voluptatibus quae eos temporibus fuga consequatur nam vero
                                                    esse. Recusandae, eos.
                                                </p>
                                            </td>
                                            <td class="vertical-align-middle orange text-center">78%</td>
                                            <td class="vertical-align-middle text-center">Days</td>
                                            <td class="vertical-align-middle text-center">Low</td>
                                            <td class="vertical-align-middle text-center">
                                                <button class="btn btn-lender btn-orange">Apply Now</button>
                                            </td>
                                        </tr>

                                        <tr class="white-rows">
                                            <td class="text-left"><img src="img/partners/market_place_invoice.png" width="30" alt=""></td>
                                            <td class="text-left vertical-align-middle">
                                                <h5>Title goes here</h5>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad repudiandae, modi, aliquid
                                                    earum id nihil minus tempore, illo libero voluptatibus quae eos temporibus fuga consequatur nam vero
                                                    esse. Recusandae, eos.
                                                </p>
                                            </td>
                                            <td class="vertical-align-middle orange text-center">78%</td>
                                            <td class="vertical-align-middle text-center">Days</td>
                                            <td class="vertical-align-middle text-center">Low</td>
                                            <td class="vertical-align-middle text-center">
                                                <button class="btn btn-lender btn-orange">Apply Now</button>
                                            </td>
                                        </tr>

                                        <tr class="white-rows">
                                            <td class="text-left"><img src="img/partners/market_place_invoice.png" width="30" alt=""></td>
                                            <td class="text-left vertical-align-middle">
                                                <h5>Title goes here</h5>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad repudiandae, modi, aliquid
                                                    earum id nihil minus tempore, illo libero voluptatibus quae eos temporibus fuga consequatur nam vero
                                                    esse. Recusandae, eos.
                                                </p>
                                            </td>
                                            <td class="vertical-align-middle orange text-center">78%</td>
                                            <td class="vertical-align-middle text-center">Days</td>
                                            <td class="vertical-align-middle text-center">Low</td>
                                            <td class="vertical-align-middle text-center">
                                                <button class="btn btn-lender btn-orange">Apply Now</button>
                                            </td>
                                        </tr>

                                        <tr class="white-rows">
                                            <td class="text-left"><img src="img/partners/market_place_invoice.png" width="30" alt=""></td>
                                            <td class="text-left vertical-align-middle">
                                                <h5>Title goes here</h5>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad repudiandae, modi, aliquid
                                                    earum id nihil minus tempore, illo libero voluptatibus quae eos temporibus fuga consequatur nam vero
                                                    esse. Recusandae, eos.
                                                </p>
                                            </td>
                                            <td class="vertical-align-middle orange text-center">78%</td>
                                            <td class="vertical-align-middle text-center">Days</td>
                                            <td class="vertical-align-middle text-center">Low</td>
                                            <td class="vertical-align-middle text-center">
                                                <button class="btn btn-lender btn-orange">Apply Now</button>
                                            </td>
                                        </tr>

                                        <tr class="white-rows">
                                            <td class="text-left"><img src="img/partners/market_place_invoice.png" width="30" alt=""></td>
                                            <td class="text-left vertical-align-middle">
                                                <h5>Title goes here</h5>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad repudiandae, modi, aliquid
                                                    earum id nihil minus tempore, illo libero voluptatibus quae eos temporibus fuga consequatur nam vero
                                                    esse. Recusandae, eos.
                                                </p>
                                            </td>
                                            <td class="vertical-align-middle orange text-center">78%</td>
                                            <td class="vertical-align-middle text-center">Days</td>
                                            <td class="vertical-align-middle text-center">Low</td>
                                            <td class="vertical-align-middle text-center">
                                                <button class="btn btn-lender btn-orange">Apply Now</button>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="row" hidden>

                    <div class="col-lg-10 col-lg-offset-1">

                        <div class="row">

                            <div class="col-lg-4 col-md-4" style="padding: 0 35px;">

                                <div class="card lenders" style="border-radius: 15px;margin-top:30px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);">

                                    <div class="card-body text-center" style="padding: 0 20px;">

                                        <img class="circle" style="margin-top: 20px;width:100%;" src="img/partners/Halifax_sq.jpg" alt="Barclays">

                                        <h3 class="rate" style="margin-top:20px;font-weight: 900;color: #000000;">APR 14.6%</h3>

                                        <p style="margin-top:20px;margin-bottom: 20px;"><button class="btn btn-success btn-lg" style="width: 60%">Apply</button></p>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4 col-md-4" style="padding: 0 35px;">

                                <div class="card lenders" style="border-radius: 15px;margin-top:30px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);">

                                    <div class="card-body text-center" style="padding: 0 20px;">

                                        <img class="circle" style="margin-top: 20px;width:100%;" src="img/partners/HSBC_sq.jpg" alt="Barclays">

                                        <h3 class="rate" style="margin-top:20px;font-weight: 900;color: #000000;">APR 14.6%</h3>

                                        <p style="margin-top:20px;margin-bottom: 20px;"><button class="btn btn-success btn-lg" style="width: 60%">Apply</button></p>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4 col-md-4" style="padding: 0 35px;">

                                <div class="card lenders" style="border-radius: 15px;margin-top:30px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);">

                                    <div class="card-body text-center" style="padding: 0 20px;">

                                        <img class="circle" style="margin-top: 20px;width:100%;" src="img/partners/barclays_sq.jpg" alt="Barclays">

                                        <h3 class="rate" style="margin-top:20px;font-weight: 900;color: #000000;">APR 14.6%</h3>

                                        <p style="margin-top:20px;margin-bottom: 20px;"><button class="btn btn-success btn-lg" style="width: 60%">Apply</button></p>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4 col-md-4" style="padding: 0 35px;">

                                <div class="card lenders" style="border-radius: 15px;margin-top:30px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);">

                                    <div class="card-body text-center" style="padding: 0 20px;">

                                        <img class="circle" style="margin-top: 20px;width:100%;" src="img/partners/HSBC_sq.jpg" alt="Barclays">

                                        <h3 class="rate" style="margin-top:20px;font-weight: 900;color: #000000;">APR 14.6%</h3>

                                        <p style="margin-top:20px;margin-bottom: 20px;"><button class="btn btn-success btn-lg" style="width: 60%">Apply</button></p>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4 col-md-4" style="padding: 0 35px;">

                                <div class="card lenders" style="border-radius: 15px;margin-top:30px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);">

                                    <div class="card-body text-center" style="padding: 0 20px;">

                                        <img class="circle" style="margin-top: 20px;width:100%;" src="img/partners/barclays_sq.jpg" alt="Barclays">

                                        <h3 class="rate" style="margin-top:20px;font-weight: 900;color: #000000;">APR 14.6%</h3>

                                        <p style="margin-top:20px;margin-bottom: 20px;"><button class="btn btn-success btn-lg" style="width: 60%">Apply</button></p>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4 col-md-4" style="padding: 0 35px;">

                                <div class="card lenders" style="border-radius: 15px;margin-top:30px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);">

                                    <div class="card-body text-center" style="padding: 0 20px;">

                                        <img class="circle" style="margin-top: 20px;width:100%;" src="img/partners/lloyds_sq.jpg" alt="Barclays">

                                        <h3 class="rate" style="margin-top:20px;font-weight: 900;color: #000000;">APR 14.6%</h3>

                                        <p style="margin-top:20px;margin-bottom: 20px;"><button class="btn btn-success btn-lg" style="width: 60%">Apply</button></p>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="row" style="margin-top: 30px;">

                            <div class="col-sm-12">

                                <div class="dataTables_paginate paging_full_numbers text-center" id="demo-datatables-5_paginate">

                                    <ul class="pagination">

                                        <li class="paginate_button first disabled" id="demo-datatables-5_first">

                                            <a href="#" aria-controls="demo-datatables-5" data-dt-idx="0" tabindex="0">First</a>

                                        </li>

                                        <li class="paginate_button previous disabled" id="demo-datatables-5_previous">

                                            <a href="#" aria-controls="demo-datatables-5" data-dt-idx="1" tabindex="0">«</a>

                                        </li>

                                        <li class="paginate_button active">

                                            <a href="#" aria-controls="demo-datatables-5" data-dt-idx="2" tabindex="0">1</a>

                                        </li>

                                        <li class="paginate_button ">

                                            <a href="#" aria-controls="demo-datatables-5" data-dt-idx="3" tabindex="0">2</a>

                                        </li>

                                        <li class="paginate_button ">

                                            <a href="#" aria-controls="demo-datatables-5" data-dt-idx="4" tabindex="0">3</a>

                                        </li>

                                        <li class="paginate_button ">

                                            <a href="#" aria-controls="demo-datatables-5" data-dt-idx="5" tabindex="0">4</a>

                                        </li>

                                        <li class="paginate_button ">

                                            <a href="#" aria-controls="demo-datatables-5" data-dt-idx="6" tabindex="0">5</a>

                                        </li>

                                        <li class="paginate_button ">

                                            <a href="#" aria-controls="demo-datatables-5" data-dt-idx="7" tabindex="0">6</a>

                                        </li>

                                        <li class="paginate_button next" id="demo-datatables-5_next">

                                            <a href="#" aria-controls="demo-datatables-5" data-dt-idx="8" tabindex="0">»</a>

                                        </li>

                                        <li class="paginate_button last" id="demo-datatables-5_last">

                                            <a href="#" aria-controls="demo-datatables-5" data-dt-idx="9" tabindex="0">Last</a>

                                        </li>

                                    </ul>

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

</body>



</html>