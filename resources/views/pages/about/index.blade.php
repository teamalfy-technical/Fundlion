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
    // print_r($home_page_data);die();
    $hero_title = $home_page_data->banner_title;
    @$banner_pic = @$home_page_data->banner_pic;
    // print_r($hero_title);die();
    $hero_subtitle = $home_page_data->banner_text;

    ?>


    @include('pages.layouts.views.components.banner')
    <!-- Hero End -->

    <section class="about-us-area clearfix">

<?php echo htmlspecialchars_decode(stripslashes(urldecode( $home_page_data->content) ));  ?>  

    </section>

    <script src="{{asset('public/pages/assets/js/about.js')}}"></script>
@endsection