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
    $hero_title = 'Careers';
    $hero_subtitle = 'Career Detail';
    ?>
{{--    @include('pages.layouts.views.components.banner')--}}
    <!-- Hero End -->

    <section style="margin-top: 8.5rem; padding: 1rem;" class="job_details_head">
        <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
            <div class="row">
                <div class="col-md-3 text-center">
                    <img class="card-img-top" src="{{asset("public/pages/assets/img/$careerCategory->img")}}" alt="Card image cap" style="height: 12rem; border-radius: 6rem;">
                </div>
                <div class="col-md-8  col-xs-12 details_top_right" style="padding-left: 2.8rem;">
                    <?php
                    $category = strtolower(preg_replace('/\s+/', '-', $careerCategory->title));
                    $title = strtolower(preg_replace('/\s+/', '-', $career->title));
                    ?>
                    <div style="margin-top:3rem;" class="">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('pages.careers')}}">Careers</a></li>
                                <li class="breadcrumb-item"><a href="{{route('pages.careers.details',['category'=>$category, 'title'=>$title])}}">Open Positions</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$careerCategory->title}}</li>
                            </ol>
                        </nav>

                        <div id="job_details_head" class="header">

                            <h1 class="mb-0 details_header">{{$career->title}}</h1>
                            <!-- <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active"><a href="#">Field Agent</a></li>
                                </ol>
                            </nav> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row mt-50">
                <div class="col btn-apply-job">
                    <a class="cta-primary cta-combo__primary" title="Learn More" href="#" data-js-primary-cta="" style="color: #fff;

                background-color: #d63d01;

                border-color: #d63d01;

                display: inline-block;

                padding: .875rem 1.5rem;

                padding: calc(.875rem - 1px) 1.5rem;

                font-size: 1.25rem;

                line-height: 1;

                text-align: center;

                text-decoration: none;

                vertical-align: middle;

                cursor: pointer;

                border-style: solid;

                border-width: 1px;

                margin-right: .5rem;

                border-radius: .5rem;

                transition: all .1s ease-in;">

                        Apply for this Job

                    </a>
                </div>
            </div>

            <div class="row mt-30">
                <div class="col">
                    <p>
                        {{$career->description}}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('public/pages/assets/js/careers.js')}}"></script>
@endsection