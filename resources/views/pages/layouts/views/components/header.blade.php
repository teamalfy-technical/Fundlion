<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$url);
$link = end($link_array);
//$link = strtolower($link);
//$link = ucwords(str_replace("_"," ",$link));

  $general_data = DB::table('fl_cms_general')->where('id', 1)->first();  

?>

<header class="header-area fadeInDown" data-wow-delay="0.2s" style="box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);">
    <div class="classy-nav-container light breakpoint-off">
        <div class="container">

            <!-- Classy Menu -->
            <nav class="classy-navbar light justify-content-between" id="dreamNav">

                <!-- Logo -->
                <a class="nav-brand light" href="{{route('pages.home')}}"><img src="{{asset("public/pages/assets/img/core-img/$general_data->logo")}}" alt="logo"> </a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler demo">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>


                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul id="nav mr-5">
                            <li><a href="index/#howitworksview">HOW IT WORKS</a></li>
                            <li><a href="{{route('clients.login')}}">SIGN IN</a></li>
                            <li><a href="{{route('clients.register')}}">SIGN UP</a></li>
                        </ul>

                        <ul class="nav d-xs-block d-sm-block d-md-block d-lg-none d-xl-none">
                            <!-- <li><a href="aboutus.html">About us</li> -->
                            <li class="w-100">
                                <a href="#." class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">About Us</a>
                                <ul class="dropdown-menu ">
                                    <li><a href="{{route('pages.about')}}">About Us</a></li>
                                    <li><a href="{{route('pages.helping-small-business')}}">Helping Small Businesses Grow</a></li>
                                    <li class=""><a class="w-100" href="{{route('pages.team')}}">Meet Our Team</a></li>
                                    <li class=""><a class="w-100" href="{{route('pages.news')}}">News and Insights</a></li>
                                    <li class=""><a class="w-100" href="{{route('pages.careers')}}">Careers</a></li>
                                    <li class=""><a class="w-100" href="{{route('pages.events')}}">Events</a></li>
                                    <li class=""><a class="w-100" href="{{route('pages.investor-relations')}}">Investor Relations</a></li>
                                    <li class=""><a class="w-100" href="{{route('pages.contact')}}">Contact Us</a></li>
                                </ul>
                            </li>

                            <li class="w-100">
                                <a href="#." class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Small Business Loans</a>
                                <ul class="dropdown-menu ">
                                    <li><a href="{{route('pages.small-business-loans')}}">Small Business Loans</a></li>
                                    <li><a href="{{route('pages.lending-products')}}.php">Lending Products</a></li>
                                    <li class=""><a class="w-100" href="#howitworksview">How it Works?</a></li>
                                    <li class=""><a class="w-100" href="{{route('pages.industry-specific')}}">Industry Specific Funding Options</a></li>
                                    <li class=""><a class="w-100" href="{{route('pages.faq')}}">Support and FAQ's?</a></li>
                                </ul>
                            </li>
                            <li class="w-100"><a href="#about">Large Corporate Funding</a></li>
                            <li class="w-100"><a href="#about">Banking & Lending partnership</a></li>
                            <li class="w-100"><a href="#about">Introducer & Brokers</a></li>
                        </ul>

                        <!-- Button -->
                        <a href="{{route('clients.register')}}" class="btn login-btn m-2" style="border-radius: 18px;background-color: #333;">Apply now</a>
                        <a href="{{route('pages.appointment')}}" class="btn login-btn m-2" style="margin-left: 10px; border-radius: 18px;background-color: #333;">Set an appointment</a>
                    </div>

                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>

    <div class="topnav d-none d-lg-block d-xl-block">
        <div class="container">
            <div class="topnav-right">

                <ul>
                    <li class="d-inline">
                        <a href="#." class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown-menu">About Us <b class="caret"></b></a>
                        <ul class="dropdown-menu multi-level">
                            <li><a class="w-100" href="{{route('pages.about')}}">About Us</a></li>
                            <li><a class="w-100" href="{{route('pages.helping-small-business')}}">Helping Small Businesses Grow</a></li>
                            <li><a class="w-100" href="{{route('pages.team')}}">Meet Our Team</a></li>
                            <li><a class="w-100" href="{{route('pages.news')}}">News and Insights</a></li>
                            <li><a class="w-100" href="{{route('pages.careers')}}">Careers</a></li>
                            <li><a class="w-100" href="{{route('pages.events')}}">Events</a></li>
                            <li><a class="w-100" href="{{route('pages.investor-relations')}}">Investor Relations</a></li>
                            <li><a class="w-100" href="{{route('pages.contact')}}">Contact Us</a></li>
                        </ul>
                    </li>

                    <li class="d-inline">
                        <a href="#." class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Small Business Loans</a>
                        <ul class="dropdown-menu ">
                            <li><a class="w-100" href="{{route('pages.small-business-loans')}}">Small Business Loans</a></li>
                            <li><a class="w-100" href="{{route('pages.lending-products')}}">Lending Products</a></li>
                            <li><a class="w-100" href="#howitworksview">How it Works?</a></li>
                            <li><a class="w-100" href="{{route('pages.industry-specific')}}">Industry Specific Funding Options</a></li>
                            <li><a class="w-100" href="{{route('pages.faq')}}">Support and FAQ's?</a></li>
                        </ul>
                    </li>

                    <li class="d-inline">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Large Corporate Funding</a>
                        <ul class="dropdown-menu ">
                            <li><a class="w-100" href="{{route('pages.large-corporate-funding')}}">Large Corporate Funding</a></li>
                            <li><a class="w-100" href="{{route('pages.investing-in-the-future')}}">Investing in the Future</a></li>
                        </ul>

                    </li>
                    <li class="d-inline">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Banking & Lending Partnership</a>
                        <ul class="dropdown-menu ">
                            <li><a class="w-100" href="{{route('pages.banking-and-lending-partnership')}}">Banking & Lending Partnership</a></li>
                            <li><a class="w-100" href="{{route('pages.become-a-lending-partner')}}">Become a Fundlion Lending partnership</a></li>
                        </ul>
                    </li>
                    <li class="d-inline">
                        <a href="{{route('pages.introducers-and-brokers')}}">Introducers & Brokers</a>
                    </li>

                </ul>

            </div>
        </div>
    </div>
</header>