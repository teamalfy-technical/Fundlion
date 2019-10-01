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
    // $hero_title = "Support & FAQ's";
    // $hero_subtitle = 'We are ready to answer your questions. Find already asked questions here.';

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

    <!-- body faq -->
    <section class="about-us-area clearfix mt-50">

        <div class="container">

            <div class="panel-group" id="accordion">

                <div class="faqHeader font-weight-bold">General questions</div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="panel-title">
                            <a class="accordion-toggle orange" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Is account registration required?</a>
                        </p>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            Account registration at <strong>PrepFundlion</strong> is only required if you will be selling or buying themes.
                            This ensures a valid communication channel for all parties involved in any transactions.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="panel-title">
                            <a class="accordion-toggle collapsed orange" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Can I submit my own Fundlion templates or themes?</a>
                        </p>
                    </div>
                    <div id="collapseTen" class="panel-collapse collapse">
                        <div class="panel-body">
                            A lot of the content of the site has been submitted by the community. Whether it is a commercial element/template/theme
                            or a free one, you are encouraged to contribute. All credits are published along with the resources.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="panel-title">
                            <a class="accordion-toggle collapsed orange" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">What is the currency used for all transactions?</a>
                        </p>
                    </div>
                    <div id="collapseEleven" class="panel-collapse collapse">
                        <div class="panel-body">
                            All prices for themes, templates and other items, including each seller's or buyer's account balance are in <strong>USD</strong>
                        </div>
                    </div>
                </div>

                <div class="faqHeader font-weight-bold">Sellers</div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="panel-title">
                            <a class="accordion-toggle collapsed orange" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Who cen sell items?</a>
                        </p>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            Any registed user, who presents a work, which is genuine and appealing, can post it on <strong>PrepFundlion</strong>.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="panel-title">
                            <a class="accordion-toggle collapsed orange" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">I want to sell my items - what are the steps?</a>
                        </p>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            The steps involved in this process are really simple. All you need to do is:
                            <ul>
                                <li>Register an account</li>
                                <li>Activate your account</li>
                                <li>Go to the <strong>Themes</strong> section and upload your theme</li>
                                <li>The next step is the approval step, which usually takes about 72 hours.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="panel-title">
                            <a class="accordion-toggle collapsed orange" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">How much do I get from each sale?</a>
                        </p>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            Here, at <strong>PrepFundlion</strong>, we offer a great, 70% rate for each seller, regardless of any restrictions, such as volume, date of entry, etc.
                            <br />
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="panel-title">
                            <a class="accordion-toggle collapsed orange" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Why sell my items here?</a>
                        </p>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse">
                        <div class="panel-body">
                            There are a number of reasons why you should join us:
                            <ul>
                                <li>A great 70% flat rate for your items.</li>
                                <li>Fast response/approval times. Many sites take weeks to process a theme or template. And if it gets rejected, there is another iteration. We have aliminated this, and made the process very fast. It only takes up to 72 hours for a template/theme to get reviewed.</li>
                                <li>We are not an exclusive marketplace. This means that you can sell your items on <strong>PrepFundlion</strong>, as well as on any other marketplate, and thus increase your earning potential.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="panel-title">
                            <a class="accordion-toggle collapsed orange" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">What are the payment options?</a>
                        </p>
                    </div>
                    <div id="collapseEight" class="panel-collapse collapse">
                        <div class="panel-body">
                            The best way to transfer funds is via Paypal. This secure platform ensures timely payments and a secure environment.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="panel-title">
                            <a class="accordion-toggle collapsed orange" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">When do I get paid?</a>
                        </p>
                    </div>
                    <div id="collapseNine" class="panel-collapse collapse">
                        <div class="panel-body">
                            Our standard payment plan provides for monthly payments. At the end of each month, all accumulated funds are transfered to your account.
                            The minimum amount of your balance should be at least 70 USD.
                        </div>
                    </div>
                </div>

                <div class="faqHeader font-weight-bold">Buyers</div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="panel-title">
                            <a class="accordion-toggle collapsed orange" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">I want to buy a theme - what are the steps?</a>
                        </p>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            Buying a theme on <strong>PrepFundlion</strong> is really simple. Each theme has a live preview.
                            Once you have selected a theme or template, which is to your liking, you can quickly and securely pay via Paypal.
                            <br />
                            Once the transaction is complete, you gain full access to the purchased product.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="panel-title">
                            <a class="accordion-toggle collapsed orange" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Is this the latest version of an item</a>
                        </p>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse">
                        <div class="panel-body">
                            Each item in <strong>PrepFundlion</strong> is maintained to its latest version. This ensures its smooth operation.
                        </div>
                    </div>
                </div>
            </div>
            <hr>

        </div>

        <?php echo htmlspecialchars_decode(stripslashes(urldecode( $home_page_data->content) ));  ?> 
    </section>

<div class="container">
<div class="panel-group" id="accordion">
<div class="faqHeader font-weight-bold">General questions</div>

<div class="panel panel-default">
<div class="panel-heading">
<p><a href="#collapseOne">Is account registration equired?</a></p>
</div>

<div class="collapse in panel-collapse" id="collapseOne">
<div class="panel-body">Account registration at <strong>PrepFundlion</strong> is only required if you will be selling or buying themes. This ensures a valid communication channel for all parties involved in any transactions.</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<p><a href="#collapseTen">Can I submit my own Fundlion templates or themes?</a></p>
</div>

<div class="collapse panel-collapse show" id="collapseTen">
<div class="panel-body">A lot of the content of the site has been submitted by the community. Whether it is a commercial element/template/theme or a free one, you are encouraged to contribute. All credits are published along with the resources.</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<p><a href="#collapseEleven">What is the currency used for all transactions?</a></p>
</div>

<div class="collapse panel-collapse " id="collapseEleven">
<div class="panel-body">All prices for themes, templates and other items, including each seller&#39;s or buyer&#39;s account balance are in <strong>USD</strong></div>
</div>
</div>

<div class="faqHeader font-weight-bold">Sellers</div>

<div class="panel panel-default">
<div class="panel-heading">
<p><a href="#collapseTwo" class="accordion-toggle collapsed orange">Who cen sell items?</a></p>
</div>

<div class="collapse panel-collapse" id="collapseTwo">
<div class="panel-body">Any registed user, who presents a work, which is genuine and appealing, can post it on <strong>PrepFundlion</strong>.</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<p><a href="#collapseThree">I want to sell my items - what are the steps?</a></p>
</div>

<div class="collapse panel-collapse" id="collapseThree">
<div class="panel-body">The steps involved in this process are really simple. All you need to do is:
<ul>
    <li>Register an account</li>
    <li>Activate your account</li>
    <li>Go to the <strong>Themes</strong> section and upload your theme</li>
    <li>The next step is the approval step, which usually takes about 72 hours.</li>
</ul>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<p><a href="#collapseFive">How much do I get from each sale?</a></p>
</div>

<div class="collapse panel-collapse" id="collapseFive">
<div class="panel-body">Here, at <strong>PrepFundlion</strong>, we offer a great, 70% rate for each seller, regardless of any restrictions, such as volume, date of entry, etc.</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<p><a href="#collapseSix">Why sell my items here?</a></p>
</div>

<div class="collapse panel-collapse" id="collapseSix">
<div class="panel-body">There are a number of reasons why you should join us:
<ul>
    <li>A great 70% flat rate for your items.</li>
    <li>Fast response/approval times. Many sites take weeks to process a theme or template. And if it gets rejected, there is another iteration. We have aliminated this, and made the process very fast. It only takes up to 72 hours for a template/theme to get reviewed.</li>
    <li>We are not an exclusive marketplace. This means that you can sell your items on <strong>PrepFundlion</strong>, as well as on any other marketplate, and thus increase your earning potential.</li>
</ul>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<p><a href="#collapseEight">What are the payment options?</a></p>
</div>

<div class="collapse panel-collapse" id="collapseEight">
<div class="panel-body">The best way to transfer funds is via Paypal. This secure platform ensures timely payments and a secure environment.</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<p><a href="#collapseNine">When do I get paid?</a></p>
</div>

<div class="collapse panel-collapse" id="collapseNine">
<div class="panel-body">Our standard payment plan provides for monthly payments. At the end of each month, all accumulated funds are transfered to your account. The minimum amount of your balance should be at least 70 USD.</div>
</div>
</div>

<div class="faqHeader font-weight-bold">Buyers</div>

<div class="panel panel-default">
<div class="panel-heading">
<p><a href="#collapseFour">I want to buy a theme - what are the steps?</a></p>
</div>

<div class="collapse panel-collapse" id="collapseFour">
<div class="panel-body">Buying a theme on <strong>PrepFundlion</strong> is really simple. Each theme has a live preview. Once you have selected a theme or template, which is to your liking, you can quickly and securely pay via Paypal.<br />
Once the transaction is complete, you gain full access to the purchased product.</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<p><a href="#collapseSeven">Is this the latest version of an item</a></p>
</div>

<div class="collapse panel-collapse" id="collapseSeven">
<div class="panel-body">Each item in <strong>PrepFundlion</strong> is maintained to its latest version. This ensures its smooth operation.</div>
</div>
</div>
</div>

<hr /></div>


    <!-- body/contact form -->
    <section class="resume-section mt-40 mb-40 text-center" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="my-auto border contact_form_box ">
                        <h3 class="mb-4">
                            Ask for Support
                        </h3>

                        <form class="contact-form d-flex flex-column align-items-center" action="https://formspree.io/youremail@mail.com" method="POST">
                            <div class="form-group  w-100">
                                <input type="name" class="form-control" placeholder="Name" name="name" required />
                            </div>
                            <div class="form-group  w-100">
                                <input type="email" class="form-control" placeholder="Email" name="name" required />
                            </div>
                            <div class="form-group  w-100">
                                <input type="text" class="form-control" placeholder="Subject" name="subject" required />
                            </div>

                            <div class="form-group w-100">
                                <textarea class="form-control" type="text" placeholder="Message" rows="3" name="name" required></textarea>
                            </div>

                            <!-- <div class="btn-group" role="group" aria-label="Button group with nested dropdown"> -->
                            <button type="button" class="btn btn-orange w-100"> <i class="fa fa-headphones  fa-lg text-white"></i> Ask for support</button>
                            <!-- <button type="button" class="btn btn-orange w-100">Report a problem</button> -->
                            <!-- </div> -->
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="my-auto contact_form_box ">
                        <div class="mb-20">
                            <span>Call Us</span>
                            <h5><?php echo $general_data->telephone; ?> </h5>
                        </div>
                        <div class="mb-20">
                            <span>Email</span>
                            <h5><?php echo $general_data->email; ?></h5>
                        </div>
                        <div class="mb-20">
                        <?php 
                        $explode_address=explode(",", $general_data->address);

                         ?>
                            <span>Mailing Address</span>
                                 <h5><?php echo $explode_address[0]; ?>,</h5>
                                 <h5><?php echo $explode_address[1]; ?></h5>
                        </div>
                        <div class="mb-20">
                            <span>Support</span>
                            <h5><?php echo $general_data->support_email; ?></h5>
                        </div>
                        <span id="online_appointments_redirect"></span>
                        <div class="mb-20">
                            <span>Press</span>
                            <h5><?php echo $general_data->press_email; ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script src="{{asset('public/pages/assets/js/about.js')}}"></script>


@endsection