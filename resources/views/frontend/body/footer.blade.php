@php
    $data = App\Models\Footer::find(1);
@endphp
<!-- Footer-area -->
<footer class="footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">Contact us</h5>
                        <h4 class="title">{{ $data->number }}</h4>
                    </div>
                    <div class="footer__widget__text">
                        <p>{{ $data->short_description }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">my address</h5>
                        <h4 class="title">{{ $data->country }}</h4>
                    </div>
                    <div class="footer__widget__address">
                        <p>{{ $data->address }}</p>
                        <a href="{{ $data->email }}" class="mail">{{ $data->email }}</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">Follow me</h5>
                        <h4 class="title">{{ $data->social_title }}</h4>
                    </div>
                    <div class="footer__widget__social">
                        <p>{{ $data->social_description }}</p>
                        <ul class="footer__social__list">
                            <li><a href="{{ $data->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $data->twitter }}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{ $data->linkedIn }}"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__wrap">
            <div class="row">
                <div class="col-12">
                    <div class="copyright__text text-center">
                        <p>{{ $data->copyright }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer-area-end -->
