<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;600&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer>
    </script>
    <link rel="stylesheet" href="{{ asset('static-files/css/assets/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('static-files/css/assets/font-awesome.min.css') }}">
    <!-- Animate Css -->
    <link rel="stylesheet" href="{{ asset('static-files/css/assets/animate.css') }}">
    <!-- Owl Slider -->
    <link rel="stylesheet" href="{{ asset('static-files/css/assets/owl.carousel.min.css') }}">
    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('static-files/css/assets/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('static-files/css/assets/responsive.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <!-- Bootstrap -->

    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <div id="app">
        <app></app>
    </div>


    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('static-files/js/assets/vendor/jquery-1.12.4.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('static-files/js/assets/popper.min.js') }}"></script>
    <script src="{{ asset('static-files/js/assets/bootstrap.min.js') }}"></script>

    <!-- Owl Slider -->
    <script src="{{ asset('static-files/js/assets/owl.carousel.min.js') }}"></script>

    <!-- Wow Animation -->
    <script src="{{ asset('static-files/js/assets/wow.min.js') }}"></script>

    <!-- Price Filter -->
    <script src="{{ asset('static-files/js/assets/price-filter.js') }}"></script>

    <!-- Mean Menu -->
    <script src="{{ asset('static-files/js/assets/jquery.meanmenu.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('static-files/js/plugins.js') }}"></script>
    <script src="{{ asset('static-files/js/custom.js') }}"></script>

</body>

</html>
