<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
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
    </style>
</head>

<body class="layout layout-header-fixed">
    <div class="layout-header">
        <div class="navbar navbar-default">
            <div class="navbar-header">
                <a class="navbar-brand navbar-brand-center" href="index.html">
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
                                <img class="circle" width="36" height="36" src="img/avatar.jpg" alt="Joselyne Gen"> Joselyne Gen
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <!-- <li class="divider"></li> -->
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="login-1.html">Sign out</a></li>
                            </ul>
                        </li>
                        <li class="visible-xs-block">
                            <a href="contacts.html">
                                <span class="icon icon-users icon-lg icon-fw"></span> Contacts
                            </a>
                        </li>
                        <li class="visible-xs-block">
                            <a href="profile.html">
                                <span class="icon icon-user icon-lg icon-fw"></span> Profile
                            </a>
                        </li>
                        <li class="visible-xs-block">
                            <a href="login-1.html">
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
                                                        <small class="truncate">Failed to get available update data. To ensure the proper functioning of your application, update now.</small>
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
                                                        <small class="truncate">A contact detail associated with your account teddy.wilson, has recently changed.</small>
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
                                                        <small class="truncate">There was a failed login attempt from "192.98.19.164" into the account teddy.wilson.</small>
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
                                <li class="breadcrumb-item active" style="color: #FF5722;" aria-current="page">Dashboard</li>
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
                            <li class="sidenav-item active">
                                <a href="dashboard.html" aria-haspopup="true">
                                    <span class="sidenav-icon icon icon-works">&#103;</span>
                                    <span class="sidenav-label">Dashboards</span>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="messages.html">
                                    <span class="sidenav-icon icon icon-works">&#224;</span>
                                    <span class="sidenav-label"> <i class="fa fa-user"></i> Messages</span>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="myloans.html">
                                    <span class="sidenav-icon icon icon-works">&#49;</span>
                                    <span class="sidenav-label">My Loans</span>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="account.html">
                                    <span class="sidenav-icon icon icon-works">&#112;</span>
                                    <span class="sidenav-label">Account</span>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="lenders.html">
                                    <span class="sidenav-icon icon icon-works">&#104;</span>
                                    <span class="sidenav-label">Lenders</span>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="#">
                                    <span class="sidenav-icon icon icon-works">&#99;</span>
                                    <span class="sidenav-label">Reports</span>
                                </a>
                            </li>
                            <li class="sidenav-heading" style="font-size:16px;color: #fff;">HELP</li>
                            <li class="sidenav-item">
                                <a href="#">
                                    <span class="sidenav-icon icon icon-works">&#192;</span>
                                    <span class="sidenav-label">Support</span>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="#">
                                    <span class="sidenav-icon icon icon-works">&#217;</span>
                                    <span class="sidenav-label">How it works</span>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="#">
                                    <span class="sidenav-icon icon icon-works">&#115;</span>
                                    <span class="sidenav-label">Terms of Service</span>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="#">
                                    <span class="sidenav-icon icon icon-works">&#78;</span>
                                    <span class="sidenav-label">Contact Fundlion</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="layout-content">
            <div class="layout-content-body" style="background-color: #e0e0e0;font-weight: 700;">
                <!-- <div class="container"> -->
                <div class="row gutter-xs">
                    <div class="col-lg-10 col-lg-offset-1">
                        <h2 style="color: #000000;font-weight: 900;">Hi Joselyne, <span style="font-weight: 100;">Here is your Dashboard</span></h2>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px;">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="row gutter-xs">
                            <div class="col-lg-2 col-md-2">
                                <div class="card" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
                                    <div class="card-header no-border">
                                        <div class="media text-center">
                                            <div class="media-middle media-center">
                                                <a href="#">
                                                    <img width="32" height="32" src="img/icons/review-icon.png" alt="review">
                                                </a>
                                            </div>
                                            <div class="media-middle media-body">
                                                <a style="color: #494949" href="#">
                                                    <p class="text-dark" style="margin-top: 8px;line-height: normal;">
                                                        Review Existing Loan Application
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="card" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
                                    <div class="card-header no-border">
                                        <div class="media text-center">
                                            <div class="media-middle media-center">
                                                <a href="#">
                                                    <img width="32" height="32" src="img/icons/account-information-icon.png" alt="account">
                                                </a>
                                            </div>
                                            <div class="media-middle media-body">
                                                <a style="color: #494949" href="#">
                                                    <p class="text-dark" style="margin-top: 8px;line-height: normal;">
                                                        Upload Account Information
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="card" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
                                    <div class="card-header no-border">
                                        <div class="media text-center">
                                            <div class="media-middle media-center">
                                                <a href="#">
                                                    <img width="32" height="32" src="img/icons/clipboard-icon.png" alt="account">
                                                </a>
                                            </div>
                                            <div class="media-middle media-body">
                                                <a style="color: #494949" href="#">
                                                    <p class="text-dark" style="margin-top: 8px;line-height: normal;">
                                                        Apply for a New Loan
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="card" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
                                    <div class="card-header no-border">
                                        <div class="media text-center">
                                            <div class="media-middle media-center">
                                                <a href="#">
                                                    <img width="32" height="32" src="img/icons/upload-arrow-icon.png" alt="account">
                                                </a>
                                            </div>
                                            <div class="media-middle media-body">
                                                <a style="color: #494949" href="#">
                                                    <p class="text-dark" style="margin-top: 8px;line-height: normal;">
                                                        Upload Documents
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="card" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
                                    <div class="card-header no-border">
                                        <div class="media text-center">
                                            <div class="media-middle media-center">
                                                <a href="#">
                                                    <img width="32" height="32" src="img/icons/eye-icon.png" alt="account">
                                                </a>
                                            </div>
                                            <div class="media-middle media-body">
                                                <a style="color: #494949" href="#">
                                                    <p class="text-dark" style="margin-top: 8px;line-height: normal;">
                                                        Explore Lenders
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="card bg-success" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
                                    <div class="card-header no-border">
                                        <div class="media text-center">
                                            <div class="media-middle media-center">

                                            </div>
                                            <div class="media-middle media-body">
                                                <a style="color: #ffffff" href="#">
                                                    <p class="text-dark" style="margin-top: 8px;line-height: normal;">
                                                        Set an Appointment with a Fundlion Account manager
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutter-xs" style="margin-top: 30px;">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="card h-100" style="border-radius:20px;background: rgb(74,74,74);background: linear-gradient(0deg, #5a5a5a 0%, #a0a0a0 100%);">
                            <div id="black-card"></div>
                            <div class="card-body">
                                <h4 class="text-center m-0" style="color: #fff;">Loan Application Status</h4>
                                <div class="row">
                                    <div class="col-lg-8 col-lg-offset-2">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label class="col-sm-3 control-label" for="form-control-6" style="color: #fff;line-height: 35px;font-weight: 100;font-size: 15px;">Provider: </label>
                                                        <div class="col-sm-9">
                                                            <select id="form-control-6" class="form-control" style="background-color: #ffffff00;color: #bfbfbf;border: 2px solid #fff;">
                                                                <option value="">Barclays</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="text-center" style="color: #fff;line-height: 30px;font-size: 15px;font-weight: 400;">Loan Amount: £3,000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 30px;">
                                    <div class="col-lg-10 col-lg-offset-1">
                                        <div class="steps">
                                            <ul class="steps-container">
                                                <li style="width:25%;" class="activated">
                                                    <div class="step">
                                                        <div class="step-image"><span></span></div>
                                                        <div class="step-current">Applied</div>
                                                    </div>
                                                </li>
                                                <li style="width:25%;" class="activated">
                                                    <div class="step">
                                                        <div class="step-image"><span></span></div>
                                                        <div class="step-current">Submitted</div>
                                                    </div>
                                                </li>
                                                <li style="width:25%;" class="activated">
                                                    <div class="step">
                                                        <div class="step-image"><span></span></div>
                                                        <div class="step-current">Reviewing</div>
                                                    </div>
                                                </li>
                                                <li style="width:25%;">
                                                    <div class="step">
                                                        <div class="step-image"><span></span></div>
                                                        <div class="step-current">Approved</div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="step-bar" style="width: 65%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gutter-xs" style="margin-top: 30px;">
                    <div class="col-lg-10 col-lg-offset-1">
                        <hr style="margin-bottom: 50px;border: 1px solid #c2c2c2;">
                        <div class="card h-100" style="border-radius:20px;">
                            <div class="card-body">
                                <h4 class="text-center" style="font-weight: 900;font-size: 25px;">See Your Funding Options</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
                                        <form style="margin-top: 30px;">
                                            <div class="input-group" style="margin: 14px 0;">
                                                <span class="input-group-addon">£</span>
                                                <input class="form-control" type="number" placeholder="How much  finance do you need?">
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" style="font-size: 12px;height: 32px;margin: 10px 0">
                                                    <option>What is the finance for?</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" style="font-size: 12px;height: 32px;">
                                                    <option>How long do you need the finance for?</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn bg-success" style="width: 100%; color: #fff;border-radius: 15px;">CONTINUE</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gutter-xs" style="margin-top: 30px;">
                    <div class="col-lg-10 col-lg-offset-1">
                        <hr style="margin-bottom: 50px;border: 1px solid #c2c2c2;">
                        <div class="card h-100" style="border-radius:20px;">
                            <div class="card-body">
                                <h4 class="text-center">Banks & Online Lending Options</h4>
                                <div class="row" style="margin-top: 30px;overflow-x: auto;white-space: nowrap;">
                                    <div class="banks col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                        <div class="card" style="border-radius: 15px;">
                                            <div class="card-image">
                                                <img class="card-img img-responsive" style="box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);border-radius: 15px;" src="img/partners/lloyds.jpg" alt="Lloyds">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banks col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                        <div class="card" style="border-radius: 15px;">
                                            <div class="card-image">
                                                <img class="card-img img-responsive" style="box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);border-radius: 15px;" src="img/partners/HSBC.jpg" alt="HSBC">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banks col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                        <div class="card" style="border-radius: 15px;">
                                            <div class="card-image">
                                                <img class="card-img img-responsive" style="box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);border-radius: 15px;" src="img/partners/Halifax.jpg" alt="Halifax">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banks col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                        <div class="card" style="border-radius: 15px;">
                                            <div class="card-image">
                                                <img class="card-img img-responsive" style="box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);border-radius: 15px;" src="img/partners/Barclays.jpg" alt="Barclays">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banks col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                        <div class="card" style="border-radius: 15px;">
                                            <div class="card-image">
                                                <img class="card-img img-responsive" style="box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);border-radius: 15px;" src="img/partners/lloyds.jpg" alt="Lloyds">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banks col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                        <div class="card" style="border-radius: 15px;">
                                            <div class="card-image">
                                                <img class="card-img img-responsive" style="box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);border-radius: 15px;" src="img/partners/HSBC.jpg" alt="HSBC">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banks col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                        <div class="card" style="border-radius: 15px;">
                                            <div class="card-image">
                                                <img class="card-img img-responsive" style="box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);border-radius: 15px;" src="img/partners/Halifax.jpg" alt="Halifax">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banks col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                        <div class="card" style="border-radius: 15px;">
                                            <div class="card-image">
                                                <img class="card-img img-responsive" style="box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);border-radius: 15px;" src="img/partners/Barclays.jpg" alt="Barclays">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
        <!-- <div class="layout-footer">
        <div class="layout-footer-body">
          <small class="version">Version 1.0.0</small>
          <small class="copyright">2017 &copy; Elephant <a href="http://madebytilde.com/">Made by Tilde</a></small>
        </div>
      </div> -->
    </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
</body>

</html>