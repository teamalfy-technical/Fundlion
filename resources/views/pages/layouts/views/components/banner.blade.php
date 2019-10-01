<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$url);
$link = end($link_array);
//$link = strtolower($link);
//$link = ucwords(str_replace("_"," ",$link));

use Illuminate\Support\Facades\DB;

 $general_data = DB::table('fl_cms_general')->where('id', 1)->first();

 // $banner_pic=

 

?>



<?php if (@$banner_pic==""): ?>
    <section class="hero-section relative section-padding" id="home_help_small_business" >
<?php else: ?>
    <section class="hero-section relative section-padding" id="home_help_small_business" style="  background-size: 100%; background-repeat: no-repeat; background-image: url({{asset("storage/app/cms/$banner_pic")}} " >
<?php endif ?>

    <div class="container">
        <div class="row">

            <!-- Welcome Content -->
            <div class="hero_left col-lg-7 col-md-8">
                <div class="hero__content u-color-white" style="width: 100%;

                    margin-right: 0%;

                    padding-top: 5.5rem;

                    padding-bottom: 2.5rem;">
                    <div class="text-block text-block--large u-mb-medium" style="margin-bottom: 1.5rem!important;">
                        <h1 id="hero_head" class="brand-heading brand-heading--hero u-color-white text-block__heading-bar--brand" style="font-size: 4.375rem;

                        font-family: Selfmade-Sans,Impact,sans-serif;text-transform: uppercase;

                        line-height: .9;">
                            {{ @$hero_title }}
                        </h1>
                        <h2 id="hero_text" class="text-block__lead-paragraph" style="font-size: 1.625rem;

                        line-height: 2rem;font-family: Amasis,Georgia,serif;

                        font-weight: 400;color:#fff;">
                            {{ @$hero_subtitle }}
                        </h2>
                    </div>

                    <div class="cta-combo" style="font-size: 1.25rem;

                      line-height: 1.5rem;color: #fff;">
                        <a class="cta-primary cta-combo__primary" title="Get Started" href="{{route('clients.register')}}" data-js-primary-cta="" style="color: #fff;

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
                            Get Started
                        </a>
                        <span class="cta-combo__secondary-wrap">or
                            <a class="cta-link cta-combo__secondary" title="Apply Now" href="{{route('clients.register')}}" style="display: inline-block;

                          padding: .5rem;

                          margin: -.5rem;

                          font-family: inherit;

                          font-size: inherit;

                          line-height: inherit;

                          text-decoration: none;

                          color: inherit;

                          background-color: transparent;

                          border: 0;">Apply Now</a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-8 offset-md-2 offset-lg-0 col-sm-12" style="padding: 20px 40px;">
                <div class="card" style="border-radius: 20px;">
                    <div class="card-body">
                        <h3 class="text-center" style="padding: 15px 0;font-size: 25px;">See Your Funding Options</h3>
                        <form style="margin-top: 30px;" method="post" action="{{route('pages.home.apply')}}" role="form">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text" style="border-radius: 10px 0 0 10px;">£</div>
                                </div>
                                <input name="loan_amount" class="form-control" type="number" min="0" style="border-radius: 0 15px 15px 0;" placeholder="How much finance do you need?" required>
                            </div>
                            <div class="form-group mb-3">
                                <select name="loan_purpose_id" class="form-control"  style="font-size: 12px;height: 38px;margin: 10px 0; border-radius: 15px;" required>
                                    <option value="" hidden>What is the finance for?</option>
                                    @foreach($loanPurposes as $loanPurpose)
                                        <option value="{{$loanPurpose->id}}">{{$loanPurpose->purpose}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <select name="loan_duration_id" class="form-control" style="font-size: 12px;height: 38px;border-radius: 15px;" required>
                                    <option value="" hidden>How long do you need the finance for?</option>
                                    @foreach($loanDurations as $loanDuration)
                                        <option value="{{$loanDuration->id}}">{{$loanDuration->duration}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success" type="submit" style="width: 100%; color: #fff;border-radius: 15px;height: 50px;font-size: 24px;">CONTINUE</button>
                            </div>
                        </form>
                    </div>
                </div>
                <h4 class="text-center" style="margin-top: 10px;font-size: 1.3rem;">Question?
                    <img src="{{asset('public/pages/assets/img/core-img/phone-call.png')}}" style="width: 23px;margin-left: 5px;">
                    <span style="color:#d63d01;"><?php echo $general_data->telephone; ?></span>
                </h4>
            </div>
        </div>
    </div>
</section>
