@php
    $partner = App\Models\Partner::find(1);
    $multi_image = App\Models\Multi_image::where('image_type', 'partners')
        ->limit(6)
        ->get();
@endphp
<section class="partner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="partner__logo__wrap">
                    @foreach ($multi_image as $image)
                        <li>
                            <img class="light" src="{{ url('upload/multi/' . $image->image) }}">
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="partner__content">
                    <div class="section__title">
                        <span class="sub-title">{{ $partner->title_info }}</span>
                        <h2 class="title">{{ $partner->title }}</h2>
                    </div>
                    <p>{{ $partner->description }}</p>
                    <a href="contact.html" class="btn">Start a conversation</a>
                </div>
            </div>
        </div>
    </div>
</section>
