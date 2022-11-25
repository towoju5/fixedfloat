<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="{{ url('backend') }}/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>{{ settings('website_title') }} - Authentication System</title>

    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!">
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ url('backend') }}/assets/img/favicon/favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ url('backend') }}/assets/vendor/fonts/boxicons.css">



    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ url('backend') }}/assets/vendor/css/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="{{ url('backend') }}/assets/vendor/css/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="{{ url('backend') }}/assets/css/demo.css">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ url('backend') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">



    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ url('backend') }}/assets/vendor/css/pages/page-auth.css">
    <!-- Helpers -->
    <script src="{{ url('backend') }}/assets/vendor/js/helpers.js"></script>
    <style type="text/css">
        .layout-menu-fixed .layout-navbar-full .layout-menu,
        .layout-page {
            padding-top: 0px !important;
        }

        .content-wrapper {
            padding-bottom: 0px !important;
        }
    </style>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ url('backend') }}/assets/js/config.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->

</head>

<body>

    <!-- Content -->

    @yield('content')

    <!-- / Content -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ url('backend') }}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ url('backend') }}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ url('backend') }}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ url('backend') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="{{ url('backend') }}/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <!-- Main JS -->
    <script src="{{ url('backend') }}/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
    <style>
        .tb_button {
            padding: 1px;
            cursor: pointer;
            border-right: 1px solid #8b8b8b;
            border-left: 1px solid #FFF;
            border-bottom: 1px solid #fff;
        }

        .tb_button.hover {
            borer: 2px outset #def;
            background-color: #f8f8f8 !important;
        }

        .ws_toolbar {
            z-index: 100000
        }

        .ws_toolbar .ws_tb_btn {
            cursor: pointer;
            border: 1px solid #555;
            padding: 3px
        }

        .tb_highlight {
            background-color: yellow
        }

        .tb_hide {
            visibility: hidden
        }

        .ws_toolbar img {
            padding: 2px;
            margin: 0px
        }
    </style>
</body>

</html>