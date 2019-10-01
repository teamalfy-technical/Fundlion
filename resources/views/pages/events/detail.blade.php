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
    $hero_title = 'Events';
    $hero_subtitle = 'Explore and register for our current and upcoming events.';
    ?>
{{--    @include('pages.layouts.views.components.banner')--}}
    <!-- Hero End -->

    <!-- body -->
    <section style="margin-top: 8.5rem; padding: 1rem;" class="job_details_head">
        <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
            <div class="row">

                <div class="col-md-3 text-center">
                    <div class="card midcards news_card" style="border-radius: 10px;border: 2px solid #7c7d81;">
                        <div class="card-body text-center p-0">
                            <img class="news_img" src="{{asset("public/pages/assets/img/events-img/$event->img")}}" style="max-width: 100%;border-radius: 10px;">
                        </div>
                    </div>
                    <!-- <img class="card-img-top" src="img/3476962581.jpg" alt="Card image cap" style="height: 12rem; border-radius: 6rem;"> -->
                </div>
                <div class="col-md-8  col-xs-12 details_top_right" style="padding-left: 2.8rem;">

                    <div class="details_head_text">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('pages.events')}}">Events</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Read More</li>
                            </ol>
                        </nav>

                        <div id="job_details_head" class="header">
                            <h1 class="mb-0 details_header">{{$event->title}}</h1>
                        </div>
                        <div class="card-text">
                            <div>
                                <i class="fa fa-calendar orange"></i> {{$event->created_at}}
                            </div>
                            <div class="">
                                <i class="fa fa-map-marker orange fa-lg"></i> {{$event->location}}
                            </div>
                            <div>
                                <a href="https://fundlion.com" target="__blank">
                                    <i class="fa fa-link orange"></i> {{$event->link}}
                                </a>
                            </div>
                        </div>
                        <a href="" class="btn btn-success mt-10" data-toggle="modal" data-target="#registerModal">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row mt-30">
                <div class="col-md-8">
                    <div class="card-title"><b>Event Description</b></div>
                    <p class="text-dark">
                        {{$event->description}}
                    </p>
                    <div class="row mb-20">
                        <div class="col details_head_text text-md-right">
                            <a href="" class="btn btn-success mt-10" data-toggle="modal" data-target="#registerModal">Register</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-md-offset-1 col-sm-12 upcoming_events_text">
                    <div class="row px-3">
                        <div class="col btn btn-dark" style="cursor:unset;">
                            Upcoming Events
                        </div>
                    </div>
                    @foreach($events as $event)
                        <div class="row">
                            <div class="col smallcareerCategory">
                                <hr class="hr">
                                <?php $title = strtolower(preg_replace('/\s+/', '-', $event->title));?>
                                <a href="{{route('pages.events.details',$title)}}" class="text-dark"><h5 class="text-dark orange right_event_heading">{{$event->title}}</h5></a>
                                <div> {{$event->created_at}} </div>
                                <div> {{$event->link}} </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- register modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Register for this Event</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-4">
                            <i class="fa fa-user fa-lg orange"></i>
                            <label data-error="wrong" data-success="right" for="name">Your name</label>
                            <input type="text" id="name" class="form-control validate" placeholder="Eg. John Doe" required />
                        </div>

                        <div class="md-form mb-4">
                            <i class="fa fa-envelope fa-lg orange"></i>
                            <label data-error="wrong" data-success="right" for="email">Your email</label>
                            <input type="email" id="email" class="form-control validate" placeholder="Eg. example@email.com" required>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-orange">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection