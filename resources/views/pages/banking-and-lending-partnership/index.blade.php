<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$url);
$link = end($link_array);
$link = ucwords(str_replace("_"," ",$link));
?>

@extends('pages.layouts.views.layout')
@section('title', "$link :: Fund Lion")
@section('content')

    <!-- Hero start -->
    <?php
        use Illuminate\Support\Facades\DB;
    $link = end($link_array);
    $home_page_data = DB::table('fl_cms_pages')->where('name', $link)->first();
    $general_data = DB::table('fl_cms_general')->where('id', 1)->first();    
    $hero_title = $home_page_data->banner_title;
    @$banner_pic = @$home_page_data->banner_pic;
    $hero_subtitle = $home_page_data->banner_text; 
    ?>
    @include('pages.layouts.views.components.banner')
    <!-- Hero End -->
    <!-- body -->

    <section class="about-us-area clearfix">

<!--         <div class="container" style="padding: 30px 15px;">

            <div class="row">

                <div class="col-lg-12">

                    <h3 class="text-dark">

                        Banking And Lending Partnership
                    </h3>

                    <p class="text-dark">
                        Description goes here. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque pariatur inventore, ex, autem ullam esse id enim numquam modi voluptatum
                        assumenda consectetur laboriosam placeat exercitationem quas aut aspernatur soluta consequuntur!

                    </p>

                </div>

            </div>

        </div> -->

        <?php echo htmlspecialchars_decode(stripslashes(urldecode( $home_page_data->content) ));  ?> 
    </section>

    <!-- Lending partners -->
    <section class="about-us-area clearfix">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="text-left text-dark">Lending Partners</h3>
                    <p class="text-dark">
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type
                    </p>
                </div>
            </div>
            <div id="howitworks" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#howitworks" data-slide-to="0" class="active"></li>
                    <li data-target="#howitworks" data-slide-to="1"></li>
                    <li data-target="#howitworks" data-slide-to="2"></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active p-5">
                        <div class="row">
                            <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 mt-15">
                                <div class="card midcards">
                                    <div class="card-body text-center">
                                        <img src="{{asset('public/pages/assets/img/partners/Barclays.jpg')}}" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 mt-15">
                                <div class="card midcards">
                                    <div class="card-body text-center">
                                        <img src="{{asset('public/pages/assets/img/partners/HSBC.jpg')}}" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 mt-15">
                                <div class="card midcards">
                                    <div class="card-body text-center">
                                        <img src="{{asset('public/pages/assets/img/partners/Halifax.jpg')}}" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 mt-15">
                                <div class="card midcards">
                                    <div class="card-body text-center">
                                        <img src="{{asset('public/pages/assets/img/partners/lloyds.jpg')}}" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 mt-15">
                                <div class="card midcards">
                                    <div class="card-body text-center">
                                        <img src="{{asset('public/pages/assets/img/partners/Barclays.jpg')}}" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 mt-15">
                                <div class="card midcards">
                                    <div class="card-body text-center">
                                        <img src="{{asset('public/pages/assets/img/partners/Barclays.jpg')}}" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 mt-15">
                                <div class="card midcards">
                                    <div class="card-body text-center">
                                        <img src="{{asset('public/pages/assets/img/partners/HSBC.jpg')}}" style="width: 100%">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 mt-15">
                                <div class="card midcards">
                                    <div class="card-body text-center">
                                        <img src="{{asset('public/pages/assets/img/partners/Halifax.jpg')}}" style="width: 100%">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 mt-15">
                                <div class="card midcards">
                                    <div class="card-body text-center">
                                        <img src="{{asset('public/pages/assets/img/partners/lloyds.jpg')}}" style="width: 100%">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 mt-15">
                                <div class="card midcards">
                                    <div class="card-body text-center">
                                        <img src="{{asset('public/pages/assets/img/partners/Barclays.jpg')}}" style="width: 100%">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item p-5">

                        <div class="row">

                            <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 mt-15">
                                <div class="card midcards">
                                    <div class="card-body text-center">
                                        <img src="{{asset('public/pages/assets/img/partners/Barclays.jpg"')}} style="width: 100%">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 mt-15">
                                <div class="card midcards">
                                    <div class="card-body text-center">
                                        <img src="{{asset('public/pages/assets/img/partners/HSBC.jpg')}}" style="width: 100%">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 mt-15">
                                <div class="card midcards">
                                    <div class="card-body text-center">
                                        <img src="{{asset('public/pages/assets/img/partners/Halifax.jpg')}}" style="width: 100%">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 mt-15">
                                <div class="card midcards">
                                    <div class="card-body text-center">
                                        <img src="{{asset('public/pages/assets/img/partners/lloyds.jpg')}}" style="width: 100%">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 mt-15">
                                <div class="card midcards">
                                    <div class="card-body text-center">
                                        <img src="{{asset('public/pages/assets/img/partners/Barclays.jpg')}}" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 mt-15">
                                <div class="card midcards">
                                    <div class="card-body text-center">
                                        <img src="{{asset('public/pages/assets/img/partners/Barclays.jpg')}}" style="width: 100%">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 mt-15">

                                <div class="card midcards">

                                    <div class="card-body text-center">

                                        <img src="{{asset('public/pages/assets/img/partners/HSBC.jpg')}}" style="width: 100%">

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-2 col-md-2 mt-15">

                                <div class="card midcards">

                                    <div class="card-body text-center">

                                        <img src="{{asset('public/pages/assets/img/partners/Halifax.jpg')}}" style="width: 100%">

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-2 col-md-2 mt-15">

                                <div class="card midcards">

                                    <div class="card-body text-center">

                                        <img src="{{asset('public/pages/assets/img/partners/lloyds.jpg')}}" style="width: 100%">

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-2 col-md-2 mt-15">

                                <div class="card midcards">

                                    <div class="card-body text-center">

                                        <img src="{{asset('public/pages/assets/img/partners/Barclays.jpg')}}" style="width: 100%">

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="carousel-item p-5">

                        <div class="row">

                            <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 mt-15">

                                <div class="card midcards">

                                    <div class="card-body text-center">

                                        <img src="{{asset('public/pages/assets/img/partners/Barclays.jpg')}}" style="width: 100%">

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-2 col-md-2 mt-15">

                                <div class="card midcards">

                                    <div class="card-body text-center">

                                        <img src="{{asset('public/pages/assets/img/partners/HSBC.jpg')}}" style="width: 100%">

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-2 col-md-2 mt-15">

                                <div class="card midcards">

                                    <div class="card-body text-center">

                                        <img src="{{asset('public/pages/assets/img/partners/Halifax.jpg')}}" style="width: 100%">

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-2 col-md-2 mt-15">

                                <div class="card midcards">

                                    <div class="card-body text-center">

                                        <img src="{{asset('public/pages/assets/img/partners/lloyds.jpg')}}" style="width: 100%">

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-2 col-md-2 mt-15">

                                <div class="card midcards">

                                    <div class="card-body text-center">

                                        <img src="{{asset('public/pages/assets/img/partners/Barclays.jpg')}}" style="width: 100%">

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="row mt-4">

                            <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 mt-15">

                                <div class="card midcards">

                                    <div class="card-body text-center">

                                        <img src="{{asset('public/pages/assets/img/partners/Barclays.jpg')}}" style="width: 100%">

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-2 col-md-2 mt-15">

                                <div class="card midcards">

                                    <div class="card-body text-center">

                                        <img src="{{asset('public/pages/assets/img/partners/HSBC.jpg')}}" style="width: 100%">

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-2 col-md-2 mt-15">

                                <div class="card midcards">

                                    <div class="card-body text-center">

                                        <img src="{{asset('public/pages/assets/img/partners/Halifax.jpg')}}" style="width: 100%">

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-2 col-md-2 mt-15">

                                <div class="card midcards">

                                    <div class="card-body text-center">

                                        <img src="{{asset('public/pages/assets/img/partners/lloyds.jpg')}}" style="width: 100%">

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-2 col-md-2 mt-15">

                                <div class="card midcards">

                                    <div class="card-body text-center">

                                        <img src="{{asset('public/pages/assets/img/partners/Barclays.jpg')}}" style="width: 100%">

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Left and right controls -->

                <a class="carousel-control-prev" href="#howitworks" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>

                <a class="carousel-control-next" href="#howitworks" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>

        </div>

    </section>

    <!-- book appointment -->
    <section class="mt-50">
        <div class="container">
            <h3 class="text-dark body_head">
                ONLINE APPOINTMENTS
            </h3>

            <hr class="hr">

            <div class="row">
                <div class="col-md-6">
                    <div class="card-block event_body">
                        <h5 class="card-title news_heading">Business Loans & Corporate Lending</h5>
                        <div class="card-text">
                            <div>
                                <i class="fa fa-calendar orange"></i> 30 min | Free
                            </div>
                            <div class="">
                                <i class="fa fa-map-marker orange fa-lg"></i> Olympia, London
                            </div>
                        </div>
                        <div class="card-text event_text">
                            Conference call to discuss your business financing requirements.
                        </div>

                    </div>
                </div>
                <div class="col-md-6 display-table">
                    <div class="text-center display-table-cell">
                        <a href="{{route('pages.appointment')}}" class="btn btn-orange mt-20">Book</a>
                    </div>
                </div>
            </div>

            <hr class="hr">

            <div class="row">
                <div class="col-md-6">
                    <div class="card-block event_body">
                        <h5 class="card-title news_heading">Business Loans & Corporate Lending</h5>
                        <div class="card-text">
                            <div>
                                <i class="fa fa-calendar orange"></i> 30 min | Free
                            </div>
                            <div class="">
                                <i class="fa fa-map-marker orange fa-lg"></i> Olympia, London
                            </div>
                        </div>
                        <div class="card-text event_text">
                            Conference call to discuss your business financing requirements.
                        </div>

                    </div>
                </div>
                <div class="col-md-6 display-table">
                    <div class="text-center display-table-cell">
                        <a href="{{route('pages.appointment')}}" class="btn btn-orange mt-20">Book</a>
                    </div>
                </div>
            </div>

            <hr class="hr">

            <div class="row">
                <div class="col-md-6">
                    <div class="card-block event_body">
                        <h5 class="card-title news_heading">Business Loans & Corporate Lending</h5>
                        <div class="card-text">
                            <div>
                                <i class="fa fa-calendar orange"></i> 30 min | Free
                            </div>
                            <div class="">
                                <i class="fa fa-map-marker orange fa-lg"></i> Olympia, London
                            </div>
                        </div>
                        <div class="card-text event_text">
                            Conference call to discuss your business financing requirements.
                        </div>

                    </div>
                </div>
                <div class="col-md-6 display-table">
                    <div class="text-center display-table-cell">
                        <a href="{{route('pages.appointment')}}" class="btn btn-orange mt-20">Book</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection