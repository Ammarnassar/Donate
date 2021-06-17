<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Owl Theme Default Min CSS -->
    <link rel="stylesheet" href="{{asset('temp/nivo/assets/css/owl.theme.default.min.css')}}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{asset('temp/nivo/assets/css/owl.carousel.min.css')}}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{asset('temp/nivo/assets/css/animate.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('temp/nivo/assets/css/flaticon.css')}}">
    <!-- Font Awesome Min CSS -->
    <link rel="stylesheet" href="{{asset('temp/nivo/assets/css/font-awesome.min.css')}}">
    <!-- Imagelightbox Min CSS -->
    <link rel="stylesheet" href="{{asset('temp/nivo/assets/css/imagelightbox.min.css')}}">
    <!-- Meanmenu Min CSS -->
    <link rel="stylesheet" href="{{asset('temp/nivo/assets/css/meanmenu.min.css')}}">
    <!-- Odometer Min CSS -->
    <link rel="stylesheet" href="{{asset('temp/nivo/assets/css/odometer.min.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('temp/nivo/assets/css/responsive.css')}}">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('temp/nivo/assets/img/favicon.png')}}">
    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{asset('temp/nivo/assets/css/bootstrap.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('temp/nivo/assets/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('temp/login/css/style.css')}}">

    <!-- Google Arabic & English Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">

@if (\Illuminate\Support\Facades\App::getLocale() == 'ar')
    <!-- Style CSS RTL (Arabic) -->
    <link rel="stylesheet" href="{{asset('temp/nivo/assets/css/rtl.css')}}">
@endif

<!-- Title -->
    <title>{{config('app.name')}}</title>
</head>
