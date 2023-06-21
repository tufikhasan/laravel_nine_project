@php
    $multi_image = App\Models\Multi_image::where('image_type', 'testimonial')
        ->limit(7)
        ->get();
    $testimonials = App\Models\Testimonial::latest()->get();
@endphp
<section class="testimonial">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 order-0 order-lg-2">
                <ul class="testimonial__avatar__img">
                    @foreach ($multi_image as $image)
                        <li><img src="{{ asset('upload/multi/' . $image->image) }}"></li>
                    @endforeach
                    {{-- <li><img src="{{ asset('frontend/assets/img/images/testi_img01.png') }}" alt=""></li>
                    <li><img src="{{ asset('frontend/assets/img/images/testi_img02.png') }}" alt=""></li>
                    <li><img src="{{ asset('frontend/assets/img/images/testi_img03.png') }}" alt=""></li>
                    <li><img src="{{ asset('frontend/assets/img/images/testi_img04.png') }}" alt=""></li>
                    <li><img src="{{ asset('frontend/assets/img/images/testi_img05.png') }}" alt=""></li>
                    <li><img src="{{ asset('frontend/assets/img/images/testi_img06.png') }}" alt=""></li>
                    <li><img src="{{ asset('frontend/assets/img/images/testi_img07.png') }}" alt=""></li> --}}
                </ul>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="testimonial__wrap">
                    <div class="section__title">
                        <span class="sub-title">06 - Client Feedback</span>
                        <h2 class="title">Happy clients feedback</h2>
                    </div>
                    <div class="testimonial__active">
                        @foreach ($testimonials as $testimonial)
                            <div class="testimonial__item">
                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial__content">
                                    <p>{{ $testimonial->feedback }}</p>
                                    <div class="testimonial__avatar">
                                        <span>{{ $testimonial->user }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="testimonial__arrow"></div>
                </div>
            </div>
        </div>
    </div>
</section>
