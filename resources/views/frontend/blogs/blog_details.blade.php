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
                                            <h5 class="title"><a
                                                    href="{{ route('blog.details', $data->id) }}">{{ $data->blog_title }}</a>
                                            </h5>
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
                                    <li class="sidebar__cat__item"><a
                                            href="{{ route('category.blogs', $category->id) }}">{{ $category->blog_category }}
                                            @if ($catWiseBlogsCount != 0)
                                                {{ '(' . $catWiseBlogsCount . ')' }}
                                            @endif
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-details-area-end -->

    <!-- contact-area -->
    <section class="homeContact homeContact__style__two">
        <div class="container">
            <div class="homeContact__wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section__title">
                            <span class="sub-title">07 - Say hello</span>
                            <h2 class="title">Any questions? Feel free <br> to contact</h2>
                        </div>
                        <div class="homeContact__content">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form</p>
                            <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="homeContact__form">
                            <form action="#">
                                <input type="text" placeholder="Enter name*">
                                <input type="email" placeholder="Enter mail*">
                                <input type="number" placeholder="Enter number*">
                                <textarea name="message" placeholder="Enter Massage*"></textarea>
                                <button type="submit">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->
@endsection
