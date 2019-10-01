<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$url);
$link = end($link_array);
$link = ucwords(str_replace("_"," ",$link));

use Illuminate\Support\Facades\DB;

 $home_page_data = DB::table('fl_cms_pages')->where('name', 'homepage')->first();
  $general_data = DB::table('fl_cms_general')->where('id', 1)->first();

      $hero_title = $home_page_data->banner_title;
    @$banner_pic = @$home_page_data->banner_pic;
    $hero_subtitle = $home_page_data->banner_text;
?>

@extends('pages.layouts.views.layout')
@section('title', "$link :: Fund Lion")
@section('content')

    <!-- ##### Welcome Area Start ##### -->
    <!-- hero -->
    <!-- Hero start -->



    @include('pages.layouts.views.components.banner')

    <!-- Hero End -->
    <!-- ##### Welcome Area End ##### -->
    {{-- <section class="about-us-area clearfix" hidden>

        <div class="container" style="padding: 30px 15px;">

            <div class="row">

                <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 mt-15">

                    <div class="card midcards h-100">

                        <div class="card-body text-center">

                            <p><img src="{{asset('public/pages/assets/img/bg-img/phone-receiver.png')}}" style="width: 25px;"></p>

                            <p class="m-0 text-dark" style="line-height: 15px;"><b>Apply now</b></p>

                            <p class="m-0" style="color:#d63d01;line-height: 25px;">07479546755</p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-2 col-md-2 mt-15">

                    <div class="card midcards h-100">

                        <div class="card-body text-center">

                            <p><img src="{{asset('public/pages/assets/img/bg-img/calendar.png')}}" style="width: 25px;"></p>

                            <p class="m-0 text-dark" style="line-height: 15px;"><b>Set an appointment</b></p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-2 col-md-2 mt-15">

                    <div class="card midcards h-100">

                        <div class="card-body text-center">

                            <p><img src="{{asset('public/pages/assets/img/bg-img/funds.png')}}" style="width: 30px;"></p>

                            <p class="m-0 text-dark" style="line-height: 15px;"><b>Cash advance</b></p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-2 col-md-2 mt-15">

                    <div class="card midcards h-100">

                        <div class="card-body text-center">

                            <p style="margin-bottom: 6px;"><img src="{{asset('public/pages/assets/img/bg-img/car.png')}}" style="width: 40px;"></p>

                            <p class="m-0 text-dark" style="line-height: 15px;"><b>Car Loan</b></p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-2 col-md-2 mt-15">

                    <div class="card midcards h-100">

                        <div class="card-body text-center">

                            <p><img src="{{asset('public/pages/assets/img/bg-img/house.png')}}" style="width: 30px;"></p>

                            <p class="m-0 text-dark" style="line-height: 15px;"><b>Property Loan</b></p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section> --}}

    <!-- body -->
    <section>
        <div class="container" style="padding: 30px 15px;">
            <div id="howitworks" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#howitworks" data-slide-to="0" class="active"></li>
                    <li data-target="#howitworks" data-slide-to="1"></li>
                    <!-- <li data-target="#howitworks" data-slide-to="2"></li> -->
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active p-5">

                        <div class="row">

                        @foreach ($loans->slice(0, 5) as $loan)
                          <?php $title = strtolower(preg_replace('/\s+/', '-', $loan->title));?>
                            <div class="col-lg-2 col-md-2 mt-15 col-loan">
                                <a href="{{route('pages.loans.details',$title)}}" class="card midcards h-100 loan_cards">
                                    <div class="card-body text-center">
                                    
                                        <p><img src="{{asset("storage/app/cms/$loan->img")}}" class="icon_size"></p>
                                        <p class="m-0 text-dark" style="line-height: 15px;">{{$loan->title}}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                        </div>

                        <div class="row mt-4">
                            
                            @foreach ($loans->slice(5, 5) as $loan)
                            <?php $title = strtolower(preg_replace('/\s+/', '-', $loan->title));?>
                              <div class="ccol-lg-2 col-md-2 mt-15 col-loan">
                                  <a href="{{route('pages.loans.details',$title)}}" class="card midcards h-100 loan_cards">
                                      <div class="card-body text-center">
                                          <p><img src="{{asset("storage/app/cms/$loan->img")}}" class="icon_size"></p>
                                          <p class="m-0 text-dark" style="line-height: 15px;">{{$loan->title}}</p>
                                      </div>
                                  </a>
                              </div>
                          @endforeach

                        </div>
                    </div>

                    <div class="carousel-item p-5">
                        <div class="row">

                        @foreach ($loans->slice(10, 5) as $loan)
                          <?php $title = strtolower(preg_replace('/\s+/', '-', $loan->title));?>
                            <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 mt-15 col-loan">
                                <a href="{{route('pages.loans.details',$title)}}" class="card midcards h-100 loan_cards">
                                    <div class="card-body text-center">
                                        <p><img src="{{asset("public/pages/assets/$loan->img")}}" class="icon_size"></p>
                                        <p class="m-0 text-dark" style="line-height: 15px;">{{$loan->title}}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                        </div>

                        <div class="row mt-4">

                        @foreach ($loans->slice(15, 5) as $loan)
                          <?php $title = strtolower(preg_replace('/\s+/', '-', $loan->title));?>
                            <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 mt-15 col-loan">
                                <a href="{{route('pages.loans.details',$title)}}" class="card midcards h-100 loan_cards">
                                    <div class="card-body text-center">
                                        <p><img src="{{asset("public/pages/assets/$loan->img")}}" class="icon_size"></p>
                                        <p class="m-0 text-dark" style="line-height: 15px;">{{$loan->title}}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                        </div>

                    </div>
           
                </div>

                <!-- Left and right controls -->

                <a class="carousel-control-prev w-2" href="#howitworks" data-slide="prev">

                    <span class="carousel-control-prev-icon orange"></span>

                </a>

                <a class="carousel-control-next w-2" href="#howitworks" data-slide="next">

                    <span class="carousel-control-next-icon"></span>

                </a>

            </div>
        </div>
    </section>

    <script src="{{asset('public/pages/assets/js/index.js')}}"></script>
    <script src="{{asset('public/pages/assets/js/cookiealert.js')}}"></script>

@endsection