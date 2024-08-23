<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('dashboard_assets') }}/" data-template="vertical-menu-template-free">

@include('dashboard.layout.head')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('dashboard.layout.sidebar')

            <!-- Layout container -->
            <div class="layout-page">
                @include('dashboard.layout.navbar')

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    @yield('content')

                    @include('dashboard.layout.footer')

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    @include('dashboard.layout.scripts')

</body>

</html>
