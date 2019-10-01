<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$url);
$link = end($link_array);
$link = ucwords(str_replace("_"," ",$link));
?>

@extends('users.layouts.auth.layout')
@section('title', "$link :: Fundlion")
@section('content')

    <!-- ##### Welcome Area Start ##### -->
    <section class="hero-section white-bg relative section-padding" id="home">
        <div class="hero-section-content" style="margin-top: 12rem;">

            <div class="container h-100">

                <div class="row h-100 mb-50 align-items-center">
                    <!-- Welcome Content -->
                    <!-- <div class="col-12 col-lg-6 offset-lg-3 col-md-12">

                    </div> -->
                    <div class="card" style="border-color:#fff;width: 26rem;">
                        <div class="card-body text-center">
                            <img src="{{asset('public/pages/assets/img/core-img/logo2.png')}}" style="width: 15rem;margin-bottom: 40px;" alt="logo">
                            <h5>Admin Login</h5>
                            <br>
                            <form method="POST" action="{{ route('users.login') }}" role="form">
                                @csrf
                                @if (Session('success'))
                                    <div id="alert-box" class="alert alert-success alert-rounded" role="alert">
                                        <b>Success!</b> {{ Session('success') }}
                                    </div>
                                @endif
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                                    <input id="active" type="hidden" class="form-control @error('active') is-invalid @enderror" name="active">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    @error('active')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-check text-left">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">Remember me</label>
                                </div>
                                <div class="form-group text-center mt-4 mb-0">
                                    <button type="submit" class="btn btn-success" style="width: 10rem">Login</button>
                                </div>
                                <div class="form-group text-center">
                                    <a href="{{ route('users.password.request') }}" class="text-dark" style="font-size: 14px;font-weight:600">Forgot password?</a>
                                </div>
                            </form>
                            {{--<div class="form-group text-center mt-5">--}}
                                {{--<p>If you don't have an account <a href="{{route('users.register')}}" style="font-size: 14px;font-weight: 500; color: #d53d00;">click here to sign up</a></p>--}}
                            {{--</div>--}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->

    <section style="background-image: url({{asset('public/pages/assets/img/core-img/dotted_box.png')}});height: 80px;background-size: cover;"></section>

@endsection