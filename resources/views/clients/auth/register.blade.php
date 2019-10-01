<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/', $url);
$link = end($link_array);
$link = ucwords(str_replace("_", " ", $link));
?>

{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}

@extends('clients.layouts.auth.layout')
@section('title', "$link :: Fund Lion")
@section('content')

    <!-- ##### Welcome Area Start ##### -->
    <section class="white-bg relative section-padding" id="home">

        <div class="content" style="margin-top: 12rem;">
            <div class="container h-100">
                <div class="row mb-50 ">
                    <!-- Welcome Content -->
                    <div class="col-lg-3 col-md-3 p-0">
                        <div class="card mt-150" style="border-color:#ccc;box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);">
                            <div class="card-body">
                                <h5 class="text-left mt-4" style="font-weight: 600;">Tell us a little About your
                                    business</h5>
                                <p style="color: #000; font-size: 14px;">Fundlion can help you fund your business,car,
                                    house etc</p>
                                <div class="row">
                                    <div class="col-6"><img
                                            src="{{asset('public/pages/assets/img/partners/bbb-featured.png')}}"
                                            style="max-width: 100%;"></div>
                                    <div class="col-6"><img
                                            src="{{asset('public/pages/assets/img/partners/privacy-seal_blog.png')}}"
                                            style="max-width: 100%;"></div>
                                    <div class="col-12 pt-2"><p><a href="#">Click to read more...</a></p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="card" style="border-color:#fff;">
                            <div class="card-body text-center">
                                <div
                                    style="  margin-top: -20px;  border-radius: 12px;  position: relative; background-color: #fff;">

                                    <form method="POST" action="{{ route('clients.register.submit') }}" role="form">
                                        @csrf
                                        @if (count($errors) > 0)
                                            <div id="alert-box" class="alert alert-danger alert-rounded" role="alert">
                                                <i class="fa fa-stop"></i> <b>Error!</b> Please check all form fields
                                                for errors!
                                            </div>
                                        @endif
                                        <section id="step1_section">
                                            <h5 class="text-center mt-4">Company Information</h5>

                                            <div class="form-group">
                                                <select name="country_id" class="form-control @error('country_id') is-invalid @enderror"
                                                        required>
                                                    @if(old('country_id') !== null)
                                                        <?php if (old('country_id') !== null) {
                                                            $current = \App\FlCountry::findOrFail(old('country_id'));
                                                        } ?>
                                                        <option value="{{$current->id}}" hidden
                                                                selected>{{$current->country}} ({{$country->code}} {{$country->zip}})</option>
                                                    @endif
                                                    @foreach($countries as $country)
                                                        @if($country->code === "GB")
                                                            <option value="{{$country->id}}" selected
                                                                    hidden>{{$country->country}} ({{$country->code}} {{$country->zip}})</option> @endif
                                                        <option value="{{$country->id}}">{{$country->country}} ({{$country->code}} {{$country->zip}})</option>
                                                    @endforeach
                                                </select>
                                                @error('country_id') <span class="invalid-feedback"
                                                                           role="alert"><strong>{{ $message }}</strong></span> @enderror
                                            </div>

                                            {{--											<div class="form-group">--}}
                                            {{--												<ul><span id="displayCompany"></span></ul>--}}
                                            {{--											</div>--}}

                                            <div class="form-group">
                                                <input id="company" type="text"
                                                       class="form-control @error('company') is-invalid @enderror"
                                                       name="company" value="{{ old('company') }}"
                                                       placeholder="Company Name" required
                                                       autofocus>
                                                @error('company') <span class="invalid-feedback"
                                                                        srole="alert"><strong>{{ $message }}</strong></span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <select name="business_structure_id"
                                                        class="form-control @error('business_structure_id') is-invalid @enderror"
                                                        required>
                                                    @if(old('business_structure_id') === null)
                                                        <option value="" hidden>Select Company Trading As...
                                                        </option> @else
                                                        <?php if (old('business_structure_id') !== null) {
                                                            $tradeAs = \App\FlBusinessStructure::findOrFail(old('business_structure_id'));
                                                        } ?>
                                                        <option value="{{$tradeAs->id}}" hidden
                                                                selected>{{$tradeAs->structure}}</option>
                                                    @endif
                                                    @foreach($trading_as as $structure)
                                                        <option
                                                            value="{{$structure->id}}">{{$structure->structure}}</option> @endforeach
                                                </select>
                                                @error('business_structure_id') <span class="invalid-feedback"
                                                                                      role="alert"><strong>{{ $message }}</strong></span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <select name="industry_id"
                                                        class="form-control @error('industry_id') is-invalid @enderror"
                                                        required>
                                                    @if(old('industry_id') === null)
                                                        <option value="" hidden>Select Industry Sector...</option> @else
                                                        <?php if (old('industry_id') !== null) {
                                                            $indus = \App\FlIndustries::findOrFail(old('industry_id'));
                                                        } ?>
                                                        <option value="{{$indus->id}}" hidden
                                                                selected>{{$indus->industry}}</option>
                                                    @endif
                                                    @foreach($industries as $industry)
                                                        <option
                                                            value="{{$industry->id}}">{{$industry->industry}}</option> @endforeach
                                                </select>
                                                @error('industry_id') <span class="invalid-feedback"
                                                                            role="alert"><strong>{{ $message }}</strong></span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <select name="trading_for_id"
                                                        class="form-control @error('trading_for_id') is-invalid @enderror"
                                                        required>
                                                    @if(old('trading_for_id') === null)
                                                        <option value="" hidden>Select Company Trading For...
                                                        </option> @else
                                                        <?php if (old('trading_for_id') !== null) {
                                                            $tradeFor = \App\FlTradingFor::findOrFail(old('trading_for_id'));
                                                        } ?>
                                                        <option value="{{$tradeFor->id}}" hidden
                                                                selected>{{$tradeFor->trade_for}}</option>
                                                    @endif
                                                    @foreach($trading_for as $trade_for)
                                                        <option
                                                            value="{{$trade_for->id}}">{{$trade_for->trade_for}}</option> @endforeach
                                                </select>
                                                @error('trading_for_id') <span class="invalid-feedback"
                                                                               role="alert"><strong>{{ $message }}</strong></span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <select name="revenue_id"
                                                        class="form-control @error('revenue_id') is-invalid @enderror"
                                                        required>
                                                    @if(old('revenue_id') === null)
                                                        <option value="" hidden>Annual Business Revenue</option> @else
                                                        <?php if (old('revenue_id') !== null) {
                                                            $rev = \App\FlRevenue::findOrFail(old('revenue_id'));
                                                        } ?>
                                                        <option value="{{$rev->id}}" hidden
                                                                selected>{{$rev->revenue}}</option>
                                                    @endif
                                                    @foreach($revenues as $revenue)
                                                        <option
                                                            value="{{$revenue->id}}">{{$revenue->revenue}}</option> @endforeach
                                                </select>
                                                @error('revenue_id') <span class="invalid-feedback"
                                                                           role="alert"><strong>{{ $message }}</strong></span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <select name="profitable"
                                                        class="form-control @error('profitable') is-invalid @enderror"
                                                        required>
                                                    @if(old('profitable') === null)
                                                        <option value="" hidden>Is Your Company Profitable?
                                                        </option> @else
                                                        <option value="{{old('profitable')}}" hidden selected>
                                                            @if (old('profitable') !== null && old('profitable') === "0")
                                                                No @elseif (old('profitable') !== null && old('profitable') === "1")
                                                                Yes @endif </option>
                                                    @endif
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                </select>
                                                @error('profitable') <span class="invalid-feedback"
                                                                           role="alert"><strong>{{ $message }}</strong></span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <input id="address_one" name="address_one" type="text"
                                                       class="form-control @error('address_one') is-invalid @enderror"
                                                       value="{{ old('address_one') }}"
                                                       placeholder="Business Address 'Line 1'" required>
                                                @error('address_one') <span class="invalid-feedback"
                                                                            role="alert"><strong>{{ $message }}</strong></span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <input id="address_two" name="address_two" type="text"
                                                       class="form-control @error('address_two') is-invalid @enderror"
                                                       value="{{ old('address_two') }}"
                                                       placeholder="Business Address 'Line 2' (optional)"
                                                       spellcheck="true">
                                                @error('address_two') <span class="invalid-feedback"
                                                                            role="alert"><strong>{{ $message }}</strong></span> @enderror
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8 col-md-8 col-xl-8">
                                                    <div class="form-group">
                                                        <input id="city" name="city" type="text"
                                                               class="form-control @error('city') is-invalid @enderror"
                                                               value="{{ old('city') }}"
                                                               placeholder="City" required>
                                                        @error('city') <span class="invalid-feedback"
                                                                             role="alert"><strong>{{ $message }}</strong></span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-xl-4">
                                                    <div class="form-group">
                                                        <input id="zip" name="zip" type="text"
                                                               class="form-control @error('zip') is-invalid @enderror"
                                                               value="{{ old('zip') }}"
                                                               placeholder="Post / Zip code" required>
                                                        @error('zip') <span class="invalid-feedback"
                                                                            role="alert"><strong>{{ $message }}</strong></span> @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-xl-12">
                                                    <div class="form-group">
                                                        <input id="business_phone" name="business_phone" type="text"
                                                               class="form-control @error('business_phone') is-invalid @enderror"
                                                               value="{{ old('business_phone') }}"
                                                               placeholder="Business Phone Number" required>
                                                        @error('business_phone') <span class="invalid-feedback"
                                                                                       role="alert"><strong>{{ $message }}</strong></span> @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section id="step3_section">
                                            <h5 class="text-center mt-4">Contact Information</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-xl-6">
                                                    <div class="form-group">
                                                        <input id="first_name" name="first_name" type="text"
                                                               class="form-control @error('first_name') is-invalid @enderror"
                                                               value="{{ old('first_name') }}" placeholder="First Name"
                                                               spellcheck="true" required>
                                                        @error('first_name') <span class="invalid-feedback"
                                                                                   role="alert"><strong>{{ $message }}</strong></span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-xl-6">
                                                    <div class="form-group">
                                                        <input id="last_name" name="last_name" type="text"
                                                               class="form-control @error('last_name') is-invalid @enderror"
                                                               value="{{ old('last_name') }}" placeholder="Last Name"
                                                               spellcheck="true" required>
                                                        @error('last_name') <span class="invalid-feedback"
                                                                                  role="alert"><strong>{{ $message }}</strong></span> @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <select name="role_id"
                                                        class="form-control @error('role_id') is-invalid @enderror"
                                                        required>
                                                    @if(old('role_id') === null)
                                                        <option value="" hidden>Select Role At Company...</option> @else
                                                        <?php if (old('role_id') !== null) {
                                                            $name = \App\FlRole::findOrFail(old('role_id'));
                                                        } ?>
                                                        <option value="{{$name->id}}" hidden
                                                                selected>{{$name->role}}</option>
                                                    @endif
                                                    @foreach($roles as $role)
                                                        <option
                                                            value="{{$role->id}}">{{$role->role}}</option> @endforeach
                                                </select>
                                                @error('role_id') <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <input id="phone" name="phone" type="text"
                                                       class="form-control @error('phone') is-invalid @enderror"
                                                       value="{{ old('phone') }}"
                                                       placeholder="Preferred Telephone Number (optional)">
                                                @error('phone') <span class="invalid-feedback"
                                                                      role="alert"><strong>{{ $message }}</strong></span> @enderror
                                            </div>
                                            <div class="form-group">
                                                {{--<input type="email" class="form-control" style="font-size: 12px;">--}}
                                                <input id="email" type="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       name="email" value="{{ old('email') }}"
                                                       placeholder="Email Address" required
                                                       autocomplete="email">
                                                @error('email') <span class="invalid-feedback"
                                                                      role="alert"><strong>{{ $message }}</strong></span> @enderror
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-xl-6">
                                                    <div class="form-group">
                                                        <input id="password" name="password" type="password"
                                                               class="form-control @error('password') is-invalid @enderror"
                                                               value="{{ old('password') }}" placeholder="Password"
                                                               required
                                                               autocomplete="new-password">
                                                        @error('password') <span class="invalid-feedback"
                                                                                 role="alert"><strong>{{ $message }}</strong></span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-xl-6">
                                                    <input id="password-confirm" name="password_confirmation"
                                                           type="password"
                                                           class="form-control @error('password_confirmation') is-invalid @enderror"
                                                           value="{{ old('password_confirmation') }}"
                                                           placeholder="Confirm Password"
                                                           autocomplete="password_confirmation">
                                                    @error('password_confirmation') <span class="invalid-feedback"
                                                                                          role="alert"><strong>{{ $message }}</strong></span> @enderror
                                                </div>
                                            </div>
                                            <div class="form-check" style="text-align: left;">
                                                <input type="checkbox" class="form-check-input" id="agree" required>
                                                <label class="form-check-label" style="font-size: 12px;" for="agree">I
                                                    Agree to Fundlion <a
                                                        href="{{route('pages.terms')}}" style="color:#d53d00;"
                                                        target="_blank">Terms & Condition</a>
                                                    and <a href="{{route('pages.privacy')}}" style="color:#d53d00;"
                                                           target="_blank">Privacy
                                                        Policy</a></label>
                                            </div>
                                            <div class="form-group text-right">
                                                <input type="hidden" name="loan_amount" id="loan_amount"
                                                       value="{{session('loan_amount')}}">
                                                <input type="hidden" name="loan_purpose_id" id="loan_purpose_id"
                                                       value="{{session('loan_purpose_id')}}">
                                                <input type="hidden" name="loan_duration_id" id="loan_duration_id"
                                                       value="{{session('loan_duration_id')}}">
                                                <button type="submit" id="step3" class="btn btn-success"
                                                        style="width: 7rem">Submit
                                                </button>
                                            </div>
                                        </section>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        style="background-image: url({{asset('public/pages/assets/img/core-img/dotted_box.png')}});height: 80px;background-size: cover;"></section>
    <!-- ##### Welcome Area End ##### -->
@endsection
