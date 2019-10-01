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
    // $hero_title = 'Events';
    // $hero_subtitle = 'Explore and register for our current and upcoming events.';
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

    <section class="about-us-area clearfix">
        <div class="container" style="padding: 30px 15px;">

            <div class="row">

                <div class="col-lg-9 col-md-9 col-sm-12">

                    <div class="row">
                        <div class="col">
                            <div class="card border-0">
                                @foreach($events as $event)
                                    <div class="row ">
                                        <div class="col-md-3">
                                            <div class="card midcards news_card" style="border-radius: 10px;border: 2px solid #7c7d81;">
                                                <div class="card-body text-center p-0">
                                                    <img class="event_img" src="{{asset("public/pages/assets/img/events-img/$event->img")}}" style="max-width: 100%;border-radius: 10px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 px-3">
                                            <div class="card-block event_body">
                                                <?php $title = strtolower(preg_replace('/\s+/', '-', $event->title));?>
                                                <a href="{{route('pages.events.details',$title)}}"><h5 class="card-title news_heading">{{$event->title}}</h5></a>
                                                <div class="card-text">
                                                    <div><i class="fa fa-calendar orange"></i> {{$event->created_at}}</div>
                                                    <div class=""><i class="fa fa-map-marker orange fa-lg"></i> {{$event->location}}</div>
                                                    <div><a href="https://uk.quickbooksconnect.com" target="__blank"><i class="fa fa-link orange"></i> {{$event->link}}</a></div>
                                                </div>
                                                <div class="card-text event_text">{{substr($event->description, 0 ,50)}}</div>
                                                <div><a href="{{route('pages.events.details',$title)}}" class="btn btn-primary btn-news">Read More</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="hr">
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="row mt-20 mb-40">
                        <div class="col w-100">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    {{$events->links()}}
{{--                                <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 upcoming_events_text">
                    <div class="row px-3">
                        <div class="col btn btn-dark" style="cursor:unset;">Upcoming Events</div>
                    </div>
                    @foreach($events as $event)
                    <div class="row">
                        <div class="col">
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

    <script src="{{asset('public/pages/assets/js/news.js')}}"></script>

@endsection