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
    <link rel="stylesheet" href="{{asset('public/pages/assets/css/style2.css')}}">
    <link rel="stylesheet" href="{{asset('public/pages/assets/css/style3.css')}}">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{asset('public/pages/assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('public/pages/assets/css/fundlion-outter-pages.css')}}">
    <link rel="stylesheet" href="{{asset('public/pages/assets/css/cookiealert.css')}}">


    <!-- <link rel="stylesheet" href="css/samples.css"> -->
    <!-- <link rel="stylesheet" href="toolbarconfigurator/lib/codemirror/neo.css"> -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="{{asset('public/pages/assets/js/jquery.min.js')}}"></script>
    
    <link rel="shortcut icon" href="{{asset("public/pages/assets/img/core-img/favicon.png")}}" type="image/x-icon">
</head>