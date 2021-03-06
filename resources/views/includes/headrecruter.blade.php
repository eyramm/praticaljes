<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Codeln') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/stylereview.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/TableFilter.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/dashboard/nprogress/nprogress.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/dashboard/custom.min.css')}}" type="text/css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/TableFilter.js') }}" defer></script>

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/dashboard" class="site_title">
                        <img src="{{asset('images2/faviconcodelin.png')}}" alt=""></i>
                        <span>Code\n</span>
                    </a>

                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic"> <a href="/profile">

                            <img src="/storage/avatars/{{ Auth::user()->avatar }}" alt="..." class="img-circle profile_img"></a>
                    </div>
                    {{--<div class="profile_info">--}}
                        {{--<span>Welcome,</span>--}}
                        {{--<h2>John Doe</h2>--}}
                    {{--</div>--}}
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->