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
    // $hero_title = 'Investor Relations';
    // $hero_subtitle = 'Subtitle goes here for investor relations page.';
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

<!--         <div class="container" style="padding: 30px 15px;">

            <div class="row">

                <div class="col-lg-12">

                    <h3 class="text-dark">

                        Introduction heading
                    </h3>

                    <p class="text-dark">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos culpa voluptate eius
                        eveniet, enim dolorum nulla iure maxime rem rerum! Ea, velit. Distinctio, nisi! Deserunt sunt molestiae suscipit hic officiis.
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

            <div class="row mt-5">

                <div class="col-lg-6 col-md-6">

                    <p class="text-dark">

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                    </p>

                </div>

                <div class="col-lg-6 col-md-6">

                    <img src="{{asset('public/pages/assets/img/bg-img/aboutus.png')}}" style="max-width: 100%;">

                </div>


            </div>

        </div> -->
<?php echo htmlspecialchars_decode(stripslashes(urldecode( $home_page_data->content) ));  ?> 
    </section>
    <!-- investors -->
    <section class="about-us-area clearfix">

        <div class="container" style="padding: 30px 15px;">

            <div class="row">

                <div class="col-lg-6">

                    <h1 class="text-left text-dark" style="font-size: 50px;">Our Investors</h1>

                    <p class="text-dark">

                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,

                            when an unknown printer took a galley of type and scrambled it to make a type

                        </p>

                </div>

            </div>

            <div class="row">

                <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 mt-15">
                    <div class="card midcards news_card">
                        <div class="card-body text-center">
                            <img src="{{asset('public/pages/assets/img/partners/Barclays.jpg')}}" style="width: 100%">
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 mt-15">

                    <div class="card midcards news_card">

                        <div class="card-body text-center">

                            <img src="{{asset('public/pages/assets/img/partners/Barclays.jpg')}}" style="width: 100%">

                        </div>

                    </div>

                </div>

                <div class="col-lg-2 col-md-2 mt-15">

                    <div class="card midcards news_card">

                        <div class="card-body text-center">

                            <img src="{{asset('public/pages/assets/img/partners/Barclays.jpg')}}" style="width: 100%">

                        </div>

                    </div>
                </div>

                <div class="col-lg-2 col-md-2 mt-15">

                    <div class="card midcards news_card">

                        <div class="card-body text-center">

                            <img src="{{asset('public/pages/assets/img/partners/Barclays.jpg')}}" style="width: 100%">

                        </div>

                    </div>

                </div>

                <div class="col-lg-2 col-md-2 mt-15">

                    <div class="card midcards news_card">

                        <div class="card-body text-center">

                            <img src="{{asset('public/pages/assets/img/partners/Barclays.jpg')}}" style="width: 100%">

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection