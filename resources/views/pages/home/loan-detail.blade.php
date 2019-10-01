<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$url);
$link = end($link_array);
$link = ucwords(str_replace("_"," ",$link));
?>

@extends('pages.layouts.views.layout')
@section('title', "$link :: Fund Lion")
@section('content')

    <!-- ##### Welcome Area Start ##### -->
    <!-- hero -->
    <!-- Hero start -->
    <?php
    $hero_title = "$loanDetail->title LOAN DETAILS";
    $hero_subtitle = 'Loan title and description';
    ?>
{{--    @include('pages.layouts.views.components.banner')--}}

    <section style="margin-top: 8.5rem; padding: 1rem;" class="job_details_head">
        <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
            <div class="row">

                <div class="col-md-3 text-center">
                    <div class="card midcards news_card" style="border-radius: 10px;border: 2px solid #7c7d81;">
                        <div class="card-body text-center p-0">
                            <img class="news_img" src="{{asset("storage/app/cms/$loanDetail->img")}}" style="max-width: 100%;border-radius: 10px;">
                        </div>
                    </div>
                    <!-- <img class="card-img-top" src="img/3476962581.jpg" alt="Card image cap" style="height: 12rem; border-radius: 6rem;"> -->
                </div>
                <div class="col-md-8  col-xs-12 details_top_right" style="padding-left: 2.8rem;">

                    <div class="details_head_text">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./lending_products.php">Lending Products</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$loanDetail->title}} Details</li>
                            </ol>
                        </nav>

                        <div id="job_details_head" class="header">
                            <h1 class="mb-0 details_header">{{$loanDetail->title}}</h1>
                        </div>
                        <!-- <div class="card-text">
                            <div>
                                <i class="fa fa-calendar orange"></i> 3-4 October 2019
                            </div>
                            <div class="">
                                <i class="fa fa-map-marker orange fa-lg"></i> IOD, London
                            </div>
                            <div>
                                <a href="https://fundlion.com" target="__blank">
                                    <i class="fa fa-link orange"></i> https://fundlion.com
                                </a>
                            </div>
                        </div> -->
                        <a href="#" class="btn btn-success mt-10">Apply Now</a>
                        <a href="#" class="btn btn-success mt-10">Set An Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row mt-30">
                <div class="col-md-8">
                    <div class="card-title"><b>Loan Description</b></div>
                    <p class="text-dark">
                        {{$loanDetail->description}}
                    </p>

                    <div class="row mb-20">
                        <div class="col details_head_text text-md-right">
                            <a href="#" class="btn btn-success mt-10">Apply Now</a>
                            <a href="#" class="btn btn-success mt-10">Set An Appointment</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-md-offset-1 col-sm-12 upcoming_events_text">
                    <div class="row px-3">
                        <div class="col btn btn-dark" style="cursor:unset;">
                            More Loan Products
                        </div>
                    </div>
                    <div class="row">
                        <div class="col small">
                            <hr class="hr">
                            <a href="./small_business_loans.php" class="text-dark">
                                <h6 class="text-dark orange right_event_heading">Small Business Loans</h6>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col small">
                            <hr class="hr">
                            <a href="./lending_products.php" class="text-dark">
                                <h6 class="text-dark orange right_event_heading">Lending Products</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection