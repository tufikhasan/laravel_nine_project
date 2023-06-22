<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main section</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-building-3-line"></i>
                        <span>Home Slide Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('home.slide') }}">Home banner</a></li>
                    </ul>
                </li>
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-book-read-line"></i>
                        <span>About Page Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('about.info') }}">About Page</a></li>
                    </ul>
                </li> --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="true">
                        <i class="ri-book-read-line"></i>
                        <span>About Page Setup</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="true" style="">
                        <li><a href="javascript: void(0);" class="has-arrow" aria-expanded="true">About info</a>
                            <ul class="sub-menu mm-collapse" aria-expanded="true" style="">
                                <li><a href="{{ route('about.info') }}">About</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript: void(0);" class="has-arrow" aria-expanded="true">Skills</a>
                            <ul class="sub-menu mm-collapse" aria-expanded="true" style="">
                                <li><a href="{{ route('all.skill') }}">All Skills</a></li>
                                <li><a href="{{ route('add.skill') }}">Add New Skill</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript: void(0);" class="has-arrow" aria-expanded="true">Awards</a>
                            <ul class="sub-menu mm-collapse" aria-expanded="true" style="">
                                <li><a href="{{ route('all.award') }}">All Awards</a></li>
                                <li><a href="{{ route('add.award') }}">Add New Award</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript: void(0);" class="has-arrow" aria-expanded="true">Education</a>
                            <ul class="sub-menu mm-collapse" aria-expanded="true" style="">
                                <li><a href="{{ route('all.education') }}">All Education</a></li>
                                <li><a href="{{ route('add.education') }}">Add New Education</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-book-read-line"></i>
                        <span>Partners Section</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('partner.info') }}">Partners Info Setup</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-image-line"></i>
                        <span>Multi Images</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('multi.image') }}">Upload Multiple Image</a></li>
                        <li><a href="{{ route('all.multi') }}">All Multi Image</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-image-line"></i>
                        <span>Services Section</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('add.service') }}">Add New Service</a></li>
                        <li><a href="{{ route('all.service') }}">All Services</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-image-line"></i>
                        <span>Testimonials Section</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('add.testimonial') }}">Add New Testimoial</a></li>
                        <li><a href="{{ route('all.testimonial') }}">All Testimoials</a></li>
                    </ul>
                </li>
                <li class="menu-title">Post Section</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-gallery-line"></i>
                        <span>Portfolio Page Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('add.portfolio') }}">Add new Portfolio</a></li>
                        <li><a href="{{ route('all.portfolio') }}">All Portfolio</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-list-settings-line"></i>
                        <span>Blog Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('add.category') }}">Add New Blog Category</a></li>
                        <li><a href="{{ route('all.category') }}">All Blog Category</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-article-line"></i>
                        <span>Blog Page Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('add.blog') }}">Add New Blog</a></li>
                        <li><a href="{{ route('all.blog') }}">All Blogs</a></li>
                    </ul>
                </li>

                <li class="menu-title">Extra section</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-line"></i>
                        <span>Contacts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.contact') }}">All Contacts</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-contacts-book-line"></i>
                        <span>Footer Page Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('footer.setup') }}">Footer Setup</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
