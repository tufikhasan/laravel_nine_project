@extends('frontend.app_master')
@section('site_title')
    Portfolios - Personal Portfolio
@endsection
@section('main')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">Case Study</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">PORTFOLIO</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__wrap__icon">
            <ul>
                @foreach ($multi_image as $image)
                    <li><img src="{{ url('upload/multi/' . $image->image) }}" alt=""></li>
                @endforeach
            </ul>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- portfolio-area -->
    <section class="portfolio__inner">
        <div class="container">
            <div class="portfolio__inner__active">
                @forelse ($portfolios as $portfolio)
                    <div class="portfolio__inner__item grid-item cat-two cat-three">
                        <div class="row gx-0 align-items-center">
                            <div class="col-lg-6 col-md-10">
                                <div class="portfolio__inner__thumb">
                                    <a href="{{ route('portfolio.details', $portfolio->id) }}">
                                        <img src="{{ !empty($portfolio->portfolio_image) ? url('upload/portfolio/' . $portfolio->portfolio_image) : url('upload/portfolio.png') }}"
                                            alt="{{ $portfolio->portfolio_title }}">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-10">
                                <div class="portfolio__inner__content">
                                    <h2 class="title"><a
                                            href="{{ route('portfolio.details', $portfolio->id) }}">{{ $portfolio->portfolio_title }}</a>
                                    </h2>
                                    <div>{!! Str::limit($portfolio->portfolio_description, 60) !!}</div>
                                    <a href="{{ route('portfolio.details', $portfolio->id) }}" class="link">View Case
                                        Study</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <img src="{{ asset('no_data.jpg') }}">
                @endforelse

            </div>
            <div class="pagination-wrap">
                {{ $portfolios->links('vendor.pagination.custom_pagination') }}
            </div>
        </div>
    </section>
    <!-- portfolio-area-end -->

    <!-- Say-Hello -->
    @include('frontend.components.say_hello', [
        'sayHelloSectionCss' => 'homeContact homeContact__style__two',
    ])
    <!-- Say-Hello -->
@endsection
