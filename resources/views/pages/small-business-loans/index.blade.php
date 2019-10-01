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
    echo '<pre>';
    // print_r($loans['title']);
    echo '</pre>';

     ?>
    <?php
    // $hero_title = 'Small Business Loans';
    // $hero_subtitle = 'We have loan products for your business. Go ahead and explore them.';
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
        <div class="container" style="padding: 30px 15px;">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-dark">Our Loan Products</h3>

                    <p class="text-dark">
                        FundLion works with a wide array of business lenders and can help you in finding the right financing option for you. Contact us today to discuss your funding requirements.
                    </p>

                </div>
            </div>
        </div>
    </section>
    <section class="about-us-area clearfix">
        <div class="container" style="padding: 30px 15px;">
            <div class="row">
            @foreach ($loans as $loan)

            <!-- <h1>loan</h1> -->
            
                 <div class="col-lg-3 col-lg-offset-1 col-md-2 col-md-offset-1 mt-15 col-loan">
                    <a href="{{route('pages.loans.details',$loan->title)}}" class="card midcards h-100 loan_cards">
                        <div class="card-body text-center">
                            <p><img src="{{asset("storage/app/cms/$loan->img")}}" class="icon_size"></p>
                            <!-- <i class="fa fa-handshake-o fa-2x"></i> -->
                            <p class="m-0 text-dark" style="line-height: 15px;">{{$loan->title}}</p>
                            <!-- <p class="m-0" style="color:#d63d01;line-height: 25px;">07479546755</p> -->
                        </div>
                    </a>
                </div>
           

            @endforeach
             </div>
            <!-- row 1 -->
<!--             <div class="row">
                <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 mt-15 col-loan">
                    <a href="#aquisition_finance" class="card midcards h-100 loan_cards">
                        <div class="card-body text-center">
                            <p><img src="{{asset('public/pages/assets/img/loan_icons/acquisition.svg')}}" class="icon_size"></p>
                            
                            <p class="m-0 text-dark" style="line-height: 15px;">Acquisition Finance</p>
                            
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-2 mt-15 col-loan">
                    <a href="#asset_backed_loans" class="card midcards h-100 loan_cards">
                        <div class="card-body text-center">
                            <p><img src="{{asset('public/pages/assets/img/loan_icons/asset_backed_loans.png')}}" class="icon_size"></p>
                            <p class="m-0 text-dark" style="line-height: 15px;">Asset Backed Loans</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-2 mt-15 col-loan">
                    <a href="#asset_leasing" class="card midcards h-100 loan_cards">
                        <div class="card-body text-center">
                            <p><img src="{{asset('public/pages/assets/img/loan_icons/asset_leasing.png')}}" class="icon_size"></p>
                            <p class="m-0 text-dark" style="line-height: 15px;">Asset Leasing</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-2 mt-15 col-loan">
                    <a href="#bridging_loans" class="card midcards h-100 loan_cards">
                        <div class="card-body text-center">
                            <p><img src="{{asset('public/pages/assets/img/loan_icons/bridgining_loans.png')}}" class="icon_size"></p>
                            <p class="m-0 text-dark" style="line-height: 15px;">Bridging Loans</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-2 mt-15 col-loan">
                    <a href="#cash_advances" class="card midcards h-100 loan_cards">
                        <div class="card-body text-center">
                            <p><img src="{{asset('public/pages/assets/img/loan_icons/cash_advance.png')}}" class="icon_size"></p>
                            <p class="m-0 text-dark" style="line-height: 15px;">Cash Advances</p>
                        </div>
                    </a>
                </div>

            </div> -->
            <!-- row 2 -->
<!--             <div class="row">

                <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 mt-15 col-loan">
                    <a href="#corporate_bonds" class="card midcards h-100 loan_cards">
                        <div class="card-body text-center">
                            <p><img src="{{asset('public/pages/assets/img/loan_icons/corporate_bond.png')}}" class="icon_size"></p>
                            
                            <p class="m-0 text-dark" style="line-height: 15px;">Corporate Bonds</p>
                           
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-2 mt-15 col-loan">
                    <a href="#construction_finance" class="card midcards h-100 loan_cards">
                        <div class="card-body text-center">
                            <p><img src="{{asset('public/pages/assets/img/loan_icons/construction_finance.png')}}" class="icon_size"></p>
                            <p class="m-0 text-dark" style="line-height: 15px;">Construction Finance</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-2 mt-15 col-loan">
                    <a href="#debt_reconstruction" class="card midcards h-100 loan_cards">
                        <div class="card-body text-center">
                            <p><img src="{{asset('public/pages/assets/img/loan_icons/debt_restructure.png')}}" class="icon_size"></p>
                            <p class="m-0 text-dark" style="line-height: 15px;">Debt Restructuring</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-2 mt-15 col-loan">
                    <a href="#equipment_purchase" class="card midcards h-100 loan_cards">
                        <div class="card-body text-center">
                            <p><img src="{{asset('public/pages/assets/img/loan_icons/equipment_purchase.png')}}" class="icon_size"></p>
                            <p class="m-0 text-dark" style="line-height: 15px;">Equipment Purchase</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-2 mt-15 col-loan">

                    <a href="#exit_finance" class="card midcards h-100 loan_cards">

                        <div class="card-body text-center">

                            <p><img src="{{asset('public/pages/assets/img/loan_icons/exit_finance.png')}}" class="icon_size"></p>

                            <p class="m-0 text-dark" style="line-height: 15px;">Exit Finance</p>

                        </div>

                    </a>

                </div>

            </div> -->
            <!-- row 3 -->
<!--             <div class="row">

                <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 mt-15 col-loan">

                    <a href="#franchise_loan" class="card midcards h-100 loan_cards">

                        <div class="card-body text-center">

                            <p><img src="{{asset('public/pages/assets/img/loan_icons/franchise.png')}}" class="icon_size"></p>
                            

                            <p class="m-0 text-dark" style="line-height: 15px;">Franchise Loan</p>

                           

                        </div>

                    </a>

                </div>

                <div class="col-lg-2 col-md-2 mt-15 col-loan">

                    <a href="#growth_finance" class="card midcards h-100 loan_cards">

                        <div class="card-body text-center">

                            <p><img src="{{asset('public/pages/assets/img/loan_icons/growth_finance.png')}}" class="icon_size"></p>

                            <p class="m-0 text-dark" style="line-height: 15px;">Growth Finance</p>

                        </div>

                    </a>

                </div>

                <div class="col-lg-2 col-md-2 mt-15 col-loan">

                    <a href="#invoice_finance" class="card midcards h-100 loan_cards">

                        <div class="card-body text-center">

                            <p><img src="{{asset('public/pages/assets/img/loan_icons/invoice_finance.png')}}" class="icon_size"></p>

                            <p class="m-0 text-dark" style="line-height: 15px;">Invoice Finance</p>

                        </div>

                    </a>

                </div>

                <div class="col-lg-2 col-md-2 mt-15 col-loan">

                    <a href="#loan_refinance" class="card midcards h-100 loan_cards">

                        <div class="card-body text-center">

                            <p><img src="{{asset('public/pages/assets/img/loan_icons/loan_refinance.png')}}" class="icon_size"></p>

                            <p class="m-0 text-dark" style="line-height: 15px;">Loan Refinance</p>

                        </div>

                    </a>

                </div>

                <div class="col-lg-2 col-md-2 mt-15 col-loan">

                    <a href="#project_finance" class="card midcards h-100 loan_cards">

                        <div class="card-body text-center">

                            <p><img src="{{asset('public/pages/assets/img/loan_icons/project_fianance.png')}}" class="icon_size"></p>

                            <p class="m-0 text-dark" style="line-height: 15px;">Project Finance</p>

                        </div>

                    </a>

                </div>

            </div> -->
            <!-- row 4 -->
<!--             <div class="row">

                <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 mt-15 col-loan">

                    <a href="#short_term_loans" class="card midcards h-100 loan_cards">

                        <div class="card-body text-center">

                            <p><img src="{{asset('public/pages/assets/img/loan_icons/short_term.png')}}" class="icon_size"></p>
                            

                            <p class="m-0 text-dark" style="line-height: 15px;">Short Term Loans</p>

                            

                        </div>

                    </a>

                </div>

                <div class="col-lg-2 col-md-2 mt-15 col-loan">

                    <a href="#real_estate_mortgage" class="card midcards h-100 loan_cards">

                        <div class="card-body text-center">

                            <p><img src="{{asset('public/pages/assets/img/loan_icons/real_estate_mortgage.png')}}" class="icon_size"></p>

                            <p class="m-0 text-dark" style="line-height: 15px;">Real Estate Mortgages</p>

                        </div>

                    </a>

                </div>

                <div class="col-lg-2 col-md-2 mt-15 col-loan">

                    <a href="#startup_loan" class="card midcards h-100 loan_cards">

                        <div class="card-body text-center">

                            <p><img src="{{asset('public/pages/assets/img/loan_icons/startup.png')}}" class="icon_size"></p>

                            <p class="m-0 text-dark" style="line-height: 15px;">Startup Loan</p>

                        </div>

                    </a>

                </div>

                <div class="col-lg-2 col-md-2 mt-15 col-loan">

                    <a href="#stock_purchase" class="card midcards h-100 loan_cards">

                        <div class="card-body text-center">

                            <p><img src="{{asset('public/pages/assets/img/loan_icons/stock.png')}}" class="icon_size"></p>

                            <p class="m-0 text-dark" style="line-height: 15px;">Stock Purchase</p>

                        </div>

                    </a>

                </div>

                <div class="col-lg-2 col-md-2 mt-15 col-loan">

                    <a href="#trade_credit" class="card midcards h-100 loan_cards">

                        <div class="card-body text-center">

                            <p><img src="{{asset('public/pages/assets/img/loan_icons/trade_credit.png')}}" class="icon_size"></p>

                            <p class="m-0 text-dark" style="line-height: 15px;">Trade Credit</p>

                        </div>

                    </a>

                </div>

            </div> -->
            <!-- <div class="row">

                <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 mt-15">

                  <div class="card midcards h-100">

                    <div class="card-body text-center">

                      <p><img src="img/bg-img/phone-receiver.png" style="width: 25px;"></p>

                      <p class="m-0 text-dark" style="line-height: 15px;"><b>Apply now</b></p>

                      <p class="m-0" style="color:#d63d01;line-height: 25px;">07479546755</p>

                    </div>

                  </div>

                </div>

                <div class="col-lg-2 col-md-2 mt-15">

                  <div class="card midcards h-100">

                    <div class="card-body text-center">

                      <p><img src="img/bg-img/calendar.png" style="width: 25px;"></p>

                      <p class="m-0 text-dark" style="line-height: 15px;"><b>Set an appointment</b></p>

                    </div>

                  </div>

                </div>

                <div class="col-lg-2 col-md-2 mt-15">

                  <div class="card midcards h-100">

                    <div class="card-body text-center">

                      <p><img src="img/bg-img/funds.png" style="width: 30px;"></p>

                      <p class="m-0 text-dark" style="line-height: 15px;"><b>Cash advance</b></p>

                    </div>

                  </div>

                </div>

                <div class="col-lg-2 col-md-2 mt-15">

                  <div class="card midcards h-100">

                    <div class="card-body text-center">

                      <p style="margin-bottom: 6px;"><img src="img/bg-img/car.png" style="width: 40px;"></p>

                      <p class="m-0 text-dark" style="line-height: 15px;"><b>Car Loan</b></p>

                    </div>

                  </div>

                </div>

                <div class="col-lg-2 col-md-2 mt-15">

                  <div class="card midcards h-100">

                    <div class="card-body text-center">

                      <p><img src="img/bg-img/house.png" style="width: 30px;"></p>

                      <p class="m-0 text-dark" style="line-height: 15px;"><b>Property Loan</b></p>

                    </div>

                  </div>

                </div>

              </div> -->

        </div>

    </section>

@endsection