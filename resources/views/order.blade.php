<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Coinunify | Instant cryptocurrency exchange</title>
    <meta name="title" content="Coinunify | Instant cryptocurrency exchange" />
    <meta property="og:title" content="Coinunify | Instant cryptocurrency exchange" />
    <meta name="description"
        content="Instant cryptocurrency exchange with Lightning Network! Best rates and large volumes of currencies. Try now!" />
    <meta property="og:description"
        content="Instant cryptocurrency exchange with Lightning Network! Best rates and large volumes of currencies. Try now!" />
    <meta property="og:site_name" content="Coinunify" />
    <meta property="og:url" content="{{ url('/') }}/index.html" />
    <meta property="twitter:site" content="@Coinunify" />
    <meta property="twitter:creator" content="@Coinunify" />
    <meta property="twitter:domain" content="{{ url('/') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta property="og:image" content="{{ url('/') }}/assets/images/public/ogimage.jpg" />
    <meta name="title" content="Coinunify | Instant cryptocurrency exchange" />
    <meta property="og:title" content="Coinunify | Instant cryptocurrency exchange" />
    <meta property="og:description"
        content="Instant cryptocurrency exchange with Lightning Network! Best rates and large volumes of currencies. Try now!" />
    <link rel="shortcut icon" href="{{ url('/') }}/assets/images/favicon.png" />
    <link rel="alternate" hreflang="en" href="{{ url('/') }}" />
    <link rel="alternate" hreflang="es" href="{{ url('lang/es') }}" />
    <link rel="alternate" hreflang="de" href="{{ url('lang/de') }}" />
    <link rel="alternate" hreflang="fr" href="{{ url('lang/fr') }}" />
    <link rel="alternate" hreflang="pt" href="{{ url('lang/pt') }}" />
    <link rel="alternate" hreflang="ru" href="{{ url('lang/ru') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/order.min.css') }}">
    <link rel="preload" href="{{ url('/') }}/assets/fonts/icons/icons8dc5.woff2?2610" as="font"
        type="font/woff2" crossorigin />
    <link rel="preload" href="{{ url('/') }}/assets/fonts/opensans/regular/opensans-regular-latin.woff2"
        as="font" type="font/woff2" crossorigin />
    <link rel="preload" href="{{ url('/') }}/assets/fonts/opensans/semibold/opensans-semibold-latin.woff2"
        as="font" type="font/woff2" crossorigin />
    <link rel="preload" href="{{ url('/') }}/assets/fonts/opensans/light/opensans-light-latin.woff2"
        as="font" type="font/woff2" crossorigin />
    <link rel="preload" href="{{ url('/') }}/assets/fonts/opensans/bold/opensans-bold-latin.woff2" as="font"
        type="font/woff2" crossorigin />
    <link rel="apple-touch-icon" sizes="57x57"
        href="{{ url('/') }}/assets/images/icons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60"
        href="{{ url('/') }}/assets/images/icons/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72"
        href="{{ url('/') }}/assets/images/icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76"
        href="{{ url('/') }}/assets/images/icons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="117x117"
        href="{{ url('/') }}/assets/images/icons/apple-touch-icon-117x117.png" />
    <link rel="apple-touch-icon" sizes="120x120"
        href="{{ url('/') }}/assets/images/icons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144"
        href="{{ url('/') }}/assets/images/icons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152"
        href="{{ url('/') }}/assets/images/icons/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ url('/') }}/assets/images/icons/apple-touch-icon-180x180.png" />
    <link rel="preload" as="style" href="{{ url('/') }}/assets/css/svg_min5a9a.css?170153" />
    <!-- <noscript> -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/svg_min5a9a.css?170153" />
    <!-- </noscript> -->
    <script type="text/javascript" src="{{ url('/') }}/../polyfill.io/v3/polyfill.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/min7165.css?130138" />
    <script type="text/javascript" src="{{ url('/') }}/assets/js/min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/assets/js/libs/matter.min.js" defer></script>
    <script type="text/javascript" src="{{ url('/') }}/assets/js/squaregame.minf5d4.js?250318"></script>
    <script type="text/javascript" src="{{ url('/') }}/assets/js/libs/moment.min.js" defer></script>
    <script type="text/javascript" src="{{ url('/') }}/assets/js/libs/jsqr.js" defer></script>
    <script type="text/javascript" src="{{ url('/') }}/assets/js/libs/webln.min.js" defer></script>
</head>
<?php
$start_time = \Carbon\Carbon::parse($order->created_at);
$finish_time = \Carbon\Carbon::parse($order->order_expiration);
$order_timer = $finish_time->diffInMinutes($finish_time, true);

if(empty($order->qr_code)){
    $qr_code = "https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$order->send_address&choe=UTF-8";
} else {
    $qr_code = $order->qr_code;
}
?>

<body class="index">
    <main>
        <section id="index_main" class="main-section withheader darkbg">
            <style id="highlighting_style">
                a,
                .hl,
                .hoverhl:hover,
                .linkhl a:hover {
                    color: #f7931a;
                }

                .borderhl {
                    border-color: #f7931a;
                }

                .hlfill {
                    fill: #f7931a;
                }

                .bghl,
                .buttonhl button:hover {
                    background-color: #f7931a;
                }
            </style>
            <header id="header">
                <div class="wrapper">
                    <div class="left-menu-wrap" id="left_menu_wrap">
                        <div id="left_menu_btn">
                            <div><span></span><span></span><span></span></div>
                        </div>
                        <nav class="left-menu" id="left_menu">
                            <section>
                                <ul id="left_menu_content" class="menu linkhl">
                                    <li class="menu-head"><span>Account</span></li>
                                    <li><a href="{{ url('login') }}">Sign in</a></li>
                                    <li><a href="{{ url('register') }}">Sign up</a></li>
                                    <li class="menu-head"><span>Coinunify</span></li>
                                    <li><a href="{{ url('page/about') }}">About</a></li>
                                    <li><a href="{{ url('page/blog') }}">Blog</a></li>
                                    <li><a href="{{ url('page/faq') }}">FAQ</a></li>
                                    <li><a href="{{ url('page/api') }}">API</a></li>
                                    <li><a href="{{ url('page/support') }}">Support</a></li>
                                    <li><a href="{{ url('page/affiliate') }}">Affiliate program</a></li>
                                </ul>
                            </section>
                        </nav>
                    </div>
                    <nav class="clrfix">
                        <a href="{{ url('/') }}/" id="logo" class="logo">
                            {{-- <span class="logo-text-fixed" id="logo_text_from" data-value="{{ $order->to_currency }}"></span> --}}
                            <div class="ico">
                                <img src="{{ settings('website_logo') }}" alt="">
                            </div>
                            {{-- <span class="logo-text-float" id="logo_text_to" data-value="{{ $order->from_currency }}"></span> --}}
                        </a>
                        <div class="nav userbar hoverhl">
                            @if (auth()->check())
                                <button class="btn-text" onclick="window.location.href='{{ url('user/orders') }}'">My
                                    Account</button>
                                <button class="btn-text"
                                    onclick="window.location.href='{{ route('logout') }}'">Logout</button>
                            @else
                                <button class="btn-text" id="header_signin">Sign in</button>
                                <button class="btn-text" id="header_signup">Sign up</button>
                            @endif
                        </div>
                        <div class="loc hoverhl">
                            <a class="menu-focus-btn" tabindex="0">
                                <div class="ui-select-value">
                                    <span>English</span><i class="loc-img loc-en"></i>
                                </div>
                            </a>
                            <ul class="menu-focus-opened hoverhl">
                                <li>
                                    <a href="{{ url('lang/en') }}"><span>English</span><i
                                            class="loc-img loc-en"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('lang/es') }}"><span>Español</span><i
                                            class="loc-img loc-es"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('lang/de') }}"><span>Deutsch</span><i
                                            class="loc-img loc-de"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('lang/fr') }}"><span>Français</span><i
                                            class="loc-img loc-fr"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('lang/pt') }}"><span>Português</span><i
                                            class="loc-img loc-pt"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('lang/ru') }}"><span>Русский</span><i
                                            class="loc-img loc-ru"></i></a>
                                </li>
                            </ul>
                            <div class="shadow-body" tabindex="0"></div>
                        </div>
                        <ul class="nav menu hoverhl">
                            <li><a href="{{ url('page/about') }}">About</a></li>
                            <li><a href="{{ url('page/blog') }}">Blog</a></li>
                            <li><a href="{{ url('page/faq') }}">FAQ</a></li>
                            <li><a href="{{ url('page/api') }}">API</a></li>
                            <li><a href="{{ url('page/support') }}">Support</a></li>
                        </ul>
                    </nav>
                    <div class="shadow-body"></div>
                </div>
            </header>
            <template id="auth">
                <div class="popup-auth">
                    <nav class="auth-nav" id="auth_nav">
                        <button type="button" id="nav_signin" class="auth-nav-btn" data-layout="signin">
                            {{ __('Sign in') }}</button><button type="button" id="nav_signup" class="auth-nav-btn"
                            data-layout="signup">
                            {{ __('Sign up') }}</button><i class="bghl"></i>
                    </nav>
                    <div class="auth-outer" id="auth_layouts">
                        <form class="auth-layout" id="layout_forgot" method="POST"
                            action="{{ route('password.email') }}">
                            @csrf
                            <h4>{{ __('Forgot Password') }}?</h4>
                            <div class="input-dyn">
                                <input name="email" required type="text" value="" />
                                <label for="email">{{ __('Email') }}</label>
                                <sub class="error">{{ __('Email entered is not a valid email') }}</sub>
                            </div>
                            <div class="auth-success" id="auth_reset_success">
                                Reset request successfully sent. You will receive a
                                confirmation e-mail if this account has been registered.
                            </div>
                            <div class="auth-error" id="auth_reset_error">
                                User with this email is not registered on the site.
                            </div>
                            <div class="auth-wrap-btn">
                                <button class="btn submit bghl" id="iauth_reset_btn">
                                    Reset password
                                </button>
                            </div>
                            <div class="auth-wrap-btn">
                                <button class="btn-text auth-nav-btn" type="button" data-layout="signin">
                                    Back to Sign in
                                </button>
                            </div>
                        </form>
                        <form class="auth-layout" method="POST" id="layout_signin" action="{{ route('login') }}">
                            @csrf
                            <h4>Welcome to {{ settings('website_title') }}</h4>
                            <div class="input-dyn">
                                <input name="email" required type="text" value="" />
                                <label for="email">{{ __('Email') }}</label>
                                <sub class="error">Email entered is not a valid email</sub>
                            </div>
                            <div class="input-dyn">
                                <input name="password" required type="password" value="" />
                                <label for="pswd">{{ __('Password') }}</label>
                                <sub class="error">Password is empty</sub>
                            </div>
                            <div class="auth-forgot-wrap">
                                <button class="btn-text hl auth-nav-btn" type="button" id="nav_forgot"
                                    data-layout="forgot">
                                    {{ __('Forgot password') }}
                                </button>
                            </div>
                            <div class="auth-error" id="auth_error">
                                Invalid email or password
                            </div>
                            <div class="auth-wrap-btn">
                                <button class="btn submit bghl" id="iauth_signin" type="submit">
                                    {{ __('Sign in') }}
                                </button>
                            </div>
                        </form>
                        <form class="auth-layout" method="POST" id="layout_signup"
                            action="{{ route('register') }}">
                            @csrf
                            <h4>Join to {{ settings('website_title') }}</h4>
                            <div class="input-dyn">
                                <input name="name" required type="text" value="" />
                                <label for="name">{{ __('Name') }}</label>
                            </div>
                            <div class="input-dyn">
                                <input name="email" required type="text" value="" />
                                <label for="email">{{ __('Email') }}</label>
                                <sub class="error">Email entered is not a valid email</sub>
                            </div>
                            <div class="input-dyn">
                                <input name="password" required type="password" value="" />
                                <label for="pswd">{{ __('Password') }}</label>
                                <sub class="error">Password must contain one uppercase, one lowercase, one
                                    number, one special character, and be at least 6 characters
                                    long.</sub>
                            </div>
                            <div class="input-dyn">
                                <input name="password_confirmation" required type="password" value="" />
                                <label for="repswd">{{ __('Confirm Password') }}</label>
                                <sub class="error">Passwords do not match.</sub>
                            </div>
                    </div>
                    <div class="auth-error" id="auth_signup_error">
                        An account with this email already exists.
                        <button class="btn-text auth-nav-btn" type="button" data-layout="forgot"
                            style="color: inherit">
                            {{ __('Forgot password') }}?
                        </button>
                    </div>
                    <div class="auth-wrap-btn">
                        <button class="btn submit bghl" id="iauth_signup">
                            {{ __('Sign up') }}
                        </button>
                    </div>
                    </form>
                </div>
                </div>
            </template>
            <div class="wrapper">
                <section class="order-outer">
                    @php $data = json_decode($order->raw_data); @endphp
                    <!--{{ var_dump(json_decode($order->raw_data, true)) }}-->
                    <div class="order-body">
                        <section class="order-direction clrfix">
                            <div class="dir-from">
                                <div class="dir-cont" data-value="{{ $order->from_currency }}">
                                    <div class="coin-ico svgcoin {{ strtolower($order->from_currency) }}"></div>
                                    <div class="coin-head">{{ __('You send') }}</div>
                                    <div class="coin-value" id="order_send_value">{{ $order->send_amount }}
                                        {{ $order->from_currency }}</div>
                                    <div class="coin-address" title="{{ $order->send_address }}">
                                        {{ $order->send_address }}
                                    </div>
                                </div>
                            </div>
                            <div class="dir-arrow">
                                <div class="ico arrow"></div>
                            </div>
                            <div class="dir-to">
                                <div class="dir-cont" data-value="{{ $order->to_currency }}">
                                    <div class="coin-ico svgcoin {{ strtolower($order->to_currency) }}"></div>
                                    <div class="coin-head">{{ __('You receive') }}</div>
                                    <div class="coin-value" id="order_receive_value">{{ $order->receive_amount }}
                                        {{ $order->to_currency }}</div>
                                    <div class="coin-address" title="{{ $order->receive_address }}">
                                        {{ $order->receive_address }}</div>
                                </div>
                            </div>
                        </section>
                        <div class="order-wrap-shadow">
                            <section class="order-action new" id="order_action">
                                <div class="order-action-body buttonhl">
                                    <div class="order-qr-wrap" id="order_qr">
                                        <div class="order-qr">
                                            <input type="radio" id="qr_type0" name="qr_switcher">
                                            <div class="order-qrcode" href="#"><img
                                                    src="{{ $qr_code }}"
                                                    alt=""></div>
                                            <input type="radio" id="qr_type1" name="qr_switcher" checked="">
                                            <div class="order-qrcode" href="#"><img
                                                    src="{{ $qr_code }}"
                                                    alt=""></div>
                                            <div class="qr-switcher" data-count="1">
                                                <label for="qr_type0"><span>{{ __('Address') }}</span></label>
                                                {{-- <label for="qr_type1"><span>{{ __('With amount') }}</span></label> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <section class="order-head-info" id="order_info">
                                        <div class="order-head-info-inner" id="order_info_inner">
                                            <div class="order-id-wrap">
                                                <label>{{ __('Order ID') }}</label>
                                                <div><span class="pseudo-hint-blue"
                                                        data-copy=" {{ $order->order_id }} " data-hint="Copied"><span
                                                            class="order-id hl"> {{ $order->order_id }} </span><i
                                                            class="ico copy"></i></span></div>
                                            </div>
                                            <div class="order-time new">
                                                <label data-remaining="Time remaining"
                                                    data-status="Order status"></label>
                                                <div>
                                                    <span id="clockdiv" class="hl" {{-- data-time="{{ $order_timer }}" --}}
                                                        data-expired="Order expired" data-exchange="Received"
                                                        data-done="Completed" data-emergency="User response"
                                                        data-refund="Refunded"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <label>Order type</label>
                                                <div><span class="order-type"> {{ $order->order_type }} </span></div>
                                            </div>
                                            <div>
                                                <label>Creation Time</label>
                                                <div><time id="order_time_creation" timestamp="1669051661">
                                                        {{ date('M j, Y g:i A', strtotime($order->order_reg)) }}
                                                    </time></div>
                                            </div>
                                            <div class="none">
                                                <label>Received Time</label>
                                                <div><time id="order_time_tx"
                                                        timestamp="">{{ date('F j, Y g:i A', strtotime($order->order_reg)) }}
                                                    </time>
                                                </div>
                                            </div>
                                            <div class="none">
                                                <label>Completed Time</label>
                                                <div><time id="order_time_competed"
                                                        timestamp="">{{ date('F j, Y g:i A', strtotime($order->order_expiration)) }}
                                                    </time></div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="order-action-details" id="order_details">

                                        <div class="order-data-details">
                                            <div class="order-p-wrap">
                                                <p class="order-p-amount">{{ __('Send') }} <b
                                                        class="order-amount pseudo-hint-blue" data-hint="Copied"
                                                        data-copy="0.01245621"
                                                        data-value="{{ $order->from_currency }}">{{ $order->send_amount }}
                                                        {{ $order->from_currency }}</b> {{ __('to the address') }}:
                                                </p>
                                                <p class="order-p-address"><span class="order-address-wrap"><b
                                                            class="order-address order-address-from pseudo-hint-blue"
                                                            data-copy="{{ $order->send_address }}"
                                                            data-hint="Copied"
                                                            title="{{ $order->send_address }}"><i>{{ $order->send_address }}</i>
                                                            <i class="ico copy"></i></b></span></p>
                                            </div>
                                            <p class="order-attention">
                                                {{ __('The exchange rate will be fixed after receiving') }}
                                                <b>1</b> {{ __('network confirmations.') }}
                                            </p>
                                        </div>
                                        <div class="order-data-destination">
                                            <p><label>{{ __('Receiving address ') }} {{ $order->to_currency }}</label><br><span
                                                    class="order-address-destination">{{ $order->receive_address }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-action-details more none" id="order_details_more">
                                </div>
                            </section>
                            {{-- <section class="order-emergency clrfix" id="section_emergency"></section> --}}
                            <section class="order-timeline clrfix" id="section_timeline">
                                <div class="timeline-container">
                                    <ol id="timeline_steps" class="clrfix" data-value="{{ $order->to_currency }}">
                                        <li id="timeline_new" class="active">
                                            <div><span
                                                    class="ico deposit"></span><label>{{ __('Awaiting deposit') }}</label>
                                            </div>
                                        </li>
                                        <li id="timeline_pending" class="">
                                            <div><span class="ico pending"></span><label
                                                    class="foremergency">{{ __('Waiting
                                                                                                                                                                                                                for user response') }}</label><label>{{ __('Awaiting confirmations') }}</label>
                                            </div>
                                        </li>
                                        <li id="timeline_exchange">
                                            <div><span
                                                    class="ico exchange"></span><label>{{ __('Perform exchange') }}</label>
                                            </div>
                                        </li>
                                        <li id="timeline_done" class="">
                                            <div><span class="ico complete"></span><label
                                                    class="forrefund">{{ __('Refunded') }}</label><label>{{ __('Done') }}</label>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </section>
                            <section class="order-info">
                                <section class="order-info-known">
                                    <h3>{{ __('What do you need to know') }}?</h3>
                                    <div class="order-note"><em class="ico speed">­</em>{{ __('You only need') }}
                                        <strong>1</strong>
                                        {{ __('confirmation of the Bitcoin blockchain for the exchange') }}
                                    </div>
                                    <div class="order-note"><em
                                            class="ico coin {{ $order->from_currency }}">­</em>{{ __('Bitcoin transaction
                                                                                                                                                                            confirmation speed depends on the level of blockchain network congestion, more
                                                                                                                                                                            in our') }}
                                        <a
                                            href="{{ url('/') }}/blog/guides/why-bitcoin-is-not-confirmed">{{ __('article') }}</a>
                                    </div>
                                    <div class="order-note"><em class="ico coin segwit">­</em>We use segwit Bitcoin
                                        addresses for faster and cheaper transactions, if your wallet does not support
                                        this type of address, contact technical support to change the address</div>
                                    <div class="order-note"><em class="ico coin {{ $order->to_currency }}">­</em>We do not support sending
                                        and
                                        receiving Ethereum using smart contracts</div>
                                    <div class="order-note"><em class="ico recalc">­</em>If the amount of the
                                        transaction you sent differs from the initial amount specified in the order with
                                        a float rate, the order will be automatically recalculated.</div>
                                    <div class="order-note"><em class="ico hours24">­</em>If your transaction is
                                        received after the expiration of the order, but within 24 hours, then this
                                        transaction will be automatically displayed in the order. You will be able to
                                        continue the order yourself or make a refund.</div>
                                </section>
                                <section class="order-notyfy clrfix buttonhl">
                                    <div id="notyfy_tosubscribe">
                                        <h3>Order status notifications</h3>
                                        <p>Enter your email if you want to receive notifications about changes in the
                                            status of this order</p>
                                        <div class="order-notyfy-input-wrap"><input id="notyfy_email_input"
                                                required="" type="text" placeholder="Type your email address"
                                                class="borderhl"><button id="notyfy_submit"
                                                class="btn bghl">Confirm</button><i id="notyfy_email_error"></i></div>
                                        <span class="ico notyfy-0"><i class="ico hl notyfy-1"></i></span>
                                    </div>
                                    <div id="notyfy_subscribed" class="active">
                                        @if (empty($order->payment_hash))
                                            <h3>Order Payment Hash</h3>
                                            {{-- // update payment hash --}}
                                            <form action="{{ route('payment.hash.update', $order->id) }}"
                                                method="post">
                                                @csrf
                                                <div class="input-dyn">
                                                    <input type="text" name="payment_hash" id="payment_hash"
                                                        class="form-control">
                                                    <label for="payment_hash">Payment Hash</label>
                                                </div>
                                                <br>
                                                <div style="text-align: center;">
                                                    <button type="submit" class="btn btn-outline-primary">Submit
                                                        Payment Hash</button>
                                                </div>
                                            </form>
                                            <hr style="margin: 1rem">
                                        @endif
                                        <h3>Order status notifications</h3>
                                        <p>You have subscribed to notifications of changes to this order; a notification
                                            has been sent to your email <b
                                                id="notyfy_email">{{ $order->user->email ?? 'example@coinunify.com' }}</b>
                                        </p>
                                        <br>
                                        {{-- <a href="#" class="order-notyfy-wrong hoverhl" id="notyfy_wrong">I want to
                                            change my email for receiving notifications</a> --}}
                                        @if (!empty($order->payment_hash))
                                            <span class="ico notyfy-compl-0"><i
                                                    class="ico hl notyfy-compl-1"></i></span>
                                            <br>
                                        @endif
                                    </div>
                                </section>
                            </section>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>
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
                                                                                using') }}
                    {{ url('/') }} you agree to
                    <a href="{{ url('/') }}/privacy-policy.html">{{ __('Privacy Policy') }}</a>
                    {{ __('and') }}
                    <a href="{{ url('/') }}/terms-of-service.html">{{ __('Terms of Service') }}</a>.
                </p>
            </div>
            <div class="cookie-cell clrfix">
                <a class="btn submit bghl close" href="javascript:;">{{ __('Accept') }} &amp;
                    {{ __('Close') }}</a>
            </div>
        </div>
    </template>
    {{-- @include('footer') --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
          var countDownDate = new Date("{{ $order->order_expiration }} GMT+00:00").getTime();
            // alert(countDownDate);
            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get todays date and time
                var now = new Date().getTime();

                // Find the distance between now an the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Output the result in an element with id="demo"
                document.getElementById("clockdiv").innerHTML = minutes + " : " + seconds;

                // If the count down is over, write some text 
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("clockdiv").innerHTML = "EXPIRED";
                }
            }, 1000);
        })
    </script>
</body>

</html>

