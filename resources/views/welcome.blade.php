<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="TechyDevs" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Bitcon - Bitcoin HTML5 Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ url('assets') }}/images/favicon.png" />

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{ url('assets') }}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ url('assets') }}/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="{{ url('assets') }}/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ url('assets') }}/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{ url('assets') }}/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="{{ url('assets') }}/css/jquery.fancybox.css" />
    <link rel="stylesheet" href="{{ url('assets') }}/css/style.css" />
    <style>
        .form-controller {
            display: block;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #fff;
            /*#495057*/
            background-color: transparent;
            /* background-clip: padding-box; */
            border: none;
            border-bottom: 1px solid #ced4da;
        }

        .bg-img {
            background-image: linear-gradient(-200deg, rgba(11, 75, 121, 0.54) 0, #000810 100%), url(https://fixedfloat.com/assets/images/temp/bg/bg-09.jpg);
        }
    </style>
</head>

<body>

    <!-- start per-loader -->
    <div class="loader-container">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- end per-loader -->

    <!-- ================================
            START HEADER AREA
================================= -->
    <header class="header-area">
        <div class="main-menu-header">
            <div class="container">
                <div class="main-menu-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <a href="index.html" class="main-logo"><img src="{{ url('assets') }}/images/logo-black.png" alt="logo"></a>
                        </div><!-- end col-lg-2 -->
                        <div class="col-lg-10">
                            <div class="main-navbar d-flex align-items-center justify-content-end">
                                <nav class="main-nav text-capitalize">
                                    <ul>
                                        <li>
                                            <a href="#">home <i class="fal fa-angle-down font-size-12"></i></a>
                                            <ul class="drop-menu">
                                                <li><a href="index.html">home one</a></li>
                                                <li><a href="index-2.html">home two</a></li>
                                                <li><a href="index-3.html">home three</a></li>
                                                <li><a href="index-4.html">home four <span class="badge badge-info ml-1">New</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="has-mega-menu">
                                            <a href="#">pages <i class="fal fa-angle-down font-size-12"></i></a>
                                            <div class="drop-menu mega-menu">
                                                <ul class="row no-gutters">
                                                    <li class="mega-menu-item col-lg-4">
                                                        <ul>
                                                            <li><a href="about.html">about us</a></li>
                                                            <li><a href="service.html">services</a></li>
                                                            <li><a href="contact.html">contact</a></li>
                                                            <li><a href="contact-2.html">contact 2 <span class="badge badge-info ml-1">New</span></a></li>
                                                            <li><a href="cart.html">cart</a></li>
                                                            <li><a href="checkout.html">checkout</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-item col-lg-4">
                                                        <ul>
                                                            <li><a href="server-error-page.html">server error page</a></li>
                                                            <li><a href="faq.html">FAQs</a></li>
                                                            <li><a href="pricing.html">pricing</a></li>
                                                            <li><a href="chart.html">charts</a></li>
                                                            <li><a href="error-404.html">404 page</a></li>
                                                            <li><a href="error-two-404.html">404 page 2 <span class="badge badge-info ml-1">New</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-item col-lg-4">
                                                        <ul>
                                                            <li><a href="terms-of-services.html">terms of services</a></li>
                                                            <li><a href="sign-up.html">sign up</a></li>
                                                            <li><a href="login.html">login</a></li>
                                                            <li><a href="recover.html">recover password</a></li>
                                                            <li><a href="coming-soon.html">coming soon</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">team <i class="fal fa-angle-down font-size-12"></i></a>
                                            <ul class="drop-menu">
                                                <li><a href="team-member.html">team</a></li>
                                                <li><a href="team-single.html">team detail</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">blog <i class="fal fa-angle-down font-size-12"></i></a>
                                            <ul class="drop-menu">
                                                <li><a href="blog-grid-no-sidebar.html">grid no sidebar</a></li>
                                                <li><a href="blog-right-sidebar.html">right sidebar</a></li>
                                                <li><a href="blog-left-sidebar.html">left sidebar</a></li>
                                                <li><a href="blog-single.html">blog detail</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="navbar-toolbar d-flex align-items-center pl-lg-4">
                                    <div class="navbar-toolbar-toolbar d-flex align-items-center">
                                        <a href="cart.html" class="shopping-cart-icon"><i class="fal fa-shopping-cart"></i></a>
                                        <div class="dropdown navbar-tool-search">
                                            <a class="nav-link dropdown-toggle search-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fal fa-search"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <form method="post">
                                                    <div class="position-relative">
                                                        <span class="fal fa-search input-icon"></span>
                                                        <input class="form-control form--control pl-5" type="search" name="name" placeholder="Type keywords & hit enter...">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hamburger">
                                        <span class="line"></span>
                                        <span class="line"></span>
                                        <span class="line"></span>
                                    </div>
                                </div><!-- end navbar-toolbar -->
                            </div><!-- end main-navbar -->
                        </div><!-- end col-lg-10 -->
                    </div><!-- end row -->
                </div><!-- end main-menu-wrapper -->
            </div> <!-- end container -->
        </div><!-- end main-menu-header -->
    </header>
    <!-- ================================
         END HEADER AREA
================================= -->

    <!-- ================================
    START HERO AREA
================================= -->
    <section class="hero-area bg-img">
        <!-- <span class="triangle-shape triangle-shape-1 position-absolute"></span>
        <span class="triangle-shape triangle-shape-2 position-absolute"></span>
        <span class="triangle-shape triangle-shape-3 position-absolute"></span>
        <span class="triangle-shape triangle-shape-4 position-absolute"></span> -->
        <div class="container">
            <div class="hero-content text-center">

                <form>
                    <div class="form-inline d-flex justify-content-center">
                        <div class="input-group mb-2 mr-sm-2">
                            <input type="text" class="form-control form-controller" id="inlineFormInputGroupUsername2" placeholder="Username">
                            <div class="input-group-prepend">
                                <select id="select_currency_from" class="form-control form-controller" class="hidden">
                                    <option label="separate">Popular currencies</option>
                                    <option selected value="btc" data-symbol="BTC" data-sub="">Bitcoin</option>
                                    <option value="eth" data-symbol="ETH" data-sub="">Ethereum</option>
                                    <option value="usdt" data-symbol="USDT" data-sub="ERC20">Tether (ERC20)</option>
                                    <option value="ltc" data-symbol="LTC" data-sub="">Litecoin</option>
                                    <option value="xmr" data-symbol="XMR" data-sub="">Monero</option>
                                    <option label="separate">All currencies</option>
                                    <option value="zrx" data-symbol="ZRX" data-sub="ERC20">0x (ERC20)</option>
                                    <option value="avax" data-symbol="AVAX" data-sub="C-CHAIN">Avalanche</option>
                                    <option value="bat" data-symbol="BAT" data-sub="ERC20">Basic Attention (ERC20)</option>
                                    <option value="bsc" data-symbol="BNB" data-sub="BEP20">Binance Smart Chain</option>
                                    <option value="busdbsc" data-symbol="BUSD" data-sub="BEP20">Binance USD (BEP20)</option>
                                    <option value="busdeth" data-symbol="BUSD" data-sub="ERC20">Binance USD (ERC20)</option>
                                    <option value="btcbsc" data-symbol="BTC" data-sub="BEP20">Bitcoin (BEP20)</option>
                                    <option value="btcln" data-symbol="BTC" data-sub="LN">Bitcoin (Lightning)</option>
                                    <option value="bch" data-symbol="BCH" data-sub="">Bitcoin Cash</option>
                                    <option value="ada" data-symbol="ADA" data-sub="">Cardano</option>
                                    <option value="adabsc" data-symbol="ADA" data-sub="BEP20">Cardano (BEP20)</option>
                                    <option value="link" data-symbol="LINK" data-sub="ERC20">Chainlink (ERC20)</option>
                                    <option value="atom" data-symbol="ATOM" data-sub="">Cosmos</option>
                                    <option value="daibsc" data-symbol="DAI" data-sub="BEP20">DAI (BEP20)</option>
                                    <option value="daieth" data-symbol="DAI" data-sub="ERC20">DAI (ERC20)</option>
                                    <option value="dash" data-symbol="DASH" data-sub="">Dash</option>
                                    <option value="doge" data-symbol="DOGE" data-sub="">Dogecoin</option>
                                    <option value="ethbsc" data-symbol="ETH" data-sub="BEP20">Ethereum (BEP20)</option>
                                    <option value="etc" data-symbol="ETC" data-sub="">Ethereum Classic</option>
                                    <option value="mkr" data-symbol="MKR" data-sub="ERC20">Maker (ERC20)</option>
                                    <option value="cake" data-symbol="CAKE" data-sub="BEP20">PancakeSwap (BEP20)</option>
                                    <option value="dot" data-symbol="DOT" data-sub="">Polkadot</option>
                                    <option value="maticeth" data-symbol="MATIC" data-sub="ERC20">Polygon (ERC20)</option>
                                    <option value="matic" data-symbol="MATIC" data-sub="">Polygon (POLYGON)</option>
                                    <option value="xrp" data-symbol="XRP" data-sub="">Ripple</option>
                                    <option value="shibbsc" data-symbol="SHIB" data-sub="BEP20">SHIBA INU (BEP20)</option>
                                    <option value="shib" data-symbol="SHIB" data-sub="ERC20">SHIBA INU (ERC20)</option>
                                    <option value="sol" data-symbol="SOL" data-sub="">Solana</option>
                                    <option value="usdtbsc" data-symbol="USDT" data-sub="BEP20">Tether (BEP20)</option>
                                    <option value="usdtmatic" data-symbol="USDT" data-sub="POLYGON">Tether (POLYGON)</option>
                                    <option value="usdttrc" data-symbol="USDT" data-sub="TRC20">Tether (TRC20)</option>
                                    <option value="xtz" data-symbol="XTZ" data-sub="">Tezos</option>
                                    <option value="trx" data-symbol="TRX" data-sub="">Tron</option>
                                    <option value="zec" data-symbol="ZEC" data-sub="">Zcash</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <select name="crypto" class="form-controller" id="crypto">
                                    <option value="BTC">Bitcoin</option>
                                </select>
                            </div>
                            <input type="text" class="form-control form-controller" id="inlineFormInputGroupUsername2" placeholder="Username">
                        </div>
                    </div>
                    <div class="hero-btn-box padding-top-35px">
                        <a href="sign-up.html" class="btn btn-primary mr-3">Get Started</a>
                        <a href="about.html" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </form>
            </div><!-- end hero-content -->
        </div><!-- end container -->
        <svg class="hero-svg" viewBox="0 0 500 150" preserveAspectRatio="none">
            <path d="M-8.17,-2.45 C237.87,221.53 274.54,-178.13 512.69,123.84 L500.00,150.00 L0.00,150.00 Z"></path>
        </svg>
    </section><!-- end hero-area -->
    <!-- ================================ END HERO AREA ================================= -->

    <!-- ================================
       START FUN-FACTS AREA
================================= -->
    <section class="fun-facts-area section--padding">
        <div class="container">
            <h5 class="text-uppercase text-center">See what our numbers say</h5>
            <div class="row mt-5">
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item bg-white shadow-sm p-4 rounded">
                        <div class="icon-element mb-4">
                            <i class="fal fa-sack-dollar"></i>
                        </div>
                        <h2 class="counter-number counter mb-2">85389</h2>
                        <p class="counter-title">Total Transactions</p>
                    </div><!-- end counter-item-->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item bg-white shadow-sm p-4 rounded">
                        <div class="icon-element mb-4">
                            <i class="fal fa-wallet"></i>
                        </div>
                        <h2 class="counter-number counter mb-2">6540</h2>
                        <p class="counter-title">Bitcoin Wallet</p>
                    </div><!-- end counter-item-->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item bg-white shadow-sm p-4 rounded">
                        <div class="icon-element mb-4">
                            <i class="fal fa-users"></i>
                        </div>
                        <h2 class="counter-number counter mb-2">7540</h2>
                        <p class="counter-title">Happy Users</p>
                    </div><!-- end counter-item-->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item bg-white shadow-sm p-4 rounded">
                        <div class="icon-element mb-4">
                            <i class="fal fa-hands-usd"></i>
                        </div>
                        <h2 class="counter-number counter mb-2">5721</h2>
                        <p class="counter-title">Bitcoin Investors</p>
                    </div><!-- end counter-item-->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
            <p class="text-center">Do not hesitate to start with us for better help and services
                <a href="sign-up.html" class="btn-link ml-1">Get Started <i class="fal fa-angle-right ml-1"></i></a>
            </p>
        </div><!-- end container -->
    </section><!-- end fun-facts-area -->
    <!-- ================================
       START FUN-FACTS AREA
================================= -->

    <hr class="border-top-gray my-0">

    <!-- ================================
       START ABOUT AREA
================================= -->
    <section class="about-area section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="img-box mb-5 mb-lg-0">
                        <img src="{{ url('assets') }}/images/img-loading.jpg" data-src="{{ url('assets') }}/images/blog-img5.jpg" alt="about-us" class="img__item lazy" />
                        <a class="icon-element play-btn" href="https://www.youtube.com/watch?v=GmOzih6I1zs" data-fancybox="about-video">
                            <i class="fas fa-play"></i>
                        </a>
                    </div><!-- end img-box -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="about-content pl-lg-5">
                        <h2 class="sec-title mb-3"><span class="underline-shape">Awards</span> Winning Digital Cryptocurrency Platform</h2>
                        <p class="mt-4 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid at cquie consequatur deserunt dignissimos excepturi illo ipsa ipsum minima, obcaecati officiis qui quidem quos, sunt unde, voluptas.</p>
                        <p class="mb-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu santium doloreque laudantum.</p>
                        <a href="about.html" class="btn btn-primary">Read More</a>
                    </div><!-- end about-content -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end about-area -->
    <!-- ================================
       START ABOUT AREA
================================= -->

    <!-- ================================
       START SERVICE AREA
================================= -->
    <section class="service-area padding-top-120px bg-gray position-relative">
        <div class="container">
            <h2 class="sec-title text-center"><span class="underline-shape">Digital</span> Transactions</h2>
            <div class="service-carousel owl-carousel owl-theme mt-5">
                <div class="card hover-y text-center mb-0">
                    <a href="service.html" class="d-block">
                        <img class="card-img-top lazy" src="{{ url('assets') }}/images/img-loading.jpg" data-src="{{ url('assets') }}/images/blog-img4.jpg" alt="Blog image">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><a href="service.html">Blockchain Ecosystem</a></h5>
                        <p class="card-text font-size-15 mb-4">There are many variations of passages of Lorem Ipsum available, but the majority</p>
                        <a href="service.html" class="btn btn-sm btn-primary">Discover More</a>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="card hover-y text-center mb-0">
                    <a href="service.html" class="d-block">
                        <img class="card-img-top lazy" src="{{ url('assets') }}/images/img-loading.jpg" data-src="{{ url('assets') }}/images/blog-img5.jpg" alt="Blog image">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><a href="service.html">Instant Deposits</a></h5>
                        <p class="card-text font-size-15 mb-4">There are many variations of passages of Lorem Ipsum available, but the majority</p>
                        <a href="service.html" class="btn btn-sm btn-primary">Discover More</a>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="card hover-y text-center mb-0">
                    <a href="service.html" class="d-block">
                        <img class="card-img-top lazy" src="{{ url('assets') }}/images/img-loading.jpg" data-src="{{ url('assets') }}/images/blog-img6.jpg" alt="Blog image">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><a href="service.html">Blockchain Security</a></h5>
                        <p class="card-text font-size-15 mb-4">There are many variations of passages of Lorem Ipsum available, but the majority</p>
                        <a href="service.html" class="btn btn-sm btn-primary">Discover More</a>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="card hover-y text-center mb-0">
                    <a href="service.html" class="d-block">
                        <img class="card-img-top lazy" src="{{ url('assets') }}/images/img-loading.jpg" data-src="{{ url('assets') }}/images/blog-img5.jpg" alt="Blog image">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><a href="service.html">Blockchain Ecosystem</a></h5>
                        <p class="card-text font-size-15 mb-4">There are many variations of passages of Lorem Ipsum available, but the majority</p>
                        <a href="service.html" class="btn btn-sm btn-primary">Discover More</a>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end service-carousel -->
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" class="blog-svg-shape">
                <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"></path>
            </svg>
        </div><!-- end container -->
    </section><!-- end service-area -->
    <!-- ================================
       START SERVICE AREA
================================= -->

    <!-- ================================
       START APP AREA
================================= -->
    <section class="app-area section--padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mr-lg-auto mb-5 mb-lg-0">
                    <img src="{{ url('assets') }}/images/img-loading.jpg" data-src="{{ url('assets') }}/images/mobile-app2.png" alt="mobile" class="img-fluid lazy" />
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="mobile-app-content">
                        <h2 class="sec-title mb-3"><span class="underline-shape">Bitcon</span> Official App in Your Pocket Now</h2>
                        <p class="mb-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor hic illum nam rerum similique sit suscipit temporibus?</p>
                        <h5 class="mb-2 font-weight-semi-bold">Install App From</h5>
                        <div class="d-flex flex-wrap align-items-center">
                            <a href="#" class="d-block mr-3 my-1">
                                <img src="{{ url('assets') }}/images/appstore.png" alt="App Store">
                            </a>
                            <a href="#" class="d-block my-1">
                                <img src="{{ url('assets') }}/images/googleplay.png" alt="Google play">
                            </a>
                        </div>
                    </div><!-- end mobile-app-content -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end app-area -->
    <!-- ================================
       START APP AREA
================================= -->

    <!-- ================================
       START HOW-IT-WORKS AREA
================================= -->
    <section class="how-it-works-area bg-gray section-padding text-center overflow-hidden">
        <div class="container">
            <h2 class="sec-title text-center"><span class="underline-shape">Bitcoin</span> Mining Investment</h2>
            <div class="col-lg-10 mx-auto mt-5">
                <div class="mining-content-wrap">
                    <div class="generic-video-img-wrap">
                        <img src="{{ url('assets') }}/images/img-loading.jpg" data-src="{{ url('assets') }}/images/blog-img7.jpg" alt="mining image" class="generic-video__img lazy">
                        <a class="icon-element play-btn icon-element-lg hover-y" href="https://www.youtube.com/watch?v=GmOzih6I1zs" data-fancybox="preview-video">
                            <i class="fas fa-play"></i>
                        </a>
                    </div><!-- end mining-img -->
                    <div class="mining-content mt-5 half-shape">
                        <ul class="list-items">
                            <li class="text-black d-inline-block mr-4"><i class="fal fa-check icon bg-1 text-white"></i>Instant Transactions</li>
                            <li class="text-black d-inline-block mr-4"><i class="fal fa-check icon bg-2 text-white"></i>Secure User Servers</li>
                            <li class="text-black d-inline-block mr-4"><i class="fal fa-check icon bg-3 text-white"></i>Bitcoin Exchange</li>
                        </ul>
                        <p class="pt-4 pb-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum dolor sit amet</p>
                        <a href="sign-up.html" class="btn btn-primary">Let's Start Now</a>
                    </div><!-- end mining-item -->
                </div><!-- end mining-content -->
            </div><!-- end col-lg-10 -->
        </div><!-- end container -->
    </section><!-- end how-it-works-area -->
    <!-- ================================
       START HOW-IT-WORKS AREA
================================= -->

    <hr class="border-top-gray my-0">

    <!-- ================================
       START CLIENT-LOGO AREA
================================= -->
    <section class="client-logo-area section-padding position-relative">
        <span class="ring-shape ring-shape-1 position-absolute"></span>
        <span class="ring-shape ring-shape-2 position-absolute"></span>
        <span class="ring-shape ring-shape-3 position-absolute"></span>
        <span class="ring-shape ring-shape-4 position-absolute"></span>
        <span class="ring-shape ring-shape-5 position-absolute"></span>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h2 class="sec-title mb-4 mb-lg-0"><span class="underline-shape">Trusted</span> by Bitcoin Business</h2>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-7">
                    <div class="client-logo-carousel-2 owl-carousel">
                        <div class="client-logo-item d-inline-block">
                            <img src="{{ url('assets') }}/images/client1.png" alt="brand image">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item d-inline-block">
                            <img src="{{ url('assets') }}/images/client2.png" alt="brand image">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item d-inline-block">
                            <img src="{{ url('assets') }}/images/client3.png" alt="brand image">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item d-inline-block">
                            <img src="{{ url('assets') }}/images/client4.png" alt="brand image">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item d-inline-block">
                            <img src="{{ url('assets') }}/images/client5.png" alt="brand image">
                        </div><!-- end client-logo-item -->
                    </div><!-- end client-logo-carousel -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end client-logo-area -->
    <!-- ================================
       START CLIENT-LOGO AREA
================================= -->

    <hr class="border-top-gray my-0">

    <!-- ================================
       START TESTIMONIAL AREA
================================= -->
    <section class="testimonial-area section-padding text-center position-relative">
        <img src="{{ url('assets') }}/images/small-team1.jpg" alt="testtmonial-image" class="random-img" />
        <img src="{{ url('assets') }}/images/small-team2.jpg" alt="testtmonial-image" class="random-img" />
        <img src="{{ url('assets') }}/images/small-team3.jpg" alt="testtmonial-image" class="random-img" />
        <img src="{{ url('assets') }}/images/small-team4.jpg" alt="testtmonial-image" class="random-img" />
        <img src="{{ url('assets') }}/images/small-team5.jpg" alt="testtmonial-image" class="random-img" />
        <img src="{{ url('assets') }}/images/small-team6.jpg" alt="testtmonial-image" class="random-img" />
        <img src="{{ url('assets') }}/images/small-team7.jpg" alt="testtmonial-image" class="random-img" />
        <div class="container">
            <h2 class="sec-title"><span class="underline-shape">Feedback</span> Our Investors</h2>
            <div class="col-lg-8 mx-auto mt-5">
                <div class="client-testimonial owl-carousel owl-theme">
                    <div class="testimonial-card">
                        <div class="testimonial__img">
                            <span class="testimonial__img-circle"></span>
                            <img src="{{ url('assets') }}/images/small-team1.jpg" alt="testimonial image" />
                        </div>
                        <p class="testimonial__desc">
                            Enjoy the diversity of ThePin. Check this numerous demos, made
                            for different purposes. Easy to import & highly customizable.
                            All of the presented elements, layouts & styles can be theme.
                        </p>
                        <h4 class="testimonial__title">Richard_evil</h4>
                        <span class="testimonial__meta">United States</span>
                    </div><!-- end testimonial-card -->
                    <div class="testimonial-card">
                        <div class="testimonial__img">
                            <span class="testimonial__img-circle"></span>
                            <img src="{{ url('assets') }}/images/small-team2.jpg" alt="testimonial image" />
                        </div>
                        <p class="testimonial__desc">
                            Enjoy the diversity of ThePin. Check this numerous demos, made
                            for different purposes. Easy to import & highly customizable.
                            All of the presented elements, layouts & styles can be theme.
                        </p>
                        <h4 class="testimonial__title">Denwen_evil</h4>
                        <span class="testimonial__meta">Australia</span>
                    </div><!-- end testimonial-card -->
                    <div class="testimonial-card">
                        <div class="testimonial__img">
                            <span class="testimonial__img-circle"></span>
                            <img src="{{ url('assets') }}/images/small-team3.jpg" alt="testimonial image" />
                        </div>
                        <p class="testimonial__desc">
                            Enjoy the diversity of ThePin. Check this numerous demos, made
                            for different purposes. Easy to import & highly customizable.
                            All of the presented elements, layouts & styles can be theme.
                        </p>
                        <h4 class="testimonial__title">Amanda_evil</h4>
                        <span class="testimonial__meta">United Kingdom</span>
                    </div><!-- end testimonial-card -->
                </div><!-- end client-testimonial -->
            </div><!-- end col-lg-8 -->
        </div><!-- end container -->
    </section><!-- end testimonial-area -->
    <!-- ================================
       START TESTIMONIAL AREA
================================= -->

    <!-- ================================
       START BLOG AREA
================================= -->
    <section class="blog-area section--padding bg-gray">
        <div class="container">
            <h2 class="sec-title text-center"><span class="underline-shape">Latest</span> Tips & Articles</h2>
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-y">
                        <a href="blog-single.html" class="d-block">
                            <img class="card-img-top lazy" src="{{ url('assets') }}/images/img-loading.jpg" data-src="{{ url('assets') }}/images/blog-img1.jpg" alt="Blog image">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="blog-single.html">How Cryptocurrency Begun and Its Impact To Financial</a></h5>
                            <p class="card-text font-size-15">There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <hr class="border-top-gray my-4">
                            <div class="media mt-4">
                                <img class="mr-3 flex-shrink-0 rounded-circle" src="{{ url('assets') }}/images/avatar-1.jpg" alt="Author image">
                                <div class="media-body align-items-center">
                                    <h6>Kevin Helms</h6>
                                    <p class="font-size-14">6 hours ago</p>
                                </div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-y">
                        <a href="blog-single.html" class="d-block">
                            <img class="card-img-top lazy" src="{{ url('assets') }}/images/img-loading.jpg" data-src="{{ url('assets') }}/images/blog-img2.jpg" alt="Blog image">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="blog-single.html">Cryptocurrency - Who Are Involved With It?</a></h5>
                            <p class="card-text font-size-15">There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <hr class="border-top-gray my-4">
                            <div class="media mt-4">
                                <img class="mr-3 flex-shrink-0 rounded-circle" src="{{ url('assets') }}/images/avatar-2.jpg" alt="Author image">
                                <div class="media-body align-items-center">
                                    <h6>David Wise</h6>
                                    <p class="font-size-14">12 hours ago</p>
                                </div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-y">
                        <a href="blog-single.html" class="d-block">
                            <img class="card-img-top lazy" src="{{ url('assets') }}/images/img-loading.jpg" data-src="{{ url('assets') }}/images/blog-img3.jpg" alt="Blog image">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="blog-single.html">Risks & Rewards Of Investing In Bitcoin. Pros and Cons</a></h5>
                            <p class="card-text font-size-15">There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <hr class="border-top-gray my-4">
                            <div class="media mt-4">
                                <img class="mr-3 flex-shrink-0 rounded-circle" src="{{ url('assets') }}/images/avatar-3.jpg" alt="Author image">
                                <div class="media-body align-items-center">
                                    <h6>Felipe Erazo</h6>
                                    <p class="font-size-14">23 Dec 2020</p>
                                </div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end blog-area -->
    <!-- ================================
       START BLOG AREA
================================= -->

    <!-- ================================
         END FOOTER AREA
================================= -->
    <section class="footer-area padding-top-80px pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item mb-5">
                        <a href="index.html" class="d-block">
                            <img src="{{ url('assets') }}/images/logo-black.png" alt="logo">
                        </a>
                        <ul class="list-items pt-4">
                            <li class="mb-3"><a href="mailto:example@gmail.com"><i class="fal fa-envelope mr-1 font-size-14"></i> example@gmail.com</a></li>
                            <li class="mb-3"><a href="tel:0021621184010"><i class="fal fa-phone mr-1 font-size-14"></i> 00216 21 184 010</a></li>
                            <li class="mb-3"><i class="fal fa-map-marker-alt mr-1 font-size-14"></i> New York, United States</li>
                            <li class="mb-3"><i class="fal fa-clock mr-1 font-size-14"></i> Mon-Sat 08AM - 05PM</li>
                        </ul>
                        <div class="social-icons">
                            <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="icon-element icon-element-sm mr-1"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item mb-5">
                        <h5 class="mb-3 font-weight-semi-bold">Company</h5>
                        <div class="title-shape border-bottom-0"><span></span></div>
                        <ul class="list-items list-items-hover pt-4">
                            <li class="mb-2"><a href="about.html">About Us</a></li>
                            <li class="mb-2"><a href="team-member.html">Our Team</a></li>
                            <li class="mb-2"><a href="pricing.html">Pricing</a></li>
                            <li class="mb-2"><a href="service.html">Services</a></li>
                            <li class="mb-2"><a href="contact.html">Contact Us</a></li>
                            <li class="mb-2"><a href="blog-grid-no-sidebar.html">Blog</a></li>
                        </ul>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item mb-5">
                        <h5 class="mb-3 font-weight-semi-bold">Help & Support</h5>
                        <div class="title-shape border-bottom-0"><span></span></div>
                        <ul class="list-items list-items-hover pt-4">
                            <li class="mb-2"><a href="#">Guide</a></li>
                            <li class="mb-2"><a href="faq.html">Faq</a></li>
                            <li class="mb-2"><a href="#">Advertise</a></li>
                            <li class="mb-2"><a href="#">Help Center</a></li>
                            <li class="mb-2"><a href="#">Privacy Policy</a></li>
                            <li class="mb-2"><a href="terms-of-services.html">Terms of Use</a></li>
                        </ul>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item mb-5">
                        <h5 class="mb-3 font-weight-semi-bold">Subscribe to Newsletter</h5>
                        <div class="title-shape border-bottom-0"><span></span></div>
                        <p class="pt-4">Get crypto analysis, news and updates right to your inbox!</p>
                        <form action="#" class="pt-3">
                            <input type="text" class="form-control form--control mb-3" placeholder="Enter email address">
                            <button class="btn btn-primary w-100" type="submit">Subscribe Now</button>
                        </form>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <hr class="border-top-gray my-4">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <p class="copy-desc">Copyright &copy; 2021 Bitcon. All Rights Reserved. By <a href="https://techydevs.com/">TechyDevs</a></p>
                <div class="select-picker-wrap">
                    <select class="select-picker select-picker-sm" data-width="180" data-size="5">
                        <option value="de">Deutsch</option>
                        <option value="en" selected>English</option>
                        <option value="id">Bahasa Indonesia</option>
                        <option value="it">Italiano</option>
                        <option value="ko">한국어</option>
                        <option value="pl">Polski</option>
                        <option value="tr">Türkçe</option>
                    </select>
                </div>
            </div><!-- end copyright-content -->
        </div><!-- end container -->
    </section><!-- end footer-area -->
    <!-- ================================
          END FOOTER AREA
================================= -->
    <!-- start scroll-to-top -->
    <div id="scroll-to-top">
        <i class="far fa-angle-up" title="Go top"></i>
    </div>
    <!-- end scroll-to-top -->

    <!-- Template JS Files -->
    <script src="{{ url('assets') }}/js/jquery-3.4.1.min.js"></script>
    <script src="{{ url('assets') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('assets') }}/js/bootstrap-select.min.js"></script>
    <script src="{{ url('assets') }}/js/owl.carousel.min.js"></script>
    <script src="{{ url('assets') }}/js/jquery.fancybox.min.js"></script>
    <!-- Start counter js -->
    <script src="{{ url('assets') }}/js/waypoints.min.js"></script>
    <script src="{{ url('assets') }}/js/jquery.counterup.min.js"></script>
    <!-- end counter js -->
    <script src="{{ url('assets') }}/js/jquery.lazy.min.js"></script>
    <script src="{{ url('assets') }}/js/main.js"></script>
    <script>
        $("select option").each(function() {
            $(this).attr("data-symbol", $(this).text());
        });
        $("select").on("focus", function() {
            $(this).find("option").each(function() {
                $(this).text($(this).attr("data-symbol"));
            });
        }).on("change mouseleave", function() {
            $(this).focus();
            $(this).find("option:selected").text($(this).val());
            $(this).blur();
        }).change();
    </script>
</body>

</html>