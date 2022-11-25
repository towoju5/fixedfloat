</main>
<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function () {
    let F = UI.func;
    moment.locale("en");
    Array.from(
      document.querySelectorAll(".blog-post time[timestamp]")
    ).forEach(function (obj) {
      let time = moment(
        moment.unix(+obj.getAttribute("timestamp")).toDate()
      ).local();
      obj.innerHTML = time.format("LL");
    });
    Array.from(document.querySelectorAll("#recent_list time")).forEach(
      function (obj) {
        let time = moment(
          moment.unix(+obj.getAttribute("timestamp")).toDate()
        ).local();
        obj.innerHTML = time.fromNow();
      }
    );
    Array.from(
      document.querySelectorAll("#recent_list .recent-timer")
    ).forEach(function (obj) {
      obj.innerHTML = APP.timeToText(obj.getAttribute("data-time"));
    });

    let Game = undefined;
    let stopAnimation = F.localStorage.get(
      "fixedfloat_index_animation_stop"
    );

    F.bind("canvas_fly_game_stop_btn", "click", function () {
      if (!Game) {
        return;
      }
      if (Game.running) {
        Game.stop();
        if (typeof gtag == "function") {
          gtag("event", "game-stop", { event_category: "activity" });
        }
        this.innerHTML = "Run background animation";
        F.localStorage.set("fixedfloat_index_animation_stop", 1);
      } else {
        Game.start();
        if (typeof gtag == "function") {
          gtag("event", "game-start", { event_category: "activity" });
        }
        this.innerHTML = "Stop background animation";
        F.localStorage.set("fixedfloat_index_animation_stop", 0);
      }
    });

    window.onload = function () {
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
        {{__('We use cookies to provide the best experience on our website. By
        using FixedFloat.com you agree to')}}
        <a href="{{ url('/') }}/privacy-policy">{{__('Privacy Policy')}}</a> and
        <a href="{{ url('/') }}/terms-of-service">{{__('Terms of Service')}}</a>.
      </p>
    </div>
    <div class="cookie-cell clrfix">
      <a class="btn submit bghl close" href="javascript:;">{{__('Accept')}} &amp; {{__('Close')}}</a>
    </div>
  </div>
</template>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if(!$errors->isEmpty())
    @foreach ($errors->all(':message') as $input_error)
    <script>
        swal('Hello', '{!! $input_error !!}', 'info')
    </script>
    @endforeach
@endif
<footer>
    <script type="text/javascript" src="{{ url('assets/js/order.min.js') }}"></script>
    <div class="wrapper">
        <div class="foot-outro">
            <a href="//fixedfloat.com/index.html" id="foot_logo" class="logo">
                <span class="logo-text-fixed"></span>
                <div class="ico">
                    <span class="logo-arrow-from"></span><span class="logo-arrow-to hl"></span>
                </div>
                <span class="logo-text-float hl"></span>
            </a>
            <div class="foot-soc">
                <!-- <span>Follow us:</span> -->
                <a href="https://twitter.com/fixedfloat" title="Twitter" target="_blank" rel="noopener noreferrer"
                    class="ico tw hoverhl"></a>
                <!-- <a href="https://www.facebook.com/fixedfloat" title="Facebook" target="_blank" rel="noopener noreferrer" class="ico fb hoverhl"></a> --><a
                    href="https://t.me/FixedFloat" title="Telegram" target="_blank" rel="noopener noreferrer"
                    class="ico tg hoverhl"></a><a href="https://medium.com/fixedfloat" title="medium.com"
                    target="_blank" rel="noopener noreferrer" class="ico medium hoverhl"></a><a
                    href="https://www.instagram.com/fixedfloat/" title="instagram.com" target="_blank"
                    rel="noopener noreferrer" class="ico instagram hoverhl"></a><a
                    href="https://www.reddit.com/user/FixedFloat/" title="Reddit" target="_blank"
                    rel="noopener noreferrer" class="ico reddit hoverhl"></a><a
                    href="https://bitcointalk.org/index.php?topic=5107342.new#new" title="bitcointalk.org"
                    target="_blank" rel="noopener noreferrer" class="ico bitcointalk hoverhl"></a><a
                    href="https://www.trustpilot.com/review/fixedfloat.com" title="trustpilot.com" target="_blank"
                    rel="noopener noreferrer" class="ico trustpilot hoverhl"></a>
            </div>
            <div class="copyright">
                ©&nbsp;2018–2022&nbsp;<span>{{ settings('website_title')}}</span>.&nbsp;{{__('All rights
                reserved.')}}
            </div>
        </div>
        <div class="foot-menu linkhl">
            <div class="col">
                <h4>FixedFloat</h4>
                <ul>
                    <li><a href="{{ route('page.about', 'about') }}">{{__('About')}}</a></li>
                    <li><a href="{{ route('page.about', 'brand') }}">{{__('Our brand')}}</a></li>
                    <li><a href="{{ route('page.about', 'affiliate') }}">{{__('Affiliate program')}}</a></li>
                    <!-- <li><a href="//fixedfloat.com/addcoin">Add your coin</a></li> -->
                    <li><a href="//fixedfloat.com/terms-of-service.html">{{__('Terms of service')}}</a></li>
                    <li><a href="//fixedfloat.com/privacy-policy.html">{{__('Privacy Policy')}}</a></li>
                </ul>
            </div>
            <div class="col">
                <h4>Popular</h4>
                <ul>
                    <li><a href="{{ route('page.blog') }}">{{__('Blog')}}</a></li>
                    <li><a href="{{ route('page.about', 'brand') }}">XMR to BTC</a></li>
                    <li><a href="{{ route('page.about', 'brand') }}">ETH to BTC</a></li>
                    <li><a href="{{ route('page.about', 'brand') }}">LTC to ETH</a></li>
                    <li><a href="{{ route('page.about', 'brand') }}">{{__('Lightning Faucet')}}</a></li>
                </ul>
            </div>
            <div class="col">
                <h4>Support</h4>
                <ul>
                    <li><a href="//fixedfloat.com/faq.html">{{__('FAQ')}}</a></li>
                    <li><a href="//fixedfloat.com/support.html">{{__('Support')}}</a></li>
                    <li><a href="//fixedfloat.com/api.html">{{__('API')}}</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
