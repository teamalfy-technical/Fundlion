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
    $hero_title = 'Privacy Policy';
    $hero_subtitle = 'Fundlion Privacy Poly';

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

                    <h3 class="text-dark">Our Privacy Policy</h3>

                    <p class="text-dark"> 
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus consequatur dicta doloremque explicabo facilis, fugiat illo iure laboriosam magnam magni molestias quis similique sunt voluptatem? Iure ratione ullam voluptate.</span>
                        <span>Esse, est illo inventore ipsam minima nesciunt perferendis porro vel vitae? Ab accusamus architecto autem consequuntur cumque dolor earum eum, ipsam ipsum, molestiae molestias placeat quo repellendus suscipit tempore vero.</span>
                        <span>A accusamus deserunt error exercitationem facilis iure laudantium libero, mollitia nulla quaerat qui quia quos suscipit velit voluptatibus! Esse excepturi incidunt iusto sunt. Iure modi quod repellat sapiente sint suscipit.</span>
                    </p>
                    <br>
                    <p class="text-dark">
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus consequatur dicta doloremque explicabo facilis, fugiat illo iure laboriosam magnam magni molestias quis similique sunt voluptatem? Iure ratione ullam voluptate.</span>
                        <span>Esse, est illo inventore ipsam minima nesciunt perferendis porro vel vitae? Ab accusamus architecto autem consequuntur cumque dolor earum eum, ipsam ipsum, molestiae molestias placeat quo repellendus suscipit tempore vero.</span>
                        <span>A accusamus deserunt error exercitationem facilis iure laudantium libero, mollitia nulla quaerat qui quia quos suscipit velit voluptatibus! Esse excepturi incidunt iusto sunt. Iure modi quod repellat sapiente sint suscipit.</span>
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

            <div class="row mt-50">

                <div class="col-12">
                    <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut laboreincididunt ut labore et dolore magna aliqua.
                    </p>
                </div>

            </div>

        </div> -->

         <?php echo htmlspecialchars_decode(stripslashes(urldecode( $home_page_data->content) ));  ?> 
    </section>

@endsection