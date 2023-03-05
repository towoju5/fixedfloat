<!-- Footer
  ============================================= -->
<footer id="footer" class="pb-4">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md mb-3 mb-md-0">
                <h4 class="text-3 text-muted text-uppercase font-weight-400 mb-3">
                    Information
                </h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Affiliate</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Fees</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md mb-3 mb-md-0">
                <h4 class="text-3 text-muted text-uppercase font-weight-400 mb-3">
                    Services
                </h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Transfer Money</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Send Money</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Receive Money</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Online Shopping</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pay bill</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-md mb-3 mb-md-0">
                <h4 class="text-3 text-muted text-uppercase font-weight-400 mb-3">
                    Help Center
                </h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Support</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md mb-3 mb-md-0">
                <h4 class="text-3 text-muted text-uppercase font-weight-400 mb-3">
                    Keep in touch
                </h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">facebook</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">twitter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">google</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">youtube</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-3">
                <h4 class="text-3 text-muted text-uppercase font-weight-400 mb-3">
                    Subscribe
                </h4>
                <p>Subscribe to receive latest news and updates.</p>
                <div class="input-group newsletter">
                    <input class="form-control" placeholder="Your Email Address" name="newsletterEmail"
                        id="newsletterEmail" type="text" />
                    <span class="input-group-append">
                        <button class="btn btn-secondary" type="submit" data-toggle="tooltip"
                            data-original-title="Subscribe">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright pt-4 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <p class="text-center text-lg-left mb-2 mb-lg-0">
                        Copyright &copy; 2019 <a href="#">Payyed</a>. All Rights
                        Reserved.
                    </p>
                </div>
                <div class="col-lg d-lg-flex align-items-center justify-content-lg-end">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Security</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Terms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Privacy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->
</div>
<!-- Document Wrapper end -->

<!-- Back to Top
============================================= -->
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)">
    <i class="fa fa-chevron-up"></i></a>

<!-- Script -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>
<script src="https://kit.fontawesome.com/fc49c28ef9.js" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
{{-- <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> --}}
@stack('js')
@if (!$errors->isEmpty())
    @foreach ($errors->all(':message') as $input_error)
        <script>
            swal('Hello', '{!! $input_error !!}', 'info')
        </script>
    @endforeach
@endif
</body>

</html>
