<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="google-site-verification" content="BGqcRIEgJloemN_wB6OZz6W64kkIvtbE2RZWJP-B-Co" />
    <meta name="keywords" content="{{ $meta->keywords ?? '' }}">
    <meta name="author" content="{{ $meta->author ?? '' }}">
    <meta name="description" content="{{ $meta->description ?? '' }}">
    <meta property="og:url" content="{{ $meta->url ?? '' }}" />
    <meta property="og:type" content="{{ $meta->type ?? '' }}">
    <meta property="og:title" content="{{ $title ?? '' }}" />
    <meta property="og:image" content="{{ $meta->image ?? '' }}" />
    <meta property="og:description" content="{{ $meta->description ?? '' }}" />

    <title>{{ $title }} - IMATA</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/justifiedGallery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

</head>

<body>

    @include('partials.header')

    <main>
        @yield('container')
    </main>

    @include('partials.footer')

    <a href="#" class="back-to-top btn btn-warning d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/list.min.js') }}"></script>
    <script>
        var monkeyList = new List('test-list', {
            valueNames: ['name']
        });
    </script>

    <!-- _Template Main JS File_ -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Js Library for galery -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('dbuser/node_modules/sweetalert/dist/sweetalert.min.js') }}"></script>

    @yield('page-script')

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/66ac647132dca6db2cb8ff77/1i48mgngo';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>
