<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$url);
// print_r($link_array);die();
$link = end($link_array);
 // print_r($link);die();
$link = ucwords(str_replace("_"," ",$link));


?>

@extends('pages.layouts.views.layout')
@section('title', "$link :: Fund Lion")
@section('content')

    <!-- ##### Welcome Area Start ##### -->

    <!-- Hero start -->
    <?php
    // $hero_title = 'Our Team';
    // $hero_subtitle = 'We have experienced and qualified team members.';
    
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

    <!-- ##### Welcome Area End ##### -->

    <section class="about-us-area clearfix">

        <div class="container" style="padding: 30px 15px;">

            <div class="row">

                <div class="col-lg-12">

                    <h3 class="text-dark">

                        Lorem ipsum dolor sit amet, consectetur

                    </h3>

                    <p class="text-dark">

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.

                    </p>

                </div>

            </div>

            <div class="row">

                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">

                    <div id="team" class="carousel slide" data-ride="carousel">



                        <!-- Indicators -->

                        <ul class="carousel-indicators">

                            <li data-target="#team" data-slide-to="0" class="active"></li>

                            <li data-target="#team" data-slide-to="1"></li>

                            <li data-target="#team" data-slide-to="2"></li>

                        </ul>



                        <!-- The slideshow -->

                        <div class="carousel-inner">

                            <div class="carousel-item active p-5">
                                <div class="row">

                                    <!-- 1 -->
                                    <div id="ceo_img" class="col-lg-4 col-md-4 team_img text-center">
                                        <div class="card midcards" style="border-radius: 10px;border: 2px solid #7c7d81;">
                                            <div class="card-body text-center p-0">
                                                <img src="{{asset('public/pages/assets/img/team-img/ceo.png')}}" style="max-width: 100%;border-radius: 10px;">
                                            </div>
                                        </div>
                                        <h5 class="text-center mb-0">Anuj Khanna</h5>
                                        <p class="text-center" style="color:#d53d00;line-height: 10px;">Founder & CEO</p>
                                        <a href="https://www.linkedin.com/" target="_blank" title="Go to Anuj Khanna's linkedin profile"><i class="fa fa-linkedin-square fa-2x"></i></a>

                                    </div>

                                    <div id="ceo_title" class="popover_title d-none">
                                        <a href="https://www.linkedin.com/" target="_blank" title="Go to Anuj Khanna's linkedin profile"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                        <span class="team_info_close float-right"><i class="fa fa-window-close"></i></span>
                                    </div>
                                    <div id="ceo_cv" class="d-none">
                                        <p id="" class="text-center text-dark">
                                            Founder and CEO of Creditmate India. Former SVP Vodafone Emerging Markets & Reuters Media.
                                            <br><br>
                                            Consumber Credit Industry
                                            <br>
                                            Expert with experience across Europe and Asia
                                            <br><br>
                                            INSEAD Marketing & BSC Hons from the University of Hertfordshire.
                                        </p>
                                    </div>

                                    <!-- 2 -->
                                    <div id="david_img" class="col-lg-4 col-md-4 team_img text-center">
                                        <div class="card midcards" style="border-radius: 10px;border: 2px solid #7c7d81;">
                                            <div class="card-body text-center p-0">
                                                <img src="{{asset('public/pages/assets/img/team-img/david.png')}}" style="max-width: 100%;border-radius: 10px;">
                                            </div>
                                        </div>
                                        <h5 class="text-center mb-0">David Ives</h5>
                                        <p class="text-center" style="color:#d53d00;line-height: 10px;">Chief Technology Advisor</p>
                                        <a href="https://www.linkedin.com/" target="_blank" title="Go to David Ives's linkedin profile"><i class="fa fa-linkedin-square fa-2x"></i></a>

                                    </div>

                                    <div id="david_title" class="popover_title d-none">
                                        <a href="https://www.linkedin.com/" target="_blank" title="Go to David Ives's linkedin profile"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                        <span class="team_info_close float-right"><i class="fa fa-window-close"></i></span>
                                    </div>
                                    <div id="david_cv" class="d-none">
                                        <p id="" class="text-center text-dark">
                                            Founder CTO for CrowdCube UK.
                                            <br><br>
                                            Over 10 years High tech experience with Pusher, Decibel Insight, Equinity and The NHS.
                                        </p>
                                    </div>


                                    <!-- 3 -->
                                    <div id="sriv_img" class="col-lg-4 col-md-4 team_img text-center">
                                        <div class="card midcards" style="border-radius: 10px;border: 2px solid #7c7d81;">
                                            <div class="card-body text-center p-0">
                                                <img src="{{asset('public/pages/assets/img/team-img/sriv.png')}}" style="max-width: 100%;border-radius: 10px;">
                                            </div>
                                        </div>
                                        <h5 class="text-center mb-0">Sriv Venkatesh</h5>
                                        <p class="text-center" style="color:#d53d00;line-height: 10px;">Chief Commercial Advisor</p>
                                        <a href="https://www.linkedin.com/" target="_blank" title="Go to Sriv Venkatesh's linkedin profile"><i class="fa fa-linkedin-square fa-2x"></i></a>

                                    </div>

                                    <div id="sriv_title" class="popover_title d-none">
                                        <a href="https://www.linkedin.com/" target="_blank" title="Go to Sriv Venkatesh's linkedin profile"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                        <span class="team_info_close float-right"><i class="fa fa-window-close"></i></span>
                                    </div>
                                    <div id="sriv_cv" class="d-none">
                                        <p id="" class="text-center text-dark">
                                            Sr. Investment Banking, Finance & Liquidity Expert. Former SVP J.P. Morgan, HSBC and
                                            C Level Management & Strategy Consulting Experience with Accenture and PWC in the UK,
                                            Europe, Australia & Asia.
                                            <br><br>
                                            MBA, Henley Business School
                                            <br>
                                            BE Computer Science, University of Madras
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div class="carousel-item p-5">
                                <div class="row">

                                    <!-- 4 -->
                                    <div id="jasneet_img" class="col-lg-4 col-md-4 team_img text-center">
                                        <div class="card midcards" style="border-radius: 10px;border: 2px solid #7c7d81;">
                                            <div class="card-body text-center p-0">
                                                <img src="{{asset('public/pages/assets/img/team-img/jasneet.png')}}" style="max-width: 100%;border-radius: 10px;">
                                            </div>
                                        </div>
                                        <h5 class="text-center mb-0">Jasneet Singh</h5>
                                        <p class="text-center" style="color:#d53d00;line-height: 10px;">Chief Development Advisor</p>
                                        <a href="https://www.linkedin.com/" target="_blank" title="Go to Jasneet Singh's linkedin profile"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                    </div>

                                    <div id="jasneet_title" class="popover_title d-none">
                                        <a href="https://www.linkedin.com/" target="_blank" title="Go to Jasneet Singh's linkedin profile"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                        <span class="team_info_close float-right"><i class="fa fa-window-close"></i></span>
                                    </div>
                                    <div id="jasneet_cv" class="d-none">
                                        <p id="" class="text-center text-dark">
                                            Sr. Principal at Infosys Consulting UK, experience with IBM, Tech Mahindra, Cognizant, Virtusa and SDS. Implemented
                                            various Banking and Fintech Projects across Europe, Middle East, Asia and USA.
                                            <br><br>
                                            MS Software Bits Pilani
                                            <br>
                                            ADP, University of Chicago
                                        </p>
                                    </div>

                                    <!-- 5 -->
                                    <div id="jonathan_img" class="col-lg-4 col-md-4 team_img text-center">
                                        <div class="card midcards" style="border-radius: 10px;border: 2px solid #7c7d81;">
                                            <div class="card-body text-center p-0">
                                                <img src="{{asset('public/pages/assets/img/team-img/jonathan.png')}}" style="max-width: 100%;border-radius: 10px;">
                                            </div>
                                        </div>
                                        <h5 class="text-center mb-0">Jonathan Bill</h5>
                                        <p class="text-center" style="color:#d53d00;line-height: 10px;">Advisor, Indian Credit Market</p>
                                        <a href="https://www.linkedin.com/" target="_blank" title="Go to Jonathan Bill's linkedin profile"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                    </div>

                                    <div id="jonathan_title" class="popover_title d-none">
                                        <a href="https://www.linkedin.com/" target="_blank" title="Go to Jonathan Bill's linkedin profile"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                        <span class="team_info_close float-right"><i class="fa fa-window-close"></i></span>
                                    </div>
                                    <div id="jonathan_cv" class="d-none">
                                        <p id="" class="text-center text-dark">
                                            Founder and CEO of Creditmate India. Former SVP Vodafone Emerging Markets & Reuters Media.
                                            <br><br>
                                            Consumber Credit Industry
                                            <br>
                                            Expert with experience across Europe and Asia
                                            <br><br>
                                            INSEAD Marketing & BSC Hons from the University of Hertfordshire.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="carousel-item p-5">
                              <div class="row">
                                <div class="col-lg-4 col-md-4">

                                  <div class="card midcards" style="border-radius: 10px;border: 2px solid #7c7d81;">

                                    <div class="card-body text-center p-0">

                                      <img src="img/team-img/ceo.png" style="max-width: 100%;border-radius: 10px;">

                                    </div>

                                  </div>

                                  <h5 class="text-center mb-0">Anuj Khanna</h5>

                                  <p class="text-center" style="color:#d53d00;line-height: 10px;">Founder & CEO</p>

                                </div>

                                <div class="col-lg-4 col-md-4">

                                  <div class="card midcards" style="border-radius: 10px;border: 2px solid #7c7d81;">

                                    <div class="card-body text-center p-0">

                                      <img src="img/team-img/david.png" style="max-width: 100%;border-radius: 10px;">

                                    </div>

                                  </div>

                                  <h5 class="text-center mb-0">David Ives</h5>

                                  <p class="text-center" style="color:#d53d00;line-height: 10px;">Chief Technology Advisor</p>

                                </div>

                                <div class="col-lg-4 col-md-4">

                                  <div class="card midcards" style="border-radius: 10px;border: 2px solid #7c7d81;">

                                    <div class="card-body text-center p-0">

                                      <img src="img/team-img/sriv.png" style="max-width: 100%;border-radius: 10px;">

                                    </div>

                                  </div>

                                  <h5 class="text-center mb-0">Sriv Venkatesh</h5>

                                  <p class="text-center" style="color:#d53d00;line-height: 10px;">Chief Commercial Advisor</p>

                                </div>

                              </div>

                            </div> -->



                        </div>



                        <!-- Left and right controls -->

                        <a class="carousel-control-prev" href="#team" data-slide="prev">

                            <span class="carousel-control-prev-icon text-dark"></span>

                        </a>

                        <a class="carousel-control-next" href="#team" data-slide="next">

                            <span class="carousel-control-next-icon"></span>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <script src="{{asset('public/pages/assets/js/ourteam.js')}}"></script>

@endsection