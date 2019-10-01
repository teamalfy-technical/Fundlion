<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Manage Lenders</title>
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
    <link rel="stylesheet" href="css/fundlion.css">
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
                                                        now.
                                                    </small>
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
                                                        account teddy.wilson, has recently changed.
                                                    </small>
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
                                                        "192.98.19.164" into the account teddy.wilson.
                                                    </small>
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
                            <li class="breadcrumb-item active" style="color: #FF5722;" aria-current="page">My Loans
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
                            <a href="admin_accounts.php" aria-haspopup="true">
                                <span class="sidenav-label">Accounts</span>
                            </a>
                        </li>
                        <li class="sidenav-item active">
                            <a href="manage_lenders.php">
                                <span class="sidenav-label">Manage Lenders</span>
                            </a>
                        </li>
                        <li class="sidenav-item">
                            <a href="myloans.php">
                                <span class="sidenav-label">Messages</span>
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
                    <h2 style="color: #000000;font-weight: 900;">Hi Admin<!-- , <span style="font-weight: 100;">Here
                                are your Loans --></span></h2>
                </div>
            </div>
            <div class="row" style="margin-top:50px;">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="row gutter-xs">
                        <div class="col-lg-6 col-md-6">
                            <button class="btn btn-success">Create New Lender</button>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-sm-5 control-label"
                                       style="text-align: right;font-size: 20px;font-weight: 100;color: #000;">Search
                                    Account</label>
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
            <div class="row" style="margin-top:50px;">
                <div class="col-lg-10 col-lg-offset-1">
                    <!-- <hr style="margin-bottom: 50px;border: 1px solid #c2c2c2;"> -->
                    <div class="row gutter-xs">
                        <div class="col-lg-12">
                            <table class="table table-hover table-borderless" style="background-color: #e0e0e0;">
                                <thead>
                                <tr>
                                    <th class="text-left">Company name</th>
                                    <th class="text-left">Logo</th>
                                    <th class="text-left">Postcode</th>
                                    <th class="text-left">Website</th>
                                    <th class="text-left">Contact</th>
                                    <th class="text-left">Lending Product</th>
                                    <th class="text-left"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="white-rows">
                                    <td class="text-left" style="line-height: 30px;"><b>Pepsodent Ltd</b></td>
                                    <td class="text-left"><img class="img-circle" src="img/0299419341.jpg" style="width: 30px;"></td>
                                    <td class="text-left" style="line-height: 30px;">jeffwind@email.com</td>
                                    <td class="text-left" style="line-height: 30px;">Pepsodent Ltd</td>
                                    <td class="text-left" style="line-height: 30px;">pepsodent.com</td>
                                    <td class="text-left" style="line-height: 30px;">Pepsodent Loans</td>
                                    <td class="text-left" style="line-height: 30px;">
                                        <div class="btn-group dropdown">
                                            <span aria-haspopup="true"
                                                    data-toggle="dropdown"
                                                    style="padding: 5px;">
                                                <i class="icon icon-ellipsis-v icon-lg icon-fw"></i>
                                            </span>
                                            <ul class="dropdown-menu dropdown-menu-right" style="text-align: center">
                                                <button class="btn btn-success">Update info</button>
                                            </ul>
                                        </div>
                                        <span class="expand-account icon icon-plus" data-toggle="collapse"
                                              data-target="#accordion1" class="clickable"></span>
                                    </td>
                                </tr>
                                <td style="padding: 0;" colspan="7">
                                    <div id="accordion1" class="collapse">
                                        <div class="card">
                                            <div class="card-body" style="height: 300px;overflow-y: scroll;">
                                                <div class="row visible-lg">
                                                    <div class="col-lg-5 col-md-5">
                                                        <h5><b>Company Description</b></h5>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5><b>Display info</b></h5>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5><b>Internal use</b></h5>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <h5><b>Note</b></h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Company
                                                            Description</b></h5>
                                                        <textarea class="form-control" rows="3"
                                                                  style="margin-top: 0px; margin-bottom: 0px; height: 100px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </textarea>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Display info</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Internal use</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Note</b></h5>
                                                        <textarea class="form-control" rows="3"
                                                                  style="margin-top: 0px; margin-bottom: 0px; height: 100px;"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Company
                                                            Description</b></h5>
                                                        <p>Company Address</p>
                                                        <h5 style="margin:0;">33 Guild Street Piccadilly Circus
                                                            London,EC1V4XY</h5>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Display info</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Internal use</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Company
                                                            Description</b></h5>
                                                        <p>Customer Service Telephone number</p>
                                                        <h5 style="margin:0;">+44 898 987 7675</h5>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Display info</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Internal use</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-right" style="background-color: #ececec;">
                                                <button class="btn btn-success">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <tr class="white-rows">
                                    <td class="text-left" style="line-height: 30px;"><b>Pepsodent Ltd</b></td>
                                    <td class="text-left"><img class="img-circle" src="img/0299419341.jpg"
                                                               style="width: 30px;"></td>
                                    <td class="text-left" style="line-height: 30px;">jeffwind@email.com</td>
                                    <td class="text-left" style="line-height: 30px;">Pepsodent Ltd</td>
                                    <td class="text-left" style="line-height: 30px;">pepsodent.com</td>
                                    <td class="text-left" style="line-height: 30px;">Pepsodent Loans</td>
                                    <td class="text-left" style="line-height: 30px;">
                                        <div class="btn-group dropdown">
																						<span aria-haspopup="true"
                                                                                              data-toggle="dropdown"
                                                                                              style="padding: 5px;">
																							<i class="icon icon-ellipsis-v icon-lg icon-fw"></i>
																						</span>
                                            <ul class="dropdown-menu dropdown-menu-right" style="text-align: center">
                                                <button class="btn btn-success">Update info</button>
                                            </ul>
                                        </div>
                                        <span class="expand-account icon icon-plus" data-toggle="collapse"
                                              data-target="#accordion2" class="clickable"></span>
                                    </td>
                                </tr>
                                <td style="padding: 0;" colspan="7">
                                    <div id="accordion2" class="collapse">
                                        <div class="card">
                                            <div class="card-body" style="height: 300px;overflow-y: scroll;">
                                                <div class="row visible-lg">
                                                    <div class="col-lg-5 col-md-5">
                                                        <h5><b>Company Description</b></h5>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5><b>Display info</b></h5>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5><b>Internal use</b></h5>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <h5><b>Note</b></h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Company
                                                            Description</b></h5>
                                                        <textarea class="form-control" rows="3"
                                                                  style="margin-top: 0px; margin-bottom: 0px; height: 100px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </textarea>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Display info</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Internal use</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Note</b></h5>
                                                        <textarea class="form-control" rows="3"
                                                                  style="margin-top: 0px; margin-bottom: 0px; height: 100px;"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Company
                                                            Description</b></h5>
                                                        <p>Company Address</p>
                                                        <h5 style="margin:0;">33 Guild Street Piccadilly Circus
                                                            London,EC1V4XY</h5>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Display info</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Internal use</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Company
                                                            Description</b></h5>
                                                        <p>Customer Service Telephone number</p>
                                                        <h5 style="margin:0;">+44 898 987 7675</h5>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Display info</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Internal use</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-right" style="background-color: #ececec;">
                                                <button class="btn btn-success">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <tr class="white-rows">
                                    <td class="text-left" style="line-height: 30px;"><b>Pepsodent Ltd</b></td>
                                    <td class="text-left"><img class="img-circle" src="img/0299419341.jpg"
                                                               style="width: 30px;"></td>
                                    <td class="text-left" style="line-height: 30px;">jeffwind@email.com</td>
                                    <td class="text-left" style="line-height: 30px;">Pepsodent Ltd</td>
                                    <td class="text-left" style="line-height: 30px;">pepsodent.com</td>
                                    <td class="text-left" style="line-height: 30px;">Pepsodent Loans</td>
                                    <td class="text-left" style="line-height: 30px;">
                                        <div class="btn-group dropdown">
																						<span aria-haspopup="true"
                                                                                              data-toggle="dropdown"
                                                                                              style="padding: 5px;">
																							<i class="icon icon-ellipsis-v icon-lg icon-fw"></i>
																						</span>
                                            <ul class="dropdown-menu dropdown-menu-right" style="text-align: center">
                                                <button class="btn btn-success">Update info</button>
                                            </ul>
                                        </div>
                                        <span class="expand-account icon icon-plus" data-toggle="collapse"
                                              data-target="#accordion3" class="clickable"></span>
                                    </td>
                                </tr>
                                <td style="padding: 0;" colspan="7">
                                    <div id="accordion3" class="collapse">
                                        <div class="card">
                                            <div class="card-body" style="height: 300px;overflow-y: scroll;">
                                                <div class="row visible-lg">
                                                    <div class="col-lg-5 col-md-5">
                                                        <h5><b>Company Description</b></h5>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5><b>Display info</b></h5>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5><b>Internal use</b></h5>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <h5><b>Note</b></h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Company
                                                            Description</b></h5>
                                                        <textarea class="form-control" rows="3"
                                                                  style="margin-top: 0px; margin-bottom: 0px; height: 100px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </textarea>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Display info</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Internal use</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Note</b></h5>
                                                        <textarea class="form-control" rows="3"
                                                                  style="margin-top: 0px; margin-bottom: 0px; height: 100px;"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Company
                                                            Description</b></h5>
                                                        <p>Company Address</p>
                                                        <h5 style="margin:0;">33 Guild Street Piccadilly Circus
                                                            London,EC1V4XY</h5>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Display info</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Internal use</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Company
                                                            Description</b></h5>
                                                        <p>Customer Service Telephone number</p>
                                                        <h5 style="margin:0;">+44 898 987 7675</h5>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Display info</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Internal use</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-right" style="background-color: #ececec;">
                                                <button class="btn btn-success">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <tr class="white-rows">
                                    <td class="text-left" style="line-height: 30px;"><b>Pepsodent Ltd</b></td>
                                    <td class="text-left"><img class="img-circle" src="img/0299419341.jpg"
                                                               style="width: 30px;"></td>
                                    <td class="text-left" style="line-height: 30px;">jeffwind@email.com</td>
                                    <td class="text-left" style="line-height: 30px;">Pepsodent Ltd</td>
                                    <td class="text-left" style="line-height: 30px;">pepsodent.com</td>
                                    <td class="text-left" style="line-height: 30px;">Pepsodent Loans</td>
                                    <td class="text-left" style="line-height: 30px;">
                                        <div class="btn-group dropdown">
																						<span aria-haspopup="true"
                                                                                              data-toggle="dropdown"
                                                                                              style="padding: 5px;">
																							<i class="icon icon-ellipsis-v icon-lg icon-fw"></i>
																						</span>
                                            <ul class="dropdown-menu dropdown-menu-right" style="text-align: center">
                                                <button class="btn btn-success">Update info</button>
                                            </ul>
                                        </div>
                                        <span class="expand-account icon icon-plus" data-toggle="collapse"
                                              data-target="#accordion4" class="clickable"></span>
                                    </td>
                                </tr>
                                <td style="padding: 0;" colspan="7">
                                    <div id="accordion4" class="collapse">
                                        <div class="card">
                                            <div class="card-body" style="height: 300px;overflow-y: scroll;">
                                                <div class="row visible-lg">
                                                    <div class="col-lg-5 col-md-5">
                                                        <h5><b>Company Description</b></h5>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5><b>Display info</b></h5>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5><b>Internal use</b></h5>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <h5><b>Note</b></h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Company
                                                            Description</b></h5>
                                                        <textarea class="form-control" rows="3"
                                                                  style="margin-top: 0px; margin-bottom: 0px; height: 100px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </textarea>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Display info</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Internal use</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Note</b></h5>
                                                        <textarea class="form-control" rows="3"
                                                                  style="margin-top: 0px; margin-bottom: 0px; height: 100px;"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Company
                                                            Description</b></h5>
                                                        <p>Company Address</p>
                                                        <h5 style="margin:0;">33 Guild Street Piccadilly Circus
                                                            London,EC1V4XY</h5>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Display info</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Internal use</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Company
                                                            Description</b></h5>
                                                        <p>Customer Service Telephone number</p>
                                                        <h5 style="margin:0;">+44 898 987 7675</h5>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Display info</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Internal use</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-right" style="background-color: #ececec;">
                                                <button class="btn btn-success">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <tr class="white-rows">
                                    <td class="text-left" style="line-height: 30px;"><b>Pepsodent Ltd</b></td>
                                    <td class="text-left"><img class="img-circle" src="img/0299419341.jpg"
                                                               style="width: 30px;"></td>
                                    <td class="text-left" style="line-height: 30px;">jeffwind@email.com</td>
                                    <td class="text-left" style="line-height: 30px;">Pepsodent Ltd</td>
                                    <td class="text-left" style="line-height: 30px;">pepsodent.com</td>
                                    <td class="text-left" style="line-height: 30px;">Pepsodent Loans</td>
                                    <td class="text-left" style="line-height: 30px;">
                                        <div class="btn-group dropdown">
																						<span aria-haspopup="true"
                                                                                              data-toggle="dropdown"
                                                                                              style="padding: 5px;">
																							<i class="icon icon-ellipsis-v icon-lg icon-fw"></i>
																						</span>
                                            <ul class="dropdown-menu dropdown-menu-right" style="text-align: center">
                                                <button class="btn btn-success">Update info</button>
                                            </ul>
                                        </div>
                                        <span class="expand-account icon icon-plus" data-toggle="collapse"
                                              data-target="#accordion5" class="clickable"></span>
                                    </td>
                                </tr>
                                <td style="padding: 0;" colspan="7">
                                    <div id="accordion5" class="collapse">
                                        <div class="card">
                                            <div class="card-body" style="height: 300px;overflow-y: scroll;">
                                                <div class="row visible-lg">
                                                    <div class="col-lg-5 col-md-5">
                                                        <h5><b>Company Description</b></h5>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5><b>Display info</b></h5>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5><b>Internal use</b></h5>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <h5><b>Note</b></h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Company
                                                            Description</b></h5>
                                                        <textarea class="form-control" rows="3"
                                                                  style="margin-top: 0px; margin-bottom: 0px; height: 100px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </textarea>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Display info</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Internal use</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Note</b></h5>
                                                        <textarea class="form-control" rows="3"
                                                                  style="margin-top: 0px; margin-bottom: 0px; height: 100px;"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Company
                                                            Description</b></h5>
                                                        <p>Company Address</p>
                                                        <h5 style="margin:0;">33 Guild Street Piccadilly Circus
                                                            London,EC1V4XY</h5>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Display info</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Internal use</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Company
                                                            Description</b></h5>
                                                        <p>Customer Service Telephone number</p>
                                                        <h5 style="margin:0;">+44 898 987 7675</h5>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Display info</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <h5 class="visible-md visible-sm visible-xs"><b>Internal use</b>
                                                        </h5>
                                                        <label class="custom-control custom-control-success custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox"
                                                                   name="mode">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-right" style="background-color: #ececec;">
                                                <button class="btn btn-success">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                </tbody>
                            </table>
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
<script src="js/vendor.min.js"></script>
<script src="js/elephant.min.js"></script>
<script src="js/application.min.js"></script>
<script>
    $(document).ready(function () {
        $('.expand-account').on('click', function () {
            $(this).toggleClass("icon-minus");
        })
    });
</script>
</body>

</html>
