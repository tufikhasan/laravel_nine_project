@extends('frontend.app_master')
@section('site_title')
    About - Personal Portfolio
@endsection
@section('main')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">About me</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Me</li>
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

    <!-- about-area -->
    <section class="about about__style__two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about__image">
                        <img src="{{ !empty($aboutData->about_image) ? url('upload/about/' . $aboutData->about_image) : url('upload/no_image.jpg') }}"
                            alt="{{ $aboutData->title }}">
                    </div>
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
                                <p><span>{{ $aboutData->short_title }}</p>
                            </div>
                        </div>
                        <p class="desc">{{ $aboutData->short_desc }}</p>
                        <a href="{{ route('about.page') }}" class="btn">Download my resume</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="about__info__wrap">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about"
                                    type="button" role="tab" aria-controls="about" aria-selected="true">About</button>
                            </li>
                            @if (!empty($skills))
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills"
                                        type="button" role="tab" aria-controls="skills" aria-selected="false">Skills
                                        <span class="badge rounded-pill bg-success">{{ count($skills) }}</span></button>
                                </li>
                            @endif
                            @if (!empty($awards))
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="awards-tab" data-bs-toggle="tab" data-bs-target="#awards"
                                        type="button" role="tab" aria-controls="awards" aria-selected="false">awards
                                        <span class="badge rounded-pill bg-success">{{ count($awards) }}</span></button>
                                </li>
                            @endif
                            @if (!empty($educations))
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="education-tab" data-bs-toggle="tab"
                                        data-bs-target="#education" type="button" role="tab" aria-controls="education"
                                        aria-selected="false">education <span
                                            class="badge rounded-pill bg-success">{{ count($educations) }}</span></button>
                                </li>
                            @endif
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="about" role="tabpanel"
                                aria-labelledby="about-tab">
                                {!! $aboutData->long_desc !!}
                            </div>
                            <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                                <div class="about__skill__wrap">
                                    <div class="row">
                                        @foreach ($skills as $skill)
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">{{ $skill->title }}</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: {{ $skill->percentage }}%;"
                                                            aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                            <span class="percentage">{{ $skill->percentage }}%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
                                <div class="about__award__wrap">
                                    <div class="row justify-content-center">
                                        @foreach ($awards as $award)
                                            <div class="col-md-6 col-sm-9">
                                                <div class="about__award__item">
                                                    <div class="award__logo">
                                                        @if ($award->logo)
                                                            <img src="{{ url('upload/about/' . $award->logo) }}"
                                                                alt="{{ $award->title }}">
                                                        @endif

                                                    </div>
                                                    <div class="award__content">
                                                        <h5 class="title">{{ $award->title }}</h5>
                                                        <p>{{ $award->description }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
                                <div class="about__education__wrap">
                                    <div class="row">
                                        @foreach ($educations as $education)
                                            <div class="col-md-6">
                                                <div class="about__education__item">
                                                    <h3 class="title">{{ $education->title }}</h3>
                                                    <span class="date">{{ $education->date }}</span>
                                                    <p>{{ $education->description }}</p>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->
    <!-- Say-Hello -->
    @include('frontend.components.say_hello', [
        'sayHelloSectionCss' => 'homeContact homeContact__style__two',
    ])
    <!-- Say-Hello -->
@endsection
