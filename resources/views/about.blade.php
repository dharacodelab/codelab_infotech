@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('public/css/about-style.css') }}">
@endsection
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-5">
                    <h6 class="text-primary text-uppercase">WHO WE ARE</h6>
                    <h1 class="text-white">
                        Custom IT Solution
                        for your Business.
                    </h1>
                    <p class="text-white mt-5">
                        It provide solutions that manage the entire
                        IT service delivery process, from request
                        and ticket generation, to research , anallysis,
                        issue resolution, and knowledge capture.
                    </p>
                    <div class="row mt-5">
                        <div class="col-md-2 col-12 col-sm-2 col-xs-12 col-lg-2 col-xl-2">
                            <div class="video-player p-2">
                                <div class="video-player-btn pl-4 pt-3">
                                    <img src="{{ url('public/images/video.png') }}" class="video-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 col-12 col-sm-10 col-xs-12 col-lg-10 col-xl-10 pt-4">
                            <p class="text-white ml-3">See How We Work</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5">
                    <ul class="p-5 text-white about-li">
                        <li>
                            <h4 class="m-3">Created 30+ unique sections</h4>
                        </li>
                        <li>
                            <h4 class="m-3">Super fast loading speed</h4>
                        </li>
                        <li>
                            <h4 class="m-3">Fully responsive at any devices</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="">
            <div class="container">
                <div class="row p-5">
                    <div class="col-md-5">
                        <div class="about-image-box">
                            <img src="{{ asset('public/images/about-image-one.png') }}" height="470px" width="350px">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div>
                            <img src="{{ asset('public/images/about-image-two.png') }}" height="470px" width="190px">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <img src="{{ asset('public/images/about-image-three.png') }}" height="470px" width="230px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
