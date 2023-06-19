<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">
        @php
            $id = Auth::user()->id;
            $userData = App\Models\User::find($id);
        @endphp
        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ !empty($userData->profile_image) ? url('upload/admin_images/' . $userData->profile_image) : url('upload/no_image.jpg') }}"
                    alt="{{ $userData->name }}" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{ $userData->name }}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>
                    Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span>Home Slide Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('home.slide') }}">Home banner</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span>About Page Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('about.info') }}">About Page</a></li>
                        <li><a href="{{ route('multi.image') }}">Upload Multiple Image</a></li>
                        <li><a href="{{ route('all.multi') }}">All Multi Image</a></li>
                    </ul>
                </li>
                <li class="menu-title">Pages</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span>Portfolio Page Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('add.portfolio') }}">Add new Portfolio</a></li>
                        <li><a href="{{ route('all.portfolio') }}">All Portfolio</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span>Blog Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('add.category') }}">Add New Blog Category</a></li>
                        <li><a href="{{ route('all.category') }}">All Blog Category</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span>Blog Page Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('add.blog') }}">Add New Blog</a></li>
                        <li><a href="{{ route('all.blog') }}">All Blogs</a></li>
                    </ul>
                </li>
                <li class="menu-title">Pages</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span>Footer Page Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('footer.setup') }}">Footer Setup</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('all.contact') }}" class="waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span>All Contacts</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
