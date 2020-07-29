<html lang="en-US" class=" js_active  vc_desktop  vc_transform  vc_transform ">
<head>
    @include('city-web.includes.head')
    @yield('before-styles')
</head>

<body class="inner page-w-header-footer" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    @include('city-web.includes.popup')

    <section id="header" style="">
        @include('city-web.includes.header')
    </section> <!-- #header -->

    <main id="body" class="body-default">
        @yield('content')
    </main> <!-- #body -->
    <footer>
        @include('city-web.includes.footer')
    </footer>

    @yield('after-scripts')
    @include('city-web.includes.default_after_scripts')
</body>
</html>
