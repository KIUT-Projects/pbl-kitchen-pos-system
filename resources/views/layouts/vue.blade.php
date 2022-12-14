<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title>KUIT Oshxona</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="/assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/custom.css" rel="stylesheet" type="text/css"/>

    <link href="/assets/api/pace/pace-theme-flat-top.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/api/mcustomscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css"/>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet"/><!-- v6.2.1 free -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{--
    <script src="/vendor/vue/vue.js"></script><!-- v2.7.14 -->
    --}}
    <style>
        .empty-cart{
            display: flex;
            justify-content: center;
        }
        .empty-cart > img{
            max-width: 400px;
        }

    </style>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<body>

    <div id="app">
        <main-app></main-app>
    </div>

    <script src="/assets/js/plugin.bundle.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/sweetalert.js"></script>
    <script src="/assets/js/sweetalert1.js"></script>
    <script src="/assets/js/script.bundle.js"></script>

</body>
</html>
