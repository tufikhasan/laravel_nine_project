<!-- header-area -->
<header>
    <div id="sticky-header" class="menu__area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile__nav__toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu__wrap">
                        <nav class="menu__nav">
                            <div class="logo">
                                <a href="{{ url('/') }}" class="logo__black"><img
                                        src="{{ asset('frontend/assets/img/logo/logo_black.png') }}" alt=""></a>
                                <a href="{{ url('/') }}" class="logo__white"><img
                                        src="{{ asset('frontend/assets/img/logo/logo_white.png') }}" alt=""></a>
                            </div>
                            <div class="navbar__wrap main__menu d-none d-xl-flex">
                                <ul class="navigation">
                                    <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ route('about.page') }}">About</a></li>
                                    <li><a href="#Services">Services</a></li>
                                    <li><a href="#portfolio">Portfolio</a></li>
                                    <li><a href="{{ route('blog.page') }}">Our Blog</a></li>
                                    <li><a href="{{ route('contact.me') }}">contact me</a></li>
                                </ul>
                            </div>
                            <div class="header__btn d-none d-md-block">
                                <a href="{{ route('contact.me') }}" class="btn">Contact me</a>
                            </div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile__menu">
                        <nav class="menu__box">
                            <div class="close__btn"><i class="fal fa-times"></i></div>
                            <div class="nav-logo">
                                <a href="{{ url('/') }}" class="logo__black"><img
                                        src="{{ asset('frontend/assets/img/logo/logo_black.png') }}"
                                        alt=""></a>
                                <a href="{{ url('/') }}" class="logo__white"><img
                                        src="{{ asset('frontend/assets/img/logo/logo_white.png') }}"
                                        alt=""></a>
                            </div>
                            <div class="menu__outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu__backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->
