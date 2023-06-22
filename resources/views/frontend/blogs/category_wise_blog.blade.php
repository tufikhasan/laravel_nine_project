@extends('frontend.app_master')
@section('site_title')
    {{ $category->blog_category }} - Category
@endsection
@section('main')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">{{ $category->blog_category }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">CATEGORY</li>
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
                    @forelse ($categoryBlogs as $data)
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
                                <p>{!! Str::limit($data->blog_description, 60) !!}</p>
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
                        {{ $categoryBlogs->links('vendor.pagination.custom_pagination') }}
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
    <!-- blog-area-end -->

    <!-- Say-Hello -->
    @include('frontend.components.say_hello', [
        'sayHelloSectionCss' => 'homeContact homeContact__style__two',
    ])
    <!-- Say-Hello -->
@endsection
