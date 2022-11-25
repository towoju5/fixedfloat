

    @include('header')


    <div class="wrapper clrfix" style="padding: 2rem">
        @yield('content')
       </div>

    @include('footer')
    <!-- Content -->

    {{-- @yield('content') --}}

    <!-- / Content -->


    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ url('backend') }}/assets/vendor/css/core.css" class="template-customizer-core-css">
    {{-- <link rel="stylesheet" href="{{ url('backend') }}/assets/vendor/css/theme-default.css" class="template-customizer-theme-css"> --}}
    {{-- <link rel="stylesheet" href="{{ url('backend') }}/assets/css/demo.css"> --}}

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ url('backend') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">

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