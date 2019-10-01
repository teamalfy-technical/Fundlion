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
    <section class="white-bg relative section-padding" style="background-image: url({{asset('public/pages/assets/img/bg-img/funding_bg.png')}});height: 35rem;background-size: cover;">
        <div class="content">
            <div class="row" style="padding: 18rem 0;">
                <div class="col-lg-12">
                    <h1 class="text-center text-dark">
                        Industry Specific Funding Options
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class="about-us-area clearfix">
        <div class="container" style="padding: 30px 15px;">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-dark">
                        Lorem ipsum dolor sit amet, consectetur
                    </h3>
                    <p class="text-dark">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-lg-3 col-md-3">
                    <div class="card midcards" style="border-radius: 10px;border: 2px solid #7c7d81;">
                        <div class="card-body p-0">
                            <p class="text-center"><img src="{{asset('public/pages/assets/img/partners/HSAC-tp.png')}}" style="width: 100%;padding: 30px;"></p>
                            <p class="m-4 text-dark text-left" style="line-height: 20px;font-weight: 300;"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</b></p>
                            <p class="text-center"><button class="btn btn-success">Read more</button></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="card midcards" style="border-radius: 10px;border: 2px solid #7c7d81;">
                        <div class="card-body p-0">
                            <p class="text-center"><img src="{{asset('public/pages/assets/img/partners/halifax-tp.png')}}" style="width: 100%;padding: 30px;"></p>
                            <p class="m-4 text-dark text-left" style="line-height: 20px;font-weight: 300;"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</b></p>
                            <p class="text-center"><button class="btn btn-success">Read more</button></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="card midcards" style="border-radius: 10px;border: 2px solid #7c7d81;">
                        <div class="card-body p-0">
                            <p class="text-center"><img src="{{asset('public/pages/assets/img/partners/barclays-tp.png')}}" style="width: 100%;padding: 30px;"></p>
                            <p class="m-4 text-dark text-left" style="line-height: 20px;font-weight: 300;"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</b></p>
                            <p class="text-center"><button class="btn btn-success">Read more</button></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="card midcards" style="border-radius: 10px;border: 2px solid #7c7d81;">
                        <div class="card-body p-0">
                            <p class="text-center"><img src="{{asset('public/pages/assets/img/partners/lloyds_tp.png')}}" style="width: 100%;padding: 30px;"></p>
                            <p class="m-4 text-dark text-left" style="line-height: 20px;font-weight: 300;"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</b></p>
                            <p class="text-center"><button class="btn btn-success">Read more</button></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-12 text-center">
                    <button class="btn btn-success">Load more</button>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section style="background-image: url({{asset('public/pages/assets/img/core-img/dotted_box.png')}});height: 80px;background-size: cover;">
    </section>
    <!-- ##### Welcome Area End ##### -->

    <div class="clearfix"></div>

@endsection