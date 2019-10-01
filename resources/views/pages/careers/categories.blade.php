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
    $hero_subtitle = 'Career Openings In'." ".$careerCategory->title;
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

                    <div style="margin-top:3rem;" class="">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <?php $title = strtolower(preg_replace('/\s+/', '-', $careerCategory->title));?>
                                <li class="breadcrumb-item"><a href="{{route('pages.careers.details',['id'=>$careerCategory->id ,'title'=>$title])}}">{{$careerCategory->title}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Open Positions <span>({{$careers->count()}})</span></li>
                            </ol>
                        </nav>

                        <div id="job_details_head" class="header">
                            <h1 class="mb-0 details_header">{{$careerCategory->title}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table table-striped table-hover table-borderless">
                        <thead>
                        <tr>
                            <th>Job Title</th>
                            <th>Team</th>
                            <th>Office</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($careers as $career)
                            <?php
                            $category = strtolower(preg_replace('/\s+/', '-', $careerCategory->title));
                            $title = strtolower(preg_replace('/\s+/', '-', $career->title));
                            ?>
                            <tr onclick="window.location='{{route('pages.careers.details',['category'=>$category, 'title'=>$title])}}';" style="cursor: pointer;">
                                <td>{{$career->title}}</td>
                                <td>{{$career->team}}</td>
                                <td>{{$career->office}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('public/pages/assets/js/careers.js')}}"></script>
@endsection