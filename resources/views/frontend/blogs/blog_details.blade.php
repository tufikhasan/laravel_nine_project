@extends('frontend.app_master')
@section('site_title')
    {{ $blog->blog_title }} - Blog
@endsection
@section('main')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">{{ $blog->blog_title }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">BLOG DETAILS</li>
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

    <!-- blog-details-area -->
    <section class="standard__blog blog__details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="standard__blog__post">
                        <div class="standard__blog__thumb">
                            <img src="{{ !empty($blog->blog_image) ? url('upload/blog/' . $blog->blog_image) : url('upload/portfolio.jpg') }}"
                                alt="{{ $blog->blog_title }}">
                        </div>
                        <div class="blog__details__content services__details__content">
                            <ul class="blog__post__meta">
                                <li><i class="fal fa-calendar-alt"></i>
                                    {{ Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}
                                </li>
                            </ul>
                            <h2 class="title">{{ $blog->blog_title }}</h2>
                            <div>{!! $blog->blog_description !!}</div>
                        </div>
                        <div class="blog__details__bottom">
                            <ul class="blog__details__tag">
                                <li class="title">Tag:</li>
                                <li class="tags-list">
                                    @php
                                        $tags = explode(',', $blog->blog_tags);
                                    @endphp
                                    @foreach ($tags as $tag)
                                        <a>{{ $tag }}</a>
                                    @endforeach
                                </li>
                            </ul>
                            <ul class="blog__details__social">
                                <li class="title">Share :</li>
                                <li class="social-icons">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- Blog Right Sidebar start --}}
                <div class="col-lg-4">
                    @include('frontend.components.blog_right_sidebar', [
                        'allBlogs' => $allBlogs,
                        'categories' => $categories,
                    ])
                </div>
                {{-- Blog Right Sidebar end --}}
            </div>
        </div>
    </section>
    <!-- blog-details-area-end -->

    <!-- Say-Hello -->
    @include('frontend.components.say_hello', [
        'sayHelloSectionCss' => 'homeContact homeContact__style__two',
    ])
    <!-- Say-Hello -->
@endsection
