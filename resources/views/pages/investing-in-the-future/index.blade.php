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
    // $hero_title = 'Investing in the Future';
    // $hero_subtitle = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text';

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
    <!-- body -->
    <section class="about-us-area clearfix">

<!--         <div class="container" style="padding: 30px 15px;">

            <div class="row">

                <div class="col-lg-12">

                    <h3 class="text-dark">

                        Investing in the Future
                    </h3>

                    <p class="text-dark">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo unde quisquam mollitia sequi illo eaque enim assumenda
                        magnam ex a modi velit error reprehenderit libero ipsum, amet doloremque quasi nostrum.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum fugiat sed suscipit, labore tempore architecto magnam doloribus
                        eum dolorem nisi vero quasi molestias cum rerum quas ipsum, dignissimos sapiente laudantium!
                    </p>

                    <p class="text-dark">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea facere accusamus eum aliquid est libero, error, repudiandae officia cum
                        ipsum ducimus, beatae hic nostrum! Asperiores inventore quaerat praesentium sequi eius!
                    </p>

                </div>

            </div>

            <div class="row mt-5">

                <div class="col-lg-6 col-md-6">

                    <img src="{{asset('public/pages/assets/img/bg-img/aboutus.png')}}" style="max-width: 100%;">

                </div>

                <div class="col-lg-6 col-md-6">

                    <p class="text-dark">

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                    </p>

                </div>

            </div>
        </div> -->
        <?php echo htmlspecialchars_decode(stripslashes(urldecode( $home_page_data->content) ));  ?> 
    </section>
    <script src="{{asset('public/pages/assets/js/about.js')}}"></script>

@endsection