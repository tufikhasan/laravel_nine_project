@extends('frontend.app_master')
@section('site_title')
    DevLand - Personal Portfolio
@endsection
@section('main')
    @include('frontend.home_all.home_slide')
    @include('frontend.home_all.about')


    <!-- services-area -->
    @include('frontend.home_all.service')
    <!-- services-area-end -->

    <!-- work-process-area -->
    <section class="work__process">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section__title text-center">
                        <span class="sub-title">03 - Working Process</span>
                        <h2 class="title">A clear product design process is the basis of success</h2>
                    </div>
                </div>
            </div>
            <div class="row work__process__wrap">
                <div class="col">
                    <div class="work__process__item">
                        <span class="work__process_step">Step - 01</span>
                        <div class="work__process__icon">
                            <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon01.png') }}">
                        </div>
                        <div class="work__process__content">
                            <h4 class="title">Discover</h4>
                            <p>Initial ideas or inspiration & Establishment of user needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="work__process__item">
                        <span class="work__process_step">Step - 02</span>
                        <div class="work__process__icon">
                            <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon02.png') }}">
                        </div>
                        <div class="work__process__content">
                            <h4 class="title">Define</h4>
                            <p>Interpretation & Alignment of findings to project objectives.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="work__process__item">
                        <span class="work__process_step">Step - 03</span>
                        <div class="work__process__icon">
                            <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon03.png') }}">
                        </div>
                        <div class="work__process__content">
                            <h4 class="title">Develop</h4>
                            <p>Design-Led concept and Proposals hearted & assessed</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="work__process__item">
                        <span class="work__process_step">Step - 04</span>
                        <div class="work__process__icon">
                            <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon04.png') }}">
                        </div>
                        <div class="work__process__content">
                            <h4 class="title">Deliver</h4>
                            <p>Process outcomes finalised & Implemented</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- work-process-area-end -->

    <!-- portfolio-area -->
    @include('frontend.home_all.portfolio')
    <!-- portfolio-area-end -->

    <!-- partner-area -->
    @include('frontend.home_all.partners')
    <!-- partner-area-end -->

    <!-- testimonial-area -->
    @include('frontend.home_all.testimonial')
    <!-- testimonial-area-end -->

    <!-- blog-area -->
    @include('frontend.home_all.blog')
    <!-- blog-area-end -->

    <!-- Say-Hello -->
    @include('frontend.components.say_hello', [
        'sayHelloSectionCss' => 'homeContact',
    ])
    <!-- Say-Hello -->
@endsection
