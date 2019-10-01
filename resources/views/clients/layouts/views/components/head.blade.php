<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">

    <!-- Title -->
    <title>{{ config('app.name', 'Fundlion') }}</title>
    <!-- Favicon -->
    <!-- <link rel="icon" href="img/core-img/favicon.ico"> -->

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('public/pages/assets/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('public/pages/assets/img/core-img/favicon.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('public/pages/assets/img/core-img/favicon.png')}}" sizes="16x16">
    <link rel="manifest" href="{{asset('public/pages/assets/manifest.json')}}">
    <link rel="mask-icon" href="{{asset('public/pages/assets/safari-pinned-tab.svg')}}" color="#7e7dcf">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="{{asset('public/pages/assets/css/fonts/myriad-pro-cufonfonts-webfont/myriad-pro-style.css')}}">
    <link rel="stylesheet" href="{{asset('public/pages/assets/css/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/pages/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/pages/assets/css/elephant.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/pages/assets/css/application.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/pages/assets/css/step-progress.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/pages/assets/css/fundlion.css')}}">
    <link rel="stylesheet" href="{{asset('public/pages/assets/css/style2.css')}}">
    <link rel="stylesheet" href="{{asset('public/pages/assets/css/style3.css')}}">

    <link rel="stylesheet" href="{{asset('public/pages/assets/fonts/myriad-pro-cufonfonts-webfont/myriad-pro-style.css')}}">

    <!-- Dropzone css -->
    <link href="{{asset("public/pages/assets/css/dropzone-master/dist/dropzone.css")}}" rel="stylesheet" type="text/css" />
    <!-- Dropify css -->
    <link rel="stylesheet" href="{{asset("public/pages/assets/css/dropify/dist/css/dropify.min.css")}}">

    <!-- Lenders Page -->
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
