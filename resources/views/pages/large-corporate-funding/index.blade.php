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

        <div class="container" style="padding: 30px 15px;">

            <div class="row">

                <div class="col-lg-12">

                    <h3 class="text-dark">

                        Large Corporate Funding
                    </h3>

                    <p class="text-dark">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut enim debitis, nisi repudiandae labore quas,
                        optio dolor iure sapiente odit nesciunt! Itaque assumenda eos eum repudiandae delectus ea maxime deleniti?
                    </p>

                </div>

            </div>

            <hr>
        </div>

    </section>

    <!-- book appointment -->
    <section>
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