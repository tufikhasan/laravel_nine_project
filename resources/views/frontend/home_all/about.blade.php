@php
    $aboutData = App\Models\Abouts::find(1);
    $multi_image = App\Models\Multi_image::where('image_type', 'about')
        ->limit(7)
        ->get();
@endphp
<!-- about-area -->
<section id="aboutSection" class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="about__icons__wrap">
                    @foreach ($multi_image as $image)
                        <li>
                            <img class="light" src="{{ url('upload/multi/' . $image->image) }}">
                        </li>
                    @endforeach

                </ul>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <div class="section__title">
                        <span class="sub-title">{{ $aboutData->title_info }}</span>
                        <h2 class="title">{{ $aboutData->title }}</h2>
                    </div>
                    <div class="about__exp">
                        <div class="about__exp__icon">
                            <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }}"
                                alt="{{ $aboutData->title }}">
                        </div>
                        <div class="about__exp__content">
                            <p>{{ $aboutData->short_title }}</p>
                        </div>
                    </div>
                    <p class="desc">{{ $aboutData->short_desc }}</p>
                    <a href="{{ route('about.page') }}" class="btn">Download my resume</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-area-end -->
