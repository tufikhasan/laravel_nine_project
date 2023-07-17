@php
    $blogs = App\Models\Blogs::latest()
        ->limit(3)
        ->get();
@endphp
<section class="blog">
    <div class="container">
        <div class="row gx-0 justify-content-center">
            @forelse ($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="blog__post__item">
                        <div class="blog__post__thumb">
                            <a href="{{ route('blog.details', $blog->id) }}">
                                <img src="{{ !empty($blog->blog_image) ? url('upload/blog/' . $blog->blog_image) : url('upload/service.png') }}"
                                    alt="{{ $blog->blog_title }}">
                            </a>
                            <div class="blog__post__tags">
                                <a
                                    href="{{ route('blog.details', $blog->id) }}">{{ $blog['categoryFun']['blog_category'] }}</a>
                            </div>
                        </div>
                        <div class="blog__post__content">
                            <span class="date"> {{ Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</span>
                            <h3 class="title"><a
                                    href="{{ route('blog.details', $blog->id) }}">{{ $blog->blog_title }}</a></h3>
                            <a href="{{ route('blog.details', $blog->id) }}" class="read__more">Read mORe</a>
                        </div>
                    </div>
                </div>
            @empty
                <img src="{{ asset('no_data.jpg') }}">
            @endforelse

        </div>
    </div>
</section>
