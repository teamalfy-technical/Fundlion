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

    <section class="about-us-area clearfix">

        <div class="container" style="padding: 30px 15px;">

            <div class="row">

                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="" style="border-radius: 10px;">
                        <div class="card-body text-center p-0">
                            <img src="{{asset('public/pages/assets/img/our_culture.png')}}" style="max-width: 100%;border-radius: 10px;">
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-lg-8 col-sm-12 px-3 our_culture">
                    <div class="card-block px-3">
                        <h1 class="card-title text-dark">Our Culture</h1>
                        <p class="card-text">
                            Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip exea commodo consequat.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nobis laborum vel
                            perferendis, magni quis commodi non fugiat molestiae impedit distinctio minima quidem
                            cupiditate quibusdam, consectetur debitis dicta! Quam, iste.
                        </p>
                        <a class="cta-primary cta-combo__primary" title="Learn More" href="#." data-js-primary-cta="" style="color: #fff;

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

                            Learn More

                        </a>
                    </div>
                </div>


            </div>

        </div>

    </section>
    <br>
    <section class="container">
        <div class="row mb-20">

            @foreach($careersCategories as $careersCategory)
                <div class="col-lg-3 col-md-3 col-sm-12 mb-20">
                    <?php $title = strtolower(preg_replace('/\s+/', '-', $careersCategory->title));?>
                    <a href="{{route('pages.careers.categories',$title)}}">
                        <div class="card border-0 text-center m-auto" style="width: 18rem; position: relative;">
                            <img class="card-img-top m-auto" src="{{asset("public/pages/assets/img/$careersCategory->img")}}" alt="Card image cap" style="height: 12rem; border-radius: 6rem;">
                            <span class="card-title m-0 text-dark font-weight-bold">{{$careersCategory->title}}</span>
                            <div class="card-body p-0">
                                <h6 class="card-text"> <span style="color: #d63d01">
                                    @foreach($careers as $career)@endforeach
                                        @if($career->cat_id === $careersCategory->id) {{$career->count()}} @else 0 @endif
                                    </span> open positions</h6>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>

    </section>

    <script src="{{asset('public/pages/assets/js/careers.js')}}"></script>
@endsection