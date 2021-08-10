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
        <link rel="stylesheet" href="{{asset('css/assets/bootstrap.min.css')}}">
        <!-- Fontawesome Icon -->
        <link rel="stylesheet" href="{{asset('css/assets/font-awesome.min.css')}}">
        <!-- Animate Css -->
        <link rel="stylesheet" href="{{asset('css/assets/animate.css')}}">
        <!-- Owl Slider -->
        <link rel="stylesheet" href="{{asset('css/assets/owl.carousel.min.css')}}">
        <!-- Custom Style -->
        <link rel="stylesheet" href="{{asset('css/assets/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('css/assets/responsive.css')}}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
       <!-- Bootstrap -->
   
    <title>{{env('APP_NAME')}}</title>
</head>
<body>
    <div id="app">
        <app></app>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>