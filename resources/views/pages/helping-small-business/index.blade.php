<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$url);
$link = end($link_array);
$link = ucwords(str_replace("_"," ",$link));

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

@extends('pages.layouts.views.layout')
@section('title', "$link :: Fund Lion")
@section('content')

    <!-- Hero start -->

    @include('pages.layouts.views.components.banner')
    <!-- Hero End -->

    <section class="about-us-area clearfix">

<!--         <div class="container" style="padding: 30px 15px;">

            <div class="row">

                <div class="col-lg-12">

                    <h3 class="text-dark">

                        Helping Small Businesses Grow
                    </h3>

                    <p class="text-dark"> 
                        Excessive bureaucracy and lack of innovation in the traditional finance sector has become an impediment for business
                        financing. FundLion makes it easier for small and medium sized businesses to raise funds and fast-tracks the financing
                        process enabling entrepreneurs to focus on growth and innovation. FundLion works with a wide array of business lenders
                        and can help you in finding the right financing option for you. Contact us today to discuss your funding requirements.
                    </p>

                </div>

            </div>


        </div> -->

<?php echo htmlspecialchars_decode(stripslashes(urldecode( $home_page_data->content) ));  ?> 

    </section>



@endsection