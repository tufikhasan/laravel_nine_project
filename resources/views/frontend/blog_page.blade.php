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
                        <h2 class="title">Recent Article</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">BLOG</li>
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

    <!-- blog-area -->
    <section class="standard__blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @forelse ($allBlogs as $data)
                        <div class="standard__blog__post">
                            <div class="standard__blog__thumb">
                                <a href="{{ route('blog.details', $data->id) }}"><img
                                        src="{{ !empty($data->blog_image) ? url('upload/blog/' . $data->blog_image) : url('upload/portfolio.jpg') }}"
                                        alt="{{ $data->blog_title }}"></a>
                                <a href="{{ route('blog.details', $data->id) }}" class="blog__link"><i
                                        class="far fa-long-arrow-right"></i></a>
                            </div>
                            <div class="standard__blog__content">
                                <h2 class="title"><a
                                        href="{{ route('blog.details', $data->id) }}">{{ $data->blog_title }}</a></h2>
                                <p>{!! $data->blog_description !!}</p>
                                <ul class="blog__post__meta">
                                    <li><i class="fal fa-calendar-alt"></i>
                                        {{ Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</li>
                                </ul>
                            </div>
                        </div>
                    @empty
                        <img src="{{ asset('no_data.jpg') }}">
                    @endforelse

                    <div class="pagination-wrap">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="far fa-long-arrow-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                        </nav>
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
                                @foreach ($recentBlog as $data)
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
    <!-- blog-area-end -->
@endsection
