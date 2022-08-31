@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('public/css/service-style.css') }}">
@endsection
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-5">
                    <h6 class="text-primary text-capitalize">Our Services</h6>
                    <h1 class="text-white">
                        Web Development
                        Services
                    </h1>
                    <p class="text-white">
                        Enhance your vision for better life.
                    </p>
                </div>
                <div class="col-md-6 p-5">
{{--                    <div class="hexagon">--}}
{{--                        <span></span>--}}
{{--                        <div class="inner-hexagon">--}}
{{--                            <span></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="service-box p-3">
                        <div class="service-box-two p-3">
                            <div class="service-box-three p-3">
                                <div class="inner-service-box">
{{--                                    <img src="{{ asset('public/images/inner-service.png') }}">--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container p-5">
            <h1 class="text-white text-center mt-5">
                Professional Web
                Development Service
            </h1>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row p-5">
                <div class="col-md-4">
                    <div class="card mb-3 service-card">
                        <div class="card-body">
                            <h4 class="card-title text-capitalize text-center text-blue">Web development</h4>
                            <p class="card-text justify-content-start pt-4 text-white">
                                Developing a website for your
                                business is the only way to
                                reach people in your business threw the internet which widely use in the world.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <p class="text-white">div-2</p>
                </div>
                <div class="col-md-4">
                    <p class="text-white">div-3</p>
                </div>
            </div>
        </div>
    </section>
@endsection
