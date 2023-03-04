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
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i
        class="fa fa-chevron-up"></i></a>

<!-- Video Modal
============================================= -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content bg-transparent border-0">
            <button type="button" class="close text-white opacity-10 ml-auto mr-n3 font-weight-400"
                data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body p-0">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" id="video" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal end -->


<!-- Script -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>
<script src="https://kit.fontawesome.com/fc49c28ef9.js" crossorigin="anonymous"></script>
<script>
    function convertCurrency() {
        const amount = $("#send_amount").val();
        const fromCurrency = $("#send_network").val();
        const toCurrency = $("#receive_network").val();
        var send, receive, send_network, receive_network
        send = $("#send").find(":selected").val();
        receive = $("#receive").find(":selected").val();
        send_network = $("#send_network").find(":selected").val();
        receive_network = $("#receive_network").find(":selected").val();
        const ex_url = "{{ url('/') }}/rate?send=" + send + "&receive=" + receive + "&sendNetwork=" +
            send_network + "&receiveNetwork=" + receive_network + "&amount=" + amount;
        console.log(ex_url);
        fetch(ex_url)
            .then(response => {
                return response.json();
            })
            .then(data => {
                let rate = data.data.rate;
                let total = data.data.receiveAmount;
                $("#receive_amount").val(total)
                console.log(data.data);
                // document.getElementById("receive").value = total;
                document.getElementById("exchange_result").innerHTML = rate;
            });
    }
</script>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        let F = UI.func;
        moment.locale("en");
        Array.from(
            document.querySelectorAll(".blog-post time[timestamp]")
        ).forEach(function(obj) {
            let time = moment(
                moment.unix(+obj.getAttribute("timestamp")).toDate()
            ).local();
            obj.innerHTML = time.format("LL");
        });
        Array.from(document.querySelectorAll("#recent_list time")).forEach(
            function(obj) {
                let time = moment(
                    moment.unix(+obj.getAttribute("timestamp")).toDate()
                ).local();
                obj.innerHTML = time.fromNow();
            }
        );
        Array.from(
            document.querySelectorAll("#recent_list .recent-timer")
        ).forEach(function(obj) {
            obj.innerHTML = APP.timeToText(obj.getAttribute("data-time"));
        });

        let Game = undefined;
        let stopAnimation = F.localStorage.get(
            "fixedfloat_index_animation_stop"
        );

        F.bind("canvas_fly_game_stop_btn", "click", function() {
            if (!Game) {
                return;
            }
            if (Game.running) {
                Game.stop();
                if (typeof gtag == "function") {
                    gtag("event", "game-stop", {
                        event_category: "activity"
                    });
                }
                this.innerHTML = "Run background animation";
                F.localStorage.set("fixedfloat_index_animation_stop", 1);
            } else {
                Game.start();
                if (typeof gtag == "function") {
                    gtag("event", "game-start", {
                        event_category: "activity"
                    });
                }
                this.innerHTML = "Stop background animation";
                F.localStorage.set("fixedfloat_index_animation_stop", 0);
            }
        });

        window.onload = function() {
            let ua = navigator.userAgent.toLowerCase();
            if (ua.indexOf("safari") != -1 && ua.indexOf("chrome") < 0) {
                return;
            }
            Game = AnimationBubbles(
                "canvas_fly_game",
                "canvas_fly_game_stats",
                +stopAnimation
            );
            if (+stopAnimation) {
                // Game.stop();
                F.id("canvas_fly_game_stop_btn").innerHTML =
                    "Run background animation";
            } else {
                F.id("canvas_fly_game_stop_btn").innerHTML =
                    "Stop background animation";
            }
        };
    });
</script>
<template id="cookies_accept">
    <div class="cookie-table">
        <div class="cookie-cell">
            <p>
                {{ __('We use cookies to provide the best experience on our website. By
                        using FixedFloat.com you agree to') }}
                <a href="{{ url('/') }}/privacy-policy">{{ __('Privacy Policy') }}</a> and
                <a href="{{ url('/') }}/terms-of-service">{{ __('Terms of Service') }}</a>.
            </p>
        </div>
        <div class="cookie-cell clrfix">
            <a class="btn submit bghl close" href="javascript:;">{{ __('Accept') }} &amp; {{ __('Close') }}</a>
        </div>
    </div>
</template>

<script src="//cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
@if (!$errors->isEmpty())
    @foreach ($errors->all(':message') as $input_error)
        <script>
            swal('Hello', '{!! $input_error !!}', 'info')
        </script>
    @endforeach
@endif
</body>

</html>
