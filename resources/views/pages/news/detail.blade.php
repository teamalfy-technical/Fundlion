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
    $hero_title = 'News & Insights';
    $hero_subtitle = 'Bridging the business financing gap in the UK post Brexit.';
    ?>
    @include('pages.layouts.views.components.banner')
    <!-- Hero End -->

    <section style="margin-top: 8.5rem; padding: 1rem;" class="job_details_head">
        <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
            <div class="row">

                <!-- <div class="col-md-3 text-center"> -->
                <div class="card midcards news_card" style="border-radius: 10px;border: 2px solid #7c7d81;" hidden>
                    <div class="card-body text-center p-0">
                        <img class="news_img" src="{{asset('public/pages/assets/img/news-img/gap.jpg')}}" style="max-width: 100%;border-radius: 10px;">
                    </div>
                </div>
                <!-- </div> -->
                <!-- <div class="col-md-8  col-xs-12 details_top_right" style="padding-left: 2.8rem;"> -->

                <div class="">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="news.php">News & Insights</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Read More</li>
                        </ol>
                    </nav>

                    <div id="job_details_head" class="header">

                        <h4 class="mb-0 details_header orange">Bridging the business financing gap in the UK post Brexit </h4>

                    </div>
                </div>

                <div class="card news_page_card mt-20 border-0" style="border-radius: 10px;">
                    <div class="card-body text-center p-0">
                        <img class="news_page_img" src="{{asset('public/pages/assets/img/news-img/bridge.jpg')}}" style="max-width: 100%;border-radius: 10px;">
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </section>
    <script src="{{asset('public/pages/assets/js/news_page.js')}}"></script>

@endsection