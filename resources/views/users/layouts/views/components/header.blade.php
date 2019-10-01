<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$url);
$link = end($link_array);
$link = ucwords(str_replace("_"," ",$link));
$link = ucwords(str_replace("-"," ",$link));
?>

<div class="layout-header">
    <div class="navbar navbar-default">
        <div class="navbar-header">
            <a class="navbar-brand navbar-brand-center" href="{{route('users.dashboard')}}">
                <img class="navbar-brand-logo" src="{{asset('public/pages/assets/img/core-img/logo2.png')}}" alt="fundlion">
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
              <img class="ellipsis-object" width="32" height="32" src="{{asset('public/pages/assets/img/0180441436.jpg')}}" alt="Teddy Wilson">
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
                        <h4 class="navbar-text text-center">Hi, {{$session->name}}</h4>
                    </li>

                    <li class="dropdown hidden-xs">
                        <button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
                            @if($session->avatar !== null)<img class="circle" src="{{asset("storage/app/users/$session->id/avatar/$session->avatar")}}" width="36" height="36" alt="" />
                            @else <img alt="" class="circle" src="{{asset("public/pages/assets/img/default/user-img.png")}}" width="36" height="36" /> @endif
                            <?php
                                $names = explode(" ",$session->name);
                                $name = $names[0];
                            ?>
                            <span>&nbsp;{{ $name }} ({{$admin->userRole['role']}})</span>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
{{--                            <li>--}}
{{--                                <a href="upgrade.html">--}}
{{--                                    <h5 class="navbar-upgrade-heading">--}}
{{--                                        Upgrade Now--}}
{{--                                        <small class="navbar-upgrade-notification">You have 15 days left in your trial.</small>--}}
{{--                                    </h5>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="divider"></li>--}}
{{--                            <li class="navbar-upgrade-version">Version: 1.0.0</li>--}}
                            {{-- <li><a href="contacts.html">Contacts</a></li> --}}
                            <li><a href="{{route('users.account')}}">Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="{{route('users.logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a></li>
                        </ul>
                    </li>
                    <li class="visible-xs-block">
                        <a href="contacts.html">
                            <span class="icon icon-users icon-lg icon-fw"></span>Contacts
                        </a>
                    </li>
                    <li class="visible-xs-block">
                        <a href="{{route('users.account',$session->id)}}">
                            <span class="icon icon-user icon-lg icon-fw"></span>Profile
                        </a>
                    </li>
                    <li class="visible-xs-block">
                        <a href="{{route('users.logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="icon icon-power-off icon-lg icon-fw"></span>Sign out
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
                    <span class="badge badge-primary pull-right">7</span>Notifications
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
                    
                </ul>
                <form id="logout-form" action="{{ route('users.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <div class="title-bar">
                    <!-- <h1 class="title-bar-title">
                      <span class="d-ib">Dasxxhboard</span>
                    </h1> -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" style="margin: 10px 0px 10px 0px;font-size: 15px;">
                            <li class="breadcrumb-item"><a href="#" class="text-muted">Your Profile</a></li>
                            <li class="breadcrumb-item active" style="color: #FF5722;" aria-current="page">{{$link}}</li>
                        </ol>
                    </nav>
                </div>
            </nav>
        </div>
    </div>
</div>
