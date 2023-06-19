@php
    $multi_image = App\Models\Multi_image::take(6)->get();
@endphp
@extends('frontend.app_master')
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
                                <li class="post-share"><a href="#"><i class="fal fa-share-all"></i> (18)</a></li>
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
                <div class="col-lg-4">
                    <aside class="blog__sidebar">
                        <div class="widget">
                            <form action="#" class="search-form">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="fal fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">Recent Blog</h4>
                            <ul class="rc__post">
                                @foreach ($allBlogs as $data)
                                    <li class="rc__post__item">
                                        <div class="rc__post__thumb">
                                            <a href="{{ route('blog.details', $data->id) }}"><img
                                                    src="{{ !empty($data->blog_image) ? url('upload/blog/' . $data->blog_image) : url('upload/portfolio.jpg') }}"
                                                    alt="{{ $data->blog_title }}"></a>

                                        </div>
                                        <div class="rc__post__content">
                                            <h5 class="title"><a href="blog-details.html">{{ $data->blog_title }}</a></h5>
                                            <span class="post-date"><i class="fal fa-calendar-alt"></i>
                                                {{ Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</span>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">Categories</h4>
                            <ul class="sidebar__cat">
                                @foreach ($categories as $category)
                                    @php
                                        $catWiseBlogsCount = App\Models\Blogs::catWiseBlogsCount($category->id);
                                    @endphp
                                    <li class="sidebar__cat__item"><a href="blog.html">{{ $category->blog_category }}
                                            {{ '(' . $catWiseBlogsCount . ')' }}</a>
                                    </li>
                                    {{-- <li class="sidebar__cat__item"><a href="blog.html">Web Design (6)</a></li> --}}
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-details-area-end -->
@endsection
