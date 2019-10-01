<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>{{ config('app.name', 'Fundlion') }}</title>
    <!-- Favicon -->
    <!-- <link rel="icon" href="img/core-img/favicon.ico"> -->

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('public/pages/assets/css/style.css')}}">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{asset('public/pages/assets/css/responsive.css')}}">

    <link rel="icon" type="image/png" href="{{asset('public/pages/assets/img/core-img/favicon.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('public/pages/assets/img/core-img/favicon.png')}}" sizes="16x16">

    <style>
        .topnav {

            overflow: hidden;

            background-color: rgb(221, 219, 219);

        }



        .topnav a {

            float: left;

            text-align: center;

            padding: 14px 16px;

            text-decoration: none;

            font-size: 12px;

            color: rgb(213, 61, 0);

        }



        .topnav a:hover {

            background-color: #ddd;

            color: black;

        }



        .topnav a.active {

            background-color: #4CAF50;

            color: white;

        }



        .topnav-right {

            float: right;

        }



        .message-navigation ul li {

            border-right: 1px solid #d63d01;

            height: 100%;

            font-weight: 600;

            font-size: 14px;

        }



        .message-navigation ul li a {

            padding: 0 10px;

            color: #d63d01 !important;

            cursor: pointer;

        }



        .message-navigation ul li a:hover {

            text-decoration: underline;

            color: #ff0000;

            background-color: #fff;

        }



        .message-navigation ul li:last-of-type {

            border-right: none;

        }



        .message-navigation ul ul li {

            border-right: none;

        }
    </style>
</head>