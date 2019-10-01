<?php 

use Illuminate\Support\Facades\DB;  

  $footer_data = DB::table('fl_cms_footer')->where('id', 1)->first();
  $general_data = DB::table('fl_cms_general')->where('id', 1)->first();
// print_r($lending_patners_data);
 $lending_patners_slides_data = DB::table('fl_cms_lending_patners')->get();

 ?>

<footer class="footer-area bg-img">

    <div class="footer-content-area mt-0 p-4">

        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-md-7">

                    <div class="footer-copywrite-info">

                        <!-- Copywrite -->

                        <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">

                            <div class="footer-logo">

                                <a href="{{route('pages.home')}}"><img src="{{asset("public/pages/assets/img/core-img/$general_data->logo")}}" style="width: 250px;" alt="logo"> </a>

                            </div>

                            <p class="text-white">

                            <?php echo $footer_data->disclaimer; ?> </p>



                            <p class="text-white mt-3">© Fund Lion Ltd</p>

                        </div>



                    </div>

                </div>



                <div class="col-lg-4 col-md-5">

                    <div class="row">

                        <div class="col-lg-6 col-md-6 ">

                            <!-- Content Info -->

                            <div class="contact_info_area d-sm-flex justify-content-between">

                                <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">

                                    <h5>Menu</h5>

                                     <!-- <a href="#"><p class="text-white">Business Funds</p></a>                                    -->
                                    <a href="faq/"><p class="text-white">FAQ</p></a>
                                    <a href="contact"><p class="text-white">Contact Us</p></a>
                                    <a href="careers"><p class="text-white">Careers</p></a>
                                    <a href="our-team"><p class="text-white">Team</p></a>

                                </div>

                            </div>

                        </div>



                        <div class="col-lg-6 col-md-6 ">

                            <div class="contact_info_area d-sm-flex justify-content-between">

                                <!-- Content Info -->

                                <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">

                                    <h5>Legal</h5>

{{--                                    <p class="text-white">Treating Customers Family</p>--}}

{{--                                    <p class="text-white">Complaints</p>--}}

{{--                                    <p class="text-white">Complaints</p>--}}

{{--                                    <p class="text-white">+999 90932 627</p>--}}

                                    <p class="text-white"><?php echo $general_data->email; ?></p>

                                </div>

                            </div>

                        </div>



                        <div class="col-lg-2 col-md-6 ">

                            <!-- Content Info -->

                            <div class="contact_info_area d-sm-flex justify-content-between">

                                <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">
                                <br>
                                    <h5>Contact Us</h5>

                                    <p class="text-white"><?php echo $general_data->telephone; ?></p>

                                    <p class="text-white"><?php echo $general_data->email; ?></p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="row mt-4">
<!--         @foreach ($lending_patners_slides_data->slice(0, 6) as $data)
                <div class="col-lg-2 col-md-2">

                    <img src="{{asset("storage/app/cms/$data->patner_image")}}" style="max-width: 100%;">

                </div>
        @endforeach -->

                <div class="col-lg-2 col-md-2">

                    <img src="{{asset('public/pages/assets/img/partners/halifax-tp.png')}}" style="max-width: 100%;">

                </div>

                <div class="col-lg-2 col-md-2">

                    <img src="{{asset('public/pages/assets/img/partners/privacy-seal_blog.png')}}" style="max-width: 100%;">

                </div>

                <div class="col-lg-2 col-md-2">

                    <img src="{{asset('public/pages/assets/img/partners/bbb-featured.png')}}" style="max-width: 90%;">

                </div>

                <div class="col-lg-2 col-md-2">

                    <img src="{{asset('public/pages/assets/img/partners/HSAC-tp.png')}}" style="max-width: 100%;">

                </div>

                <div class="col-lg-2 col-md-2">

                    <img src="{{asset('public/pages/assets/img/partners/barclays-tp.png')}}" style="max-width: 100%;">

                </div>

                <div class="col-lg-2 col-md-2">

                    <img src="{{asset('public/pages/assets/img/partners/privacy-seal_blog.png')}}" style="max-width: 100%;">

                </div>

            </div>

        </div>



    </div>

</footer>

<section class="about-us-area clearfix">

    <div class="container" style="padding: 30px 15px;">

        <div class="row">

            <div class="col-lg-8 col-md-7 message-navigation">
                <ul class="nav" style="display: flex;margin-top: 4px;">
                    <li><a href="{{route('pages.terms')}}">Terms and Conditions</a></li>
                    <li><a href="{{route('pages.privacy')}}">Fundlion Privacy Policy</a></li>
                    <li><a>Site Map</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-5">

                <div class="footer-social-info fadeInUp text-dark" data-wow-delay="0.4s">
                    <span style="font-weight: 600;margin-right: 10px;">Follow Us</span>
                    <a href="#"> <img src="{{asset('public/pages/assets/img/bg-img/twitter-logo.png')}}" width="25"></a>
                    <a href="#"> <img src="{{asset('public/pages/assets/img/bg-img/facebook-logo.png')}}" width="25"></a>
                    <a href="#"> <img src="{{asset('public/pages/assets/img/bg-img/linkedin-sign.png')}}" width="25"></a>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- coockies -->
<div class="alert alert-dismissible text-center cookiealert" role="alert">
    <div class="cookiealert-container">
        <b>Do you like cookies?</b> <img src="{{asset('public/pages/assets/img/core-img/logo2.png')}}" style="width:165px; margin-top: -2px;" alt="logo">  uses cookies to ensure you get the best experience on our website. <a href="http://cookiesandyou.com/" target="_blank">Learn more</a>
        <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
            I agree
        </button>
    </div>
</div>