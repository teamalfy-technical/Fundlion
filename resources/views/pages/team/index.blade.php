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

<!--         <div class="container" style="padding: 30px 15px;">

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
            <br><br>
            <div class="row">
                <div class="col-lg-3 col-sm-12 m-lg-auto m-md-auto">
                    <div class="card border-0 ">
                        <div >

                        <img src="http://localhost/git/fundlion/public/pages/assets/img/team-img/ceo.png" style=" max-width: 255px;" id="ceo_img" class="card-img-top team_img" >

                        </div>
                        <div class="card-body text-center">
                            <div class="card-title">Anuj Khanna
                                <span>
                                    <a href="https://www.linkedin.com/" target="_blank" title="Go to Anuj Khanna's linkedin profile"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                </span>
                            </div>

                            <h6 class="card-title">Founder & CEO</h6>
                            <span id="ceo_cv" class="team_cv">
                                20+ years experience in the Fintech, Blockchain, AdTech, Mobile and Digital application industry.
                                <br><br>
                                Netsize Gemalto, Boku, Bango, Vodafone, Dialogue, Opera, Nokia, Openbit, etc.
                                <br><br>
                                MBA Marketing, University of Sheffield Ba Economics, University of Mumbai
                            </span>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">


                <div class="col-lg-3 col-sm-12">
                    <div class="card" style="border: none;">
                        <div >
                            <img src="http://localhost/git/fundlion/teamalfy/img/team-img/david.png" style=" max-width: 255px;" id="david_img" class="card-img-top team_img" >
                        </div>
                        <div class="card-body text-center">
                            <div class="card-title">David Ives
                                <span>
                                    <a href="https://www.linkedin.com/" target="_blank" title="Go to David Ives's linkedin profile"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                </span>
                            </div>
                            <h6 class="card-title">Chief Technology Advisor</h6>

                            <span id="david_cv" class="team_cv">
                                Founder CTO for CrowdCube UK.
                                <br><br>
                                Over 10 years High tech experience with Pusher, Decibel Insight, Equinity and The NHS.
                            </span>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-sm-12">
                    <div class="card" style="border: none;">
                        <div >
                        <img src="http://localhost/git/fundlion/public/pages/assets/img/team-img/sriv.png" style=" max-width: 255px;" id="sriv_img" class="card-img-top team_img" >

                        </div>
                        <div class="card-body text-center">
                            <div class="card-title">Sriv Venkatesh
                                <span>
                                    <a href="https://www.linkedin.com/" target="_blank" title="Go to Sriv Venkatesh's linkedin profile"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                </span>
                            </div>
                            <h6 class="card-title">Chief Commercial Advisor</h6>

                            <span id="sriv_cv" class="team_cv">
                                Sr. Investment Banking, Finance & Liquidity Expert. Former SVP J.P. Morgan, HSBC and
                                C Level Management & Strategy Consulting Experience with Accenture and PWC in the UK,
                                Europe, Australia & Asia.
                                <br><br>
                                MBA, Henley Business School
                                <br>
                                BE Computer Science, University of Madras
                            </span>
                        </div>
                    </div>
                </div>

                
                <div class="col-lg-3 col-sm-12">
                    <div class="card" style="border: none;">
                        <div >

                        <img src="http://localhost/git/fundlion/public/pages/assets/img/team-img/jasneet.png" style=" max-width: 255px;" id="jasneet_img" class="card-img-top team_img" >

                        </div>
                        <div class="card-body text-center">
                            <div class="card-title">Jasneet Singh
                                <span>
                                    <a href="https://www.linkedin.com/" target="_blank" title="Go to Jasneet Singh's linkedin profile"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                </span>
                            </div>
                            <h6 class="card-title">Chief Development Advisor</h6>

                            <span id="jasneet_cv" class="team_cv">
                                Sr. Principal at Infosys Consulting UK, experience with IBM, Tech Mahindra, Cognizant, Virtusa and SDS. Implemented
                                various Banking and Fintech Projects across Europe, Middle East, Asia and USA.
                                <br><br>
                                MS Software Bits Pilani
                                <br>
                                ADP, University of Chicago
                            </span>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-sm-12">
                    <div class="card" style="border: none;">
                        <div >

                        <img src="http://localhost/git/fundlion/teamalfy/img/team-img/jonathan.png" style=" max-width: 255px;" id="jonathan_img" class="card-img-top team_img" >

                        </div>
                        <div class="card-body text-center">
                            <div class="card-title">Jonathan Bill
                                <span>
                                    <a href="https://www.linkedin.com/" target="_blank" title="Go to Jonathan Bill's linkedin profile"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                </span>
                            </div>
                            <h6 class="card-title">Advisor, Indian Credit Market</h6>

                            <span id="jonathan_cv" class="team_cv">
                                Founder and CEO of Creditmate India. Former SVP Vodafone Emerging Markets & Reuters Media.
                                <br><br>
                                Consumber Credit Industry
                                <br>
                                Expert with experience across Europe and Asia
                                <br><br>
                                INSEAD Marketing & BSC Hons from the University of Hertfordshire.
                            </span>
                        </div>
                    </div>
                </div>



            </div>

        </div> -->
<?php echo htmlspecialchars_decode(stripslashes(urldecode( $home_page_data->content) ));  ?> 
    </section>

    <script src="{{asset('public/pages/assets/js/meet_our_tem.js')}}"></script>

@endsection