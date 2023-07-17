@php
    $services = App\Models\Service::latest()
        ->limit(5)
        ->get();
@endphp
<section id="Services" class="services">
    <div class="container">
        <div class="services__title__wrap">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section__title">
                        <span class="sub-title">02 - my Services</span>
                        <h2 class="title">Creates amazing digital experiences</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-4">
                    <div class="services__arrow"></div>
                </div>
            </div>
        </div>
        <div class="row gx-0 services__active">
            @foreach ($services as $service)
                <div class="col-xl-3">
                    <div class="services__item">
                        <div class="services__thumb">
                            <a href="services-details.html"><img
                                    src="{{ !empty($service->image) ? url('upload/service/' . $service->image) : url('upload/blog.png') }}"
                                    alt="{{ $service->title }}"></a>
                        </div>
                        <div class="services__content">
                            <div class="services__icon">
                                <img class="light" src="{{ url('upload/service/' . $service->icon) }}"
                                    alt="{{ $service->title }}">
                            </div>
                            <h3 class="title"><a>{{ $service->title }}</a></h3>
                            <p>{{ $service->description }}</p>
                            <ul class="services__list">
                                @php
                                    $serviceList = explode(',', $service->service_list);
                                @endphp
                                @foreach ($serviceList as $list)
                                    <li>{{ $list }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
