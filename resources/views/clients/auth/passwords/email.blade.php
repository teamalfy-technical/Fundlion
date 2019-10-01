<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$url);
$link = end($link_array);
$link = ucwords(str_replace("_"," ",$link));
?>

@extends('clients.layouts.auth.layout')
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

                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('clients.password.email') }}" role="form">
                                @csrf

                                @if (Session('success'))
                                    <div id="alert-box" class="alert alert-success alert-rounded" role="alert">
                                        <b>Success!</b> {{ Session('success') }}
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label for="email">Enter your email address to reset your password</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    @if (count($errors) > 0)
                                        @foreach($errors->all() as $error)
                                            <div id="alert-box" class="alert alert-danger alert-rounded" role="alert">
                                                <i class="fa fa-stop"></i> <b>Error!</b> {{ $error }}
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="form-group text-center mt-4 mb-0">
                                    <button type="submit" class="btn btn-success" style="width: 10rem">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->

    <section style="background-image: url({{asset('public/pages/assets/img/core-img/dotted_box.png')}});height: 80px;background-size: cover;"></section>

@endsection