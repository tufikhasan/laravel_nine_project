<!doctype html>
<html lang="en">
    @include('admin.body.head')
    <body data-topbar="dark">
        <!-- Begin page -->
        <div id="layout-wrapper">
            @include('admin.body.header')
            @include('admin.body.sidebar')

            <div class="main-content">
                @yield('admin')
                <!-- End Page-content -->
               @include('admin.body.footer') 
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
        @include('admin.body.script')
    </body>
</html>