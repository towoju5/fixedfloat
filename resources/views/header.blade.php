<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no" />
    <link href="images/favicon.png" rel="icon" />
    <title>{{ settings("website_name") }} - Crypto Exchange</title>
    <meta name="description"
        content="This professional design html template is for build a Money Transfer and online payments website." />
    <meta name="author" content="harnishdesign.net" />

    <!-- Web Fonts
============================================= -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i"
        type="text/css" />

    <!-- Stylesheet
============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap-select/css/bootstrap-select.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/currency-flags/css/currency-flags.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheet.css')}}" />
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div data-loader="dual-ring"></div>
    </div>
    <!-- Preloader End -->

    <!-- Document Wrapper
============================================= -->
    <div id="main-wrapper">
        <!-- Header
  ============================================= -->
        <header id="header" class="bg-transparent header-text-light">
            <div class="container">
                <div class="header-row">
                    <div class="header-column justify-content-start">
                        <!-- Logo
          ============================= -->
                        <div class="logo">
                            <a class="d-flex" href="index.html" title="Payyed - HTML Template"><img
                                    src="images/logo-light.png" alt="Payyed" /></a>
                        </div>
                        <!-- Logo end -->
                        <!-- Collapse Button
          ============================== -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav">
                            <span></span> <span></span> <span></span>
                        </button>
                        <!-- Collapse Button end -->

                        <!-- Primary Navigation
          ============================== -->
                        <nav class="primary-menu navbar navbar-expand-lg">
                            <div id="header-nav" class="collapse navbar-collapse">
                                <ul class="navbar-nav mr-auto">
                                    <li class="menu-head"><span>Account</span></li>
                                    <li class="menu-head"><span>FixedFloat</span></li>
                                    <li><a href="{{ url('page/about') }}">About</a></li>
                                    <li><a href="{{ url('page/blog') }}">Blog</a></li>
                                    <li><a href="{{ url('page/faq') }}">FAQ</a></li>
                                    <li><a href="{{ url('page/api') }}">API</a></li>
                                    <li><a href="{{ url('page/support') }}">Support</a></li>
                                    <li><a href="{{ url('page/affiliate') }}">Affiliate program</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Primary Navigation end -->
                    </div>
                    <div class="header-column justify-content-end">
                        <!-- Login & Signup Link
          ============================== -->
                        <nav class="login-signup navbar navbar-expand">
                            <ul class="navbar-nav">
                                @if(auth()->check())
                                <li><a href="{{ url('logout') }}">Logout</a></li>
                                <li class="align-items-center h-auto ml-sm-3">
                                    <a class="btn btn-primary d-none d-sm-block" href="{{ url('user/orders') }}">Dashboard</a>
                                </li>
                                @else
                                <li><a href="{{ url('login') }}">Sign in</a></li>
                                <li class="align-items-center h-auto ml-sm-3">
                                    <a class="btn btn-primary d-none d-sm-block" href="{{ url('register') }}">Sign Up</a>
                                </li>
                                @endif
                            </ul>
                        </nav>
                        <!-- Login & Signup Link end -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Content
  ============================================= -->
        <div id="content">
            <!-- Send/Request Money
    ============================================= -->