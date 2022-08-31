@extends('layouts.app')
@section('content')
{{--    home section--}}
    <section>
        <div class="container">
            <div class="row p-5">
                <div class="col-md-6 col-12 col-sm-6 col-xs-12 col-lg-6 col-xl-6">
                    <h5 class="text-white home-text-small">We Provide outsourced</h5>
                    <h1 class="text-white home-text">IT Services</h1>
                    <h5 class="text-white home-text-small">for start-ups & Mid-sized Companies</h5>
                    <div class="row mt-5">
                        <button class="btn text-white text-capitalize learn-more-btn-1 mr-2">learn more</button>
                        <button class="btn text-white text-capitalize learn-more-btn-2 ml-2">learn more</button>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-sm-6 col-xs-12 col-lg-6 col-xl-6">
                    <img src="{{ url('public/images/home.png') }}" class="" width="616px">
                </div>
            </div>
        </div>
    </section>
{{--    home section (end)--}}

{{--    about section--}}
    <section class="mt-5">
        <div class="container">
            <div class="row p-5">
                <div class="col-md-7 col-12 col-sm-7 col-xs-12 col-lg-7 col-xl-7">
                    <div>
                        <h6 class="text-primary text-uppercase">who we are</h6>
                        <h1 class="text-white about-text">
                            Custome IT Solution<br>
                            for your Business.
                        </h1>
                        <p class="text-white mt-4">
                            It provide solutions that manage the entire
                            IT service delivery process, from request
                            and ticket generation, to research , anallysis,
                            issue resolution, and knowledge capture.
                        </p>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-2 col-12 col-sm-2 col-xs-12 col-lg-2 col-xl-2">
                            <div class="video-player p-2">
                                <div class="video-player-btn pl-4 pt-3">
                                    <img src="{{ url('public/images/video.png') }}" class="video-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 col-12 col-sm-10 col-xs-12 col-lg-10 col-xl-10 pt-4">
                            <p class="text-white">See How We Work</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-12 col-sm-5 col-xs-12 col-lg-5 col-xl-5">
                    <div class="about-img-box">
                    </div>
                    <img src="{{ url('public/images/about.png') }}" class="about-img">
                </div>
            </div>
        </div>
    </section>
{{--    sbout section (end)--}}

{{--    service section--}}
    <section class="mt-5">
        <div class="container">
            <h1 class="text-white text-center text-capitalize">Our Services</h1>
            <div class="row p-5 mt-5">
                <div class="top-card-one p-2">
                    <div class="top-card-two p-2">
                        <div class="top-card-three p-2">
                            <div class="top-card-four p-2">
                                <div class="top-card-five p-2">
                                    <div class="top-card-six p-2">
                                        <div class="top-card">
                                            <img src="{{ url('public/images/web_development.png') }}" width="35px" class="mt-4 ml-4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3 service-card">
                        <div class="card-body p-5">
                            <h2 class="card-title text-capitalize text-center text-blue pt-5">Web development</h2>
                            <h4 class="card-text justify-content-start pt-4 text-white">
                                Developing a website for your
                                business is the only way to
                                reach people in your business threw the internet which widely use in the world.</h4>
                        </div>
                    </div>
                </div>
                <div class="top-card-right-one p-2">
                    <div class="top-card-right-two p-2">
                        <div class="top-card-right-three p-2">
                            <div class="top-card-right-four p-2">
                                <div class="top-card-right-five p-2">
                                    <div class="top-card-right-six p-2">
                                        <div class="top-right-card">
                                            <img src="{{ url('public/images/app_development.png') }}" width="35px" class="m-4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3 service-card">
                        <div class="card-body p-5">
                            <h2 class="card-title text-capitalize text-center text-primary pt-5">App Development</h2>
                            <h4 class="card-text justify-content-start pt-4 text-white">we are a mobile app development
                                company that offers a complete
                                cycle of mobile app design,
                                integration, and development
                                services.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-5 mt-5">
                <div class="col-md-6">
                    <div class="top-card-down-one p-2">
                        <div class="top-card-down-two p-2">
                            <div class="top-card-down-three p-2">
                                <div class="top-card-down-four p-2">
                                    <div class="top-card-down-five p-2">
                                        <div class="top-card-down-six p-2">
                                            <div class="top-down-card">
                                                <img src="{{ url('public/images/graphics.png') }}" width="35px" class="m-4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 service-card">
                        <div class="card-body p-5">
                            <h2 class="card-title text-capitalize text-center text-primary pt-5">Graphics Design</h2>
                            <h4 class="card-text justify-content-start pt-4 text-white">
                                Companies who offer Graphics
                                design services know how
                                graphics is the process of cre-
                                ating visual content in form of
                                photos ,illustration,typography,
                                icons etc.
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="top-card-right-down-one p-2">
                        <div class="top-card-right-down-two p-2">
                            <div class="top-card-right-down-three p-2">
                                <div class="top-card-right-down-four p-2">
                                    <div class="top-card-right-down-five p-2">
                                        <div class="top-card-right-down-six p-2">
                                            <div class="top-right-down-card">
                                                <img src="{{ url('public/images/graphics.png') }}" width="35px" class="m-4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 service-card">
                        <div class="card-body p-5">
                            <h2 class="card-title text-capitalize text-center text-blue pt-5">SEO/Digital Marketing </h2>
                            <h4 class="card-text justify-content-start pt-4 text-white">
                                SEO and content marketing have
                                changed the digital marketing
                                world. SEO is actually strategized
                                around content marketing since
                                every website needs words,
                                articles, substance, keywords, etc.
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    service section(end)--}}

{{--    counter section--}}
    <section class="mt-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                    <h2 class="text-white">4.5k</h2>
                    <h5 class="text-white">Job done sucessfully</h5>
                </div>
                <div class="col-md-3">
                    <h2 class="text-white">10+</h2>
                    <h5 class="text-white">Year Experience</h5>
                </div>
                <div class="col-md-3">
                    <h2 class="text-white">1.8k+</h2>
                    <h5 class="text-white">World wide clients</h5>
                </div>
                <div class="col-md-3">
                    <h2 class="text-white">20+</h2>
                    <h5 class="text-white">Trusted company</h5>
                </div>
            </div>
        </div>
    </section>
{{--    counter section (end)--}}
@endsection
