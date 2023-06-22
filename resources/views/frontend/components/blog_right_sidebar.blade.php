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
                        <h5 class="title"><a href="{{ route('blog.details', $data->id) }}">{{ $data->blog_title }}</a>
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
