@php
    $portfolios = App\Models\portfolios::latest()->get();
@endphp
<section class="portfolio">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section__title text-center">
                    <span class="sub-title">04 - Portfolio</span>
                    <h2 class="title">All creative work</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content" id="portfolioTabContent">
        <div class="tab-pane show active" id="all" role="tabpanel" aria-labelledby="all-tab">
            <div class="container">
                <div class="row gx-0 justify-content-center">
                    <div class="col">
                        <div class="portfolio__active">
                            @forelse ($portfolios as $portfolio)
                                <div class="portfolio__item">
                                    <div class="portfolio__thumb">
                                        <img src="{{ !empty($portfolio->portfolio_image) ? url('upload/portfolio/' . $portfolio->portfolio_image) : url('upload/portfolio.jpg') }}"
                                            alt="{{ $portfolio->portfolio_title }}">
                                    </div>
                                    <div class="portfolio__overlay__content">
                                        <span>{{ $portfolio->portfolio_name }}</span>
                                        <h4 class="title"><a
                                                href="{{ route('portfolio.details', $portfolio->id) }}">{{ $portfolio->portfolio_title }}</a>
                                        </h4>
                                        <a href="{{ route('portfolio.details', $portfolio->id) }}" class="link">Case
                                            Study</a>
                                    </div>
                                </div>
                            @empty
                                <img src="{{ asset('no_data.jpg') }}">
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
