<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden">

<head>
    <meta charset="UTF-8" />
    <title>{{ settings('website_title') }} | Instant cryptocurrency exchange</title>
    <meta name="title" content="{{ settings('website_title') }} | Instant cryptocurrency exchange" />
    <meta property="og:title" content="{{ settings('website_title') }} | Instant cryptocurrency exchange">
    <meta name="description"
        content="Instant cryptocurrency exchange with Lightning Network! Best rates and large volumes of currencies. Try now!">
    <meta property="og:description"
        content="Instant cryptocurrency exchange with Lightning Network! Best rates and large volumes of currencies. Try now!" />
    <meta property="og:site_name" content="{{ settings('website_title') }}" />
    <meta property="og:url" content="{{ url('/') }}/" />
    <meta property="twitter:site" content="@{{ settings('website_title') }}" />
    <meta property="twitter:creator" content="@{{ settings('website_title') }}" />
    <meta property="twitter:domain" content="{{ settings('website_title') }}.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta property="og:image" content="{{ url('/') }}/assets/images/public/ogimage.jpg" />
    <meta name="title" content="{{ settings('website_title') }} | Instant cryptocurrency exchange" />
    <meta property="og:title" content="{{ settings('website_title') }} | Instant cryptocurrency exchange">
    <meta property="og:description"
        content="Instant cryptocurrency exchange with Lightning Network! Best rates and large volumes of currencies. Try now!" />
    <link rel="shortcut icon" href="{{ url('/') }}/assets/images/favicon.png" />
    <link rel="alternate" hreflang="en" href="{{ url('/') }}" />
    <link rel="alternate" hreflang="es" href="{{ url('lang/es') }}" />
    <link rel="alternate" hreflang="de" href="{{ url('lang/de') }}" />
    <link rel="alternate" hreflang="fr" href="{{ url('lang/fr') }}" />
    <link rel="alternate" hreflang="pt" href="{{ url('lang/pt') }}" />
    <link rel="alternate" hreflang="ru" href="{{ url('lang/ru') }}" />
    <link rel="preload" href="{{ url('/') }}/assets/fonts/icons/icons8dc5.woff2?2610" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="{{ url('/') }}/assets/fonts/opensans/regular/opensans-regular-latin.woff2"
        as="font" type="font/woff2" crossorigin>
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
    <script type="text/javascript" {{-- src="{{ url('/') }}/assets/js/min7165.js?130138" --}} src="{{ url('/') }}/assets/js/min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/assets/js/libs/matter.min.js" defer></script>
    <script type="text/javascript" src="{{ url('/') }}/assets/js/squaregame.minf5d4.js?250318"></script>
    <script type="text/javascript" src="{{ url('/') }}/assets/js/libs/moment.min.js" defer></script>
    <script type="text/javascript" src="{{ url('/') }}/assets/js/libs/jsqr.js" defer></script>
    <script type="text/javascript" src="{{ url('/') }}/assets/js/libs/webln.min.js" defer></script>
    <style>
        select {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            background: none;
            border: 0;
            border-bottom: 2px solid;
            border-radius: 0;
            color: inherit;
            font-size: 1.625em;
            height: 1.5em;
            position: relative;
            width: 100%;
            z-index: 10;
        }

        @media only screen and (max-width: 700px) {

            .exchange-amounts .input-wabbr,
            .input-amount {
                margin-left: 0em !important;
                margin-right: 0em !important;
            }

            .exchange-rateusd-wrap,
            .btn-reverse {
                display: none;
            }

            .ui-select-list>ul {
                padding-left: 80px;
                /*text-align: center;*/
                width: calc(100% + 0px);
            }
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
</head>

<body class="index" style="overflow-x: hidden">
    <main>
        <section id="index_main" class="main-section withheader darkbg">
            <style id="highlighting_style"></style>
            <header id="header">
                <div class="wrapper">
                    <div class="left-menu-wrap" id="left_menu_wrap">
                        <div id="left_menu_btn">
                            <div><span></span><span></span><span></span></div>
                        </div>
                        <nav class="left-menu" id="left_menu">
                            <section>
                                <ul id="left_menu_content" class="menu linkhl">
                                    <li class="menu-head"><span>{{ __('Account') }}</span></li>
                                    <li><a href="{{ url('login') }}">{{ __('Sign in') }}</a></li>
                                    <li><a href="{{ url('register') }}">{{ __('Sign up') }}</a></li>
                                    <li class="menu-head"><span>{{ settings('website_title') }}</span></li>
                                    <li><a href="{{ url('page/about') }}">{{ __('About') }}</a></li>
                                    <li><a href="{{ url('page/blog') }}">{{ __('Blog') }}</a></li>
                                    <li><a href="{{ url('page/faq') }}">{{ __('FAQ') }}</a></li>
                                    <!--<li><a href="{{ url('page/api') }}">API</a></li>-->
                                    <li><a href="{{ url('page/support') }}">{{ __('Support') }}</a></li>
                                    <li><a href="{{ url('page/affiliate') }}">{{ __('Affiliate program') }}</a></li>
                                </ul>
                            </section>
                        </nav>
                    </div>
                    <nav class="clrfix">
                        <a href="{{ url('/') }}/" id="logo" class="logo">
                            <img src="{{ settings('website_logo') }}" width="80rem" alt="logo"
                                class="logo-text-fixed" id="logo_text_from" data-value="eth"
                                style="-webkit-filter: invert(100%); filter: invert(100%);">
                            <div class="ico" style="display:none">
                                <span class="logo-arrow-from" id="logo_arrow_from" data-value="eth"></span>
                                <span class="logo-arrow-to" id="logo_arrow_to" data-value="btc"></span>
                            </div>
                            <span class="logo-text-float" style="display:none" id="logo_text_to"
                                data-value="btc"></span>
                        </a>
                        <div class="nav userbar hoverhl">
                            @if (auth()->check())
                                <button class="btn-text"
                                    onclick="window.location.href='{{ url('user/orders') }}'">{{ __('My Account') }}</button>
                                <button class="btn-text"
                                    onclick="window.location.href='{{ route('logout') }}'">{{ __('Logout') }}</button>
                            @else
                                <button class="btn-text" id="header_signin">{{ __('Sign in') }}</button>
                                <button class="btn-text" id="header_signup">{{ __('Sign up') }}</button>
                            @endif
                            {{-- <button class="btn-text" id="header_signin">Sign in</button>
              <button class="btn-text" id="header_signup">{{ __('Sign up') }}</button> --}}
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
                                    <a href="{{ url('lang/ru') }}"><span>Русский</span>
                                        <i class="loc-img loc-ru"></i></a>
                                </li>
                            </ul>
                            <div class="shadow-body" tabindex="0"></div>
                        </div>
                        <ul class="nav menu hoverhl">
                            <li><a href="{{ url('page/about') }}">{{ __('About') }}</a></li>
                            <li><a href="{{ url('page/blog') }}">{{ __('Blog') }}</a></li>
                            <li><a href="{{ url('page/faq') }}">{{ __('FAQ') }}</a></li>
                            <!--<li><a href="{{ url('page/api') }}">API</a></li>-->
                            <li><a href="{{ url('page/support') }}">{{ __('Support') }}</a></li>
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
                                {{ __('Reset request successfully sent. You will receive a
                                                confirmation e-mail if this account has been registered.') }}
                            </div>

                            <div class="auth-error" id="auth_reset_error">
                                {{ __('User with this email is not registered on the site.') }}
                            </div>
                            <div class="auth-wrap-btn">
                                <button class="btn submit bghl" id="oauth_reset_btn">
                                    {{ __('Reset password') }}
                                </button>
                            </div>
                            <div class="auth-wrap-btn">
                                <button class="btn-text auth-nav-btn" type="button" data-layout="signin">
                                    {{ __('Back to Sign in') }}
                                </button>
                            </div>
                        </form>
                        <form class="auth-layout" method="POST" id="layout_signin" action="{{ route('login') }}">
                            @csrf
                            <h4>Welcome to {{ settings('website_title') }}</h4>
                            <div class="input-dyn">
                                <input name="email" required type="text" value="" />
                                <label for="email">{{ __('Email') }}</label>
                                <sub class="error">{{ __('Email entered is not a valid email') }}</sub>
                            </div>
                            <div class="input-dyn">
                                <input name="password" required type="password" value="" />
                                <label for="password">{{ __('Password') }}</label>
                                <sub class="error">{{ __('Password is empty') }}</sub>
                            </div>
                            <div class="auth-forgot-wrap">
                                <button class="btn-text hl auth-nav-btn" type="button" id="nav_forgot"
                                    data-layout="forgot">
                                    {{ __('Forgot password') }}
                                </button>
                            </div>
                            <div class="auth-error" id="auth_error">
                                {{ __('Invalid email or password') }}
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
                                <input name="pswd" required type="password" value="" />
                                <label for="pswd">{{ __('Password') }}</label>
                                <sub
                                    class="error">{{ __('Password must contain one uppercase, one lowercase, one
                                                      number, one special character, and be at least 6 characters
                                                      long.') }}</sub>
                            </div>
                            <div class="input-dyn">
                                <input name="password_confirmation" required type="password" value="" />
                                <label for="repswd">{{ __('Confirm Password') }}</label>
                                <sub class="error">{{ __('Passwords do not match.') }}</sub>
                            </div>
                            <div class="auth-error" id="auth_signup_error">
                                {{ __('An account with this email already exists.') }}
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
            <div class="bg-canvas-fly">
                <div class="bg-canvas-fly-game" id="canvas_fly_game"></div>
                <div class="bg-canvas-fly-stats" id="canvas_fly_game_stats">
                    <ul>
                        <li><label>{{ __('Time') }}:</label><span id="game_time">0</span></li>
                        <li><label>{{ __('Kick') }}:</label><span id="game_count">0</span></li>
                        <li><label>{{ __('Max time') }}:</label><span id="game_maxtime">0</span></li>
                        <li><label>{{ __('Max Kick') }}:</label><span id="game_maxcount">0</span></li>
                    </ul>
                </div>
                <div class="bg-canvas-fly-stop" id="canvas_fly_game_stop">
                    <button class="btn-text" id="canvas_fly_game_stop_btn"></button>
                </div>
            </div>
            <div class="wrapper">
                <div class="exchange-form-outer">
                    <h1>{{ __('Lightning cryptocurrency exchange') }}</h1>
                    <p></p>
                    <form class="exchange-form">
                        <div class="exchange-amounts clrfix" id="exchange_amount">
                            <div class="col-middle">
                                <header>
                                    <div class="exchange-rateusd-wrap">
                                        <span id="rate_usd" class="pseudo-hint"
                                            data-hint="Approximate amount">&nbsp;</span>
                                    </div>
                                </header><br><br><br>
                                <button class="btn-reverse" id="btn_reverse">
                                    <span id="btn_reverse_from" class="btn-reverse-exch ico"></span>
                                    <span id="btn_reverse_to" class="btn-reverse-receive ico"></span>
                                </button>
                            </div>
                            <div class="col">
                                <div>
                                    <header>{{ __('Send') }}</header><br><br>
                                    <div class="form-group">
                                        <p for="send_network"><small>{{ __('Send Network') }}</small></p>
                                        <select name="sendNetwork" id="send_network" onchange="convertCurrency()">
                                            <option selected disabled>{{ __('Select coin Network') }}</option>
                                            <option value="BEP2">BEP2</option>
                                            <option value="BEP20">BEP20</option>
                                            <option selected value="BTC">BTC</option>
                                            <option value="ERC20">ERC20</option>
                                            <option value="SEGWIT">SEGWIT</option>
                                        </select>
                                    </div>
                                    <div class="input-wabbr toleft">
                                        <select class="hidden" id="select_currency_from"
                                            onchange="network_list_two(this, 'send_network')">
                                            @foreach ($currencies['data'] as $item)
                                                @php($props = json_encode($item['networkList']))
                                                <option data-network="{{ $props }}"
                                                    data-symbol="{{ $item['currency'] }}"
                                                    @if ($item['currency'] == 'BTC') selected @endif
                                                    value="{{ strtolower($item['currency']) }}">
                                                    {{ $item['currency'] }}</option>
                                            @endforeach
                                        </select>
                                        <input class="input-amount" type="text" value="0.00042687"
                                            onkeydown="convertCurrency()" id="select_amount_from" data-dir="from"
                                            maxlength="18">
                                        <div id="select_maxmin_from" class="hint maxmin"></div>
                                        <span id="select_hinterror_from" class="hint error"></span>
                                        <label id="select_label_from"></label>
                                        <div class="input-rate rev" id="select_info_from"></div>
                                        <div class="input-rate" id="select_rate_from"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <header>{{ __('Receive') }}</header><br><br>
                                <div class="form-group">
                                    <p for="send_network"><small>{{ __('Receive Network') }}</small></p>
                                    <select name="receive_network" id="receive_network" class="input-amount">
                                        <option false="" value="BNB">BEP2</option>
                                        <option false="" value="BSC">BEP20</option>
                                        <option selected value="ETH">ERC20</option>
                                        <option false="" value="SOL">SOLANA</option>
                                        <option false="" value="TRX">TRC20</option>
                                        <option false="" value="AVAXC">AVAXC</option>
                                        <option false="" value="MATIC">MATIC</option>
                                        <option false="" value="XTZ">TEZOS</option>
                                        <option false="" value="EOS">EOS</option>
                                    </select>
                                </div>

                                <div class="input-wabbr toright">
                                    <select id="select_currency_to"
                                        onchange="network_list_two(this, 'receive_network')">
                                        @foreach ($currencies['data'] as $item)
                                            @php($props = json_encode($item['networkList']))
                                            <option data-network="{{ $props }}"
                                                data-symbol="{{ $item['currency'] }}"
                                                @if ($item['currency'] == 'USDT') selected @endif
                                                value="{{ strtolower($item['currency']) }}">{{ $item['currency'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <input class="input-amount" type="text" value=""
                                        onkeydown="convertCurrency()" id="select_amount_to" data-dir="to"
                                        maxlength="18">
                                    <div id="select_maxmin_to" class="hint maxmin"></div>
                                    <span id="select_hinterror_to" class="hint error"></span>
                                    <label id="select_label_to"></label>
                                    <div class="input-rate rev" id="select_info_to"></div>
                                    <div class="input-rate" id="select_rate_to"></div>
                                </div>
                            </div>
                        </div>
                        <div class="exchange-wallet active center clrfix">
                            <div class="dinput">
                                <input class="nonextra" type="text" value="" required id="receive_wallet"
                                    autocomplete="off" />
                                <span id="receive_wallet_error" class="hint">{{ __('Invalid address') }}</span>
                                <hr id="receive_wallet_line" />
                                <label class="nonextra" id="receive_wallet_label"></label>
                                <div class="funcbuttons">
                                    <button class="ico scanqr hoverhl" id="wallet_scanqr"></button>
                                </div>
                            </div>
                        </div>
                        <div class="exchange-wallet exchange-wallet-extra center clrfix" id="wallet_extra_outer">
                            <div class="dinput">
                                <input class="extra" type="text" value="" required id="receive_extraid"
                                    autocomplete="off">
                                <span id="receive_extraid_error" class="hint">{{ __('Invalid address') }}</span>
                                <hr id="receive_wallet_line_extra">
                                <label class="extra" id="receive_extraid_label" data-label="MEMO">MEMO
                                    (optional)</label>
                            </div>
                        </div>
                        <div class="exchange-option center clrfix hidden" hidden>
                            <div class="exchange-option-inner">
                                <label class="radioselect">
                                    <input type="radio" name="select_type_from" value="fixed" />
                                    <span>Fixed rate (1.0%)</span> </label><label class="radioselect">
                                    <input type="radio" name="select_type_from" value="float" id="float_type"
                                        checked>
                                    <span>Float rate (0.5%)</span>
                                </label>
                            </div>
                            <br><span id="type_difference" class="exchange-option-diff">
                                <font>What is the difference?</font>
                            </span>
                        </div>
                        <div class="exchange-button center clrfix">
                            <button id="exchange_submit" class="exchange-submit disabled">
                                <span>{{ __('Exchange now') }}</span>
                            </button>
                        </div>
                    </form>
                </div>
                <template id="selector_tmpl">
                    <div class="coin-ico svgcoin {value}"></div>
                    <div class="coin-outer">
                        <span class="coin-name">{label}</span>
                    </div>
                </template>
                <template id="label_img_tmpl"><span class="coin-img svgcoin {1}"></span></template>
                <script type="text/javascript">
                    document.addEventListener("DOMContentLoaded", function() {
                        moment.locale("en");
                        let F = UI.func;
                        let _typeExchange = UI.radio("select_type_from");
                        let Ex = {
                            init: false,
                            lock: false,
                            type: _typeExchange.val(),
                            send_network: F.id("send_network").value, //$("#send_network").val(),
                            receive_network: F.id("receive_network").value, //$("#receive_network").val(),
                            from: "0.1042687",
                            to: "",
                            // usd: 0,
                            usd: {
                                from: 0,
                                to: 0
                            },
                            onlyfixed: false,
                            dirfixed: false,
                            changeable: "from",
                            timeKeyup: -1,
                            timeKeyupWallet: -1,
                            errorInterval: -1,
                            isRequest: false,
                            amount: {
                                from: F.id("select_amount_from").value,
                                to: F.id("select_amount_to").value,
                            },
                            tag_required: false,
                            error: {
                                from: false,
                                to: false,
                                address: true,
                                tag: false,
                            },
                            lastReq: undefined,
                            select: {
                                from: function(sel) {
                                    let value = sel.value.toLowerCase();
                                    let title =
                                        "<span>" +
                                        sel.symbol +
                                        (sel.sub ? "<sup>" + sel.sub + "<\sup>" : "") +
                                        "</span>";
                                    let html =
                                        title + F.fmt(F.id("label_img_tmpl").innerHTML, value);
                                    F.id("select_amount_from").parentNode.setAttribute(
                                        "data-value",
                                        value
                                    );
                                    F.id("select_label_from").innerHTML = html;
                                    F.id("btn_reverse_from").setAttribute("data-value", value);
                                    F.id("logo_text_from").setAttribute("data-value", value);
                                    F.id("logo_arrow_from").setAttribute("data-value", value);
                                    Ex.from = value;
                                    APP.highlightingColor(Ex.from, Ex.to);
                                },
                                to: function(sel) {
                                    let value = sel.value;
                                    let title =
                                        "<span>" +
                                        sel.symbol +
                                        (sel.sub ? "<sup>" + sel.sub + "<\sup>" : "") +
                                        "</span>";
                                    let html =
                                        F.fmt(F.id("label_img_tmpl").innerHTML, value) + title;
                                    F.id("select_amount_to").parentNode.setAttribute(
                                        "data-value",
                                        value
                                    );
                                    F.id("select_label_to").innerHTML = html;
                                    F.id("btn_reverse_to").setAttribute("data-value", value);
                                    F.id("logo_text_to").setAttribute("data-value", value);
                                    F.id("logo_arrow_to").setAttribute("data-value", value);
                                    Ex.to = value;
                                    APP.highlightingColor(Ex.from, Ex.to);
                                },
                            },
                            gradient: function(from, to) {
                                let style =
                                    "background: -moz-linear-gradient(left, " +
                                    from +
                                    " 0%, " +
                                    to +
                                    " 100%);" +
                                    "background: -webkit-linear-gradient(left, " +
                                    from +
                                    " 0%," +
                                    to +
                                    " 100%);" +
                                    "background: linear-gradient(to right, " +
                                    from +
                                    " 0%," +
                                    to +
                                    " 100%);";

                                F.id("exchange_submit").setAttribute("style", style);
                                F.id("receive_wallet_line").setAttribute("style", style);
                                if (F.id("receive_wallet_line_extra"))
                                    F.id("receive_wallet_line_extra").setAttribute(
                                        "style",
                                        style
                                    );
                            },
                            checkButton: function() {
                                let cond = true;
                                for (let key in Ex.error) {
                                    if (Ex.error[key]) cond = false;
                                }
                                if (cond) {
                                    F.remClass("exchange_submit", "disabled");
                                } else {
                                    F.addClass("exchange_submit", "disabled");
                                }
                            },
                            getRate: function(from, to, qty, dir, inusd, send_network, receive_network) {
                                if (Ex.isRequest) {
                                    Ex.lastReq = {
                                        from: from,
                                        to: to,
                                        qty: qty,
                                        dir: dir,
                                        inusd: inusd,
                                        send_network: send_network,
                                        receive_network: receive_network,
                                    };
                                    return;
                                }
                                clearInterval(Ex.errorInterval);
                                let data = {
                                    type: Ex.type,
                                    fromCurrency: from.toUpperCase(),
                                    toCurrency: to.toUpperCase(),
                                    receive_network: Ex.receive_network,
                                    send_network: Ex.send_network,
                                };
                                F.remClass("select_amount_to", "error");
                                F.remClass("select_amount_from", "error");

                                if (typeof qty == "string") {
                                    qty = qty.match(/[\d\.]+/g)[0];
                                }
                                if (dir == "to") {
                                    data["toQty"] = qty;
                                } else {
                                    data["fromQty"] = qty;
                                }
                                if (inusd === true) {
                                    data["usd"] = Ex.usd.from;
                                } else if (+inusd) {
                                    data["usd"] = +inusd;
                                }
                                Ex.isRequest = true;
                                APP.api(
                                    "exchangePrice",
                                    data,
                                    function(msg) {
                                        Ex.isRequest = false;
                                        if (Ex.lastReq) {
                                            Ex.getRate(
                                                Ex.lastReq.from,
                                                Ex.lastReq.to,
                                                Ex.lastReq.qty,
                                                Ex.lastReq.dir,
                                                Ex.lastReq.inusd,
                                                Ex.lastReq.send_network,
                                                Ex.lastReq.receive_network,
                                            );
                                            Ex.lastReq = undefined;
                                            return;
                                        }
                                        let d = msg.data;
                                        let eq = Ex.type == "fixed" ? "=" : "≈";
                                        let eqem = Ex.type == "fixed" ? "" : "≈";
                                        if (!d) {
                                            if (dir == "to") {
                                                F.addClass("select_amount_to", "error");
                                            } else {
                                                F.addClass("select_amount_from", "error");
                                            }
                                            return;
                                        }
                                        d.to.max = F.fixNumber(d.to.max, 8);

                                        if (d.error == 1 && true) {
                                            F.addClass("select_amount_from", "error");
                                            if (+d.from.amount <= +d.from.min) {
                                                F.id("select_hinterror_from").innerHTML =
                                                    'Minimum amount <button type="button" class="maxmin-value" data-value="' +
                                                    d.from.min +
                                                    '">' +
                                                    d.from.min +
                                                    " " +
                                                    d.from.currency +
                                                    "</button>";
                                            } else {
                                                F.id("select_hinterror_from").innerHTML =
                                                    'You exceeded the limit of <button type="button" class="maxmin-value" data-value="' +
                                                    d.from.max +
                                                    '">' +
                                                    d.from.max +
                                                    " " +
                                                    d.from.currency +
                                                    "</button>";
                                            }
                                            Ex.error.from = true;
                                        } else if (d.error == 2 && true) {
                                            F.addClass("select_amount_to", "error");
                                            if (+d.to.amount <= +d.to.min) {
                                                F.id("select_hinterror_to").innerHTML =
                                                    'Minimum amount <button type="button" class="maxmin-value" data-value="' +
                                                    d.to.min +
                                                    '">' +
                                                    d.to.min +
                                                    " " +
                                                    d.to.currency +
                                                    "</button>";
                                            } else {
                                                F.id("select_hinterror_to").innerHTML =
                                                    'You exceeded the limit of <button type="button" class="maxmin-value" data-value="' +
                                                    d.to.max +
                                                    '">' +
                                                    d.to.max +
                                                    " " +
                                                    d.to.currency +
                                                    "</button>";
                                            }
                                            Ex.error.to = true;
                                        } else {
                                            Ex.error.from = false;
                                            Ex.error.to = false;
                                        }
                                        Ex.checkButton();
                                        if (inusd) {
                                            F.id("select_amount_from").value = d.from.amount;
                                            F.id("select_amount_to").value = eqem + d.to.amount;
                                        } else if (dir == "to") {
                                            F.id("select_amount_from").value = d.from.amount;
                                            // if (document.activeElement != F.id('select_amount_to')) {
                                            F.id("select_amount_to").value =
                                                eqem + F.fixNumber(d.to.amount);
                                            // }
                                        } else {
                                            if (
                                                document.activeElement != F.id("select_amount_from")
                                            ) {
                                                F.id("select_amount_from").value = F.fixNumber(
                                                    d.from.amount
                                                );
                                            }
                                            F.id("select_amount_to").value = eqem + d.to.amount;
                                        }
                                        Ex.amount.from = F.fixNumber(d.from.amount);
                                        Ex.amount.to = F.fixNumber(d.to.amount);
                                        Ex.usd.from = d.from.usd;
                                        Ex.usd.to = d.to.usd;
                                        F.id("select_rate_from").innerHTML =
                                            "1 " +
                                            d.from.currency +
                                            " " +
                                            eq +
                                            " " +
                                            d.from.rate +
                                            " " +
                                            d.to.currency;
                                        F.id("select_rate_to").innerHTML =
                                            "1 " +
                                            d.to.currency +
                                            " " +
                                            eq +
                                            " " +
                                            d.to.rate +
                                            " " +
                                            d.from.currency;
                                        F.id("rate_usd").innerHTML = "$ " + d.from.usd;
                                        F.id("select_maxmin_from").innerHTML =
                                            '<span>min:</span>&nbsp;<button type="button" class="maxmin-value" data-value="' +
                                            d.from.min +
                                            '">' +
                                            d.from.min +
                                            " " +
                                            d.from.coin +
                                            '</button> <span>max:</span>&nbsp;<button type="button" class="maxmin-value" data-value="' +
                                            d.from.max +
                                            '">' +
                                            d.from.max +
                                            " " +
                                            d.from.coin +
                                            "</button>";
                                        F.id("select_maxmin_to").innerHTML =
                                            '<span>min:</span>&nbsp;<button type="button" class="maxmin-value" data-value="' +
                                            d.to.min +
                                            '">' +
                                            d.to.min +
                                            " " +
                                            d.to.coin +
                                            '</button> <span>max:</span>&nbsp;<button type="button" class="maxmin-value" data-value="' +
                                            d.to.max +
                                            '">' +
                                            d.to.max +
                                            " " +
                                            d.to.coin +
                                            "</button>";

                                        F.id("select_info_from").innerHTML = "";
                                        F.id("select_info_to").innerHTML = "";

                                        if (
                                            d.from.currency == "BTC" &&
                                            d.to.currency != "BTCLN"
                                        ) {
                                            F.id("select_info_from").innerHTML =
                                                '<button class="btn-text tolightning" type="button" data-dir="from"><span style="display:none" class="ico lightning" data-value="btcln"></span> <span style="display:none">Try lightning!</span></button>';
                                        } else if (d.from.currency == "BTCLN") {
                                            F.id("select_info_from").innerHTML =
                                                "<span>" +
                                                ~~(Ex.amount.from * 100000000) +
                                                " satoshi</span>";
                                        }

                                        if (
                                            d.to.currency == "BTC" &&
                                            d.from.currency != "BTCLN"
                                        ) {
                                            F.id("select_info_to").innerHTML =
                                                '<button class="btn-text tolightning" type="button" data-dir="to"><span style="display:none">Try lightning!</span> <span style="display:none" class="ico lightning" data-value="btcln"></span></button>';
                                        } else if (d.to.currency == "BTCLN") {
                                            F.id("select_info_to").innerHTML =
                                                "<span>" +
                                                ~~(Ex.amount.to * 100000000) +
                                                " satoshi</span>";
                                        }
                                        Ex.toggleLocked();
                                    },
                                    function(msg) {
                                        Ex.isRequest = false;
                                        let time = msg.code == 429 ? 60000 : 10000;
                                        Ex.errorInterval = setInterval(function() {
                                            Ex.getRateFull(from, to, qty, dir);
                                        }, time);
                                    }
                                );
                            },
                            getRateFull: function(from, to, qty, dir, inusd) {
                                function parseColor(color) {
                                    function toHex(int) {
                                        let hex = int.toString(16);
                                        return hex.length == 1 ? "0" + hex : hex;
                                    }
                                    let arr = [];
                                    color.replace(/[\d+\.]+/g, function(v) {
                                        arr.push(parseFloat(v));
                                    });
                                    return "#" + arr.slice(0, 3).map(toHex).join("");
                                }
                                let self = this;
                                self.getRate(from, to, qty, dir, inusd);
                                if (to == "btcln") {
                                    F.id("receive_wallet_label").innerHTML =
                                        "Your " + selectorTo.selectedAttr("label") + " invoice";
                                } else {
                                    F.id("receive_wallet_label").innerHTML =
                                        "Your " + selectorTo.selectedAttr("label") + " address";
                                }
                                self.gradient(APP.getCoinColor(from), APP.getCoinColor(to));
                            },
                            getRatePaste: function(full) {
                                if (!full) {
                                    if (Ex.changeable == "to") {
                                        Ex.getRate(
                                            selectorFrom.val(),
                                            selectorTo.val(),
                                            F.id("select_amount_to").value,
                                            "to"
                                        );
                                    } else {
                                        Ex.getRate(
                                            selectorFrom.val(),
                                            selectorTo.val(),
                                            F.id("select_amount_from").value,
                                            "from"
                                        );
                                    }
                                } else {
                                    if (Ex.init && Ex.changeable == "to") {
                                        Ex.getRateFull(
                                            selectorFrom.val(),
                                            selectorTo.val(),
                                            F.id("select_amount_to").value,
                                            "to",
                                            !Ex.dirfixed
                                        );
                                    } else {
                                        Ex.getRateFull(
                                            selectorFrom.val(),
                                            selectorTo.val(),
                                            F.id("select_amount_from").value,
                                            "from",
                                            !Ex.dirfixed
                                        );
                                    }
                                }
                            },
                            fixQty: function(amount) {
                                return F.minCountToFixed(amount, 5, 8);
                            },
                            checkType: function(amount) {
                                let inputFrom = F.id("select_amount_from");
                                let inputTo = F.id("select_amount_to");
                                if (amount) {
                                    F.id("float_type").disabled = true;
                                    inputTo.value = amount;
                                    Ex.type = "fixed";
                                    _typeExchange.val("fixed");
                                    Ex.changeable = "to";
                                    Ex.toggleLocked();
                                    inputTo.disabled = true;
                                    inputFrom.disabled = true;
                                    Ex.lock = true;
                                    Ex.getRatePaste();
                                } else {
                                    Ex.unlockAmounts();
                                }
                            },
                            unlockAmounts: function() {
                                if (!Ex.onlyfixed) {
                                    Ex.lock = false;
                                    F.id("float_type").disabled = false;
                                    F.id("select_amount_from").disabled = false;
                                    if (Ex.type != "float") {
                                        F.id("select_amount_to").disabled = false;
                                    }
                                }
                            },
                            extraIDtoggle: function() {
                                let valTo = selectorTo.val().toLowerCase();
                                let arr = [
                                    "bnb",
                                    "xrp",
                                    "xlm",
                                    "twt",
                                    "btcbnb",
                                    "adabnb",
                                    "ethbnb",
                                    "usdtbnb",
                                    "busd",
                                    "atom",
                                ];
                                let cond = arr.indexOf(valTo) >= 0 ? true : false;
                                F.togClass("wallet_extra_outer", "active", cond);
                                F.togClass("receive_wallet", "with-extra", cond);
                            },
                            toggleLocked: function() {
                                if (Ex.type == "float") {
                                    Ex.changeable = "from";
                                    F.id("select_amount_to").setAttribute(
                                        "readonly",
                                        "readonly"
                                    );
                                } else if (!Ex.dirfixed) {
                                    F.id("select_amount_to").removeAttribute("readonly");
                                }
                                if (Ex.changeable == "to") {
                                    F.remClass(F.id("select_amount_from").parentNode, "locked");
                                    F.addClass(F.id("select_amount_to").parentNode, "locked");
                                } else {
                                    F.addClass(F.id("select_amount_from").parentNode, "locked");
                                    F.remClass(F.id("select_amount_to").parentNode, "locked");
                                }
                            },
                            changePositionUsdRate: function() {
                                let valFrom = selectorFrom.val().toLowerCase();
                                let valTo = selectorTo.val().toLowerCase();
                                if (
                                    (valFrom == "btc" && valTo != "btcln") ||
                                    valFrom == "btcln"
                                ) {
                                    F.id("exchange_amount").setAttribute(
                                        "data-pos-usd",
                                        "bottom"
                                    );
                                } else {
                                    F.id("exchange_amount").setAttribute("data-pos-usd", "top");
                                }
                            },
                            validateAddress: function() {
                                let inp = F.id("receive_wallet");
                                let extra = F.id("receive_extraid");
                                if (!inp.value) return;
                                let addr = inp.value;
                                // if (extra.value) {
                                // 	addr += ':'+extra.value;
                                // }

                                APP.api("exchangeAddressInfo", {
                                        currency: selectorTo.val(),
                                        address: addr,
                                        tag: extra.value,
                                        receive_network: F.id("receive_network").value
                                    })
                                    .then(function(msg) {
                                        F.id("receive_wallet_error").innerHTML = "";
                                        F.remClass(inp, "error");
                                        F.remClass(extra, "error");
                                        Ex.checkType(msg.data.amount);
                                        Ex.error.address = false;
                                        Ex.error.tag = false;
                                        Ex.checkButton();
                                    })
                                    .catch(function(msg) {
                                        F.id("receive_wallet_error").innerHTML = "";
                                        F.remClass(inp, "error");
                                        F.remClass(extra, "error");
                                        Ex.checkType(msg.data.amount);
                                        Ex.error.address = false;
                                        Ex.error.tag = false;
                                        Ex.checkButton();
                                    });
                            },
                            makeOrder: function(data) {
                                let promise = new Promise(function(resolve, reject) {
                                    APP.api("exchangeMake", data)
                                        .then(function(msg) {
                                            resolve(msg);
                                        })
                                        .catch(function(msg) {
                                            reject();
                                            if (msg.code == 301) {
                                                F.id("receive_wallet_error").innerHTML =
                                                    "Enter your " +
                                                    selectorTo.selectedAttr("label") +
                                                    " address";
                                                F.id("receive_wallet").focus();
                                                F.addClass("receive_wallet", "error");
                                            } else if (msg.code == 300) {
                                                UI.alert("Error! Try reloading the page");
                                            } else if (msg.code == 406) {
                                                UI.alert(
                                                    "Your XRP address has not been activated. To activate a XRP account, you need to send at least 20 XRP"
                                                );
                                            } else if (msg.code == 502) {
                                                UI.popup({
                                                    html: '<div class="popup-content fix-width2">' +
                                                        '<h3 style="margin-bottom: 1.3em;">Important Notice</h3>' +
                                                        '<p style="text-align: center;margin-bottom: 0.2em;">U.S. persons cannot make an exchange on </p>' +
                                                        '<div class="popup-ctrl"><span class="btn submit popup-close-btn bghl">I understand</span></div></div>',
                                                }).show();
                                            }
                                        });
                                });
                                return promise;
                            },
                        };
                        let FixedFunc = {
                            keydown: function(input, e) {
                                let WH = e.which || e.keyCode;
                                if (e.ctrlKey || e.altKey || e.metaKey) return;
                                if ((WH == 48 || WH == 96) && input.value == "0") {
                                    input.value = "0.";
                                }
                                if (
                                    (WH >= 58 && WH <= 90) ||
                                    (WH >= 106 && WH <= 111) ||
                                    WH >= 146
                                ) {
                                    e.preventDefault();
                                    if (
                                        (WH == 188 || WH == 190 || WH == 191 || WH == 110) &&
                                        input.value.search(/\./i) == -1
                                    ) {
                                        let pos = F.carPos(input);
                                        input.value =
                                            input.value.substr(0, pos) +
                                            "." +
                                            input.value.substr(pos++);
                                        F.setCarPos(input, pos, pos);
                                    }
                                } else if (WH == 13) {
                                    input.blur();
                                }
                            },
                            fixAmount: function(value) {
                                let ar = value.split(".");
                                if (ar[0] == "") {
                                    value = "0" + value;
                                    ar[0] = "0";
                                }
                                if (ar.length == 1 || ar[1].length <= 8) {
                                    return value;
                                }
                                return ar[0] + "." + ar[1].substr(0, 8);
                            },
                        };

                        let selectorFrom = UI.selector("select_currency_from", {
                            tmpl: F.id("selector_tmpl").innerHTML,
                            search: {
                                placeholder: "Type a currency",
                                label: "Found currencies",
                            },
                            searchByDataset: ["symbol"],
                            hidden: true,
                            onInit: function(selected) {
                                Ex.select.from(selected);
                            },
                        });
                        let selectorTo = UI.selector("select_currency_to", {
                            tmpl: F.id("selector_tmpl").innerHTML,
                            search: {
                                placeholder: "Type a currency",
                                label: "Found currencies",
                            },
                            searchByDataset: ["symbol"],
                            hidden: true,
                            onInit: function(selected) {
                                Ex.select.to(selected);
                            },
                        });

                        selectorFrom.onChange(function(selected, from, param) {
                            let c_from = selected.value,
                                c_to = selectorTo.val();
                            F.remClass("receive_wallet", "error");
                            Ex.changePositionUsdRate();
                            Ex.select.from(selected);
                            if (c_to == c_from && !param) {
                                selectorTo.select(from.value, true);
                                Ex.unlockAmounts();
                                F.id("receive_wallet").value = "";
                            }
                            if (Ex.lock) {
                                Ex.unlockAmounts();
                                F.id("receive_wallet").value = "";
                            }
                            if (!param) {
                                Ex.getRatePaste(true);
                            }
                        });
                        selectorTo.onChange(function(selected, from, param) {
                            F.remClass("receive_wallet", "error");
                            if (Ex.to != selected.value) {
                                Ex.unlockAmounts();
                                F.id("receive_wallet").value = "";
                                F.id("receive_extraid").value = "";
                            }
                            Ex.extraIDtoggle();
                            Ex.changePositionUsdRate();
                            Ex.select.to(selected);
                            if (selectorFrom.val() == selected.value && !param) {
                                selectorFrom.select(from.value, true);
                                Ex.unlockAmounts();
                                F.id("receive_wallet").value = "";
                                F.id("receive_extraid").value = "";
                            }
                            if (selected.value.toLowerCase() == "xrp") {
                                F.id("receive_extraid_label").innerHTML =
                                    "Destination Tag (optional)";
                                F.id("receive_extraid_label").setAttribute(
                                    "data-label",
                                    "Destination Tag"
                                );
                            } else if (selected.value.toLowerCase() == "xmr") {
                                F.id("receive_extraid_label").innerHTML =
                                    "Payment ID (optional)";
                                F.id("receive_extraid_label").setAttribute(
                                    "data-label",
                                    "Payment ID"
                                );
                            } else {
                                F.id("receive_extraid_label").innerHTML = "MEMO (optional)";
                                F.id("receive_extraid_label").setAttribute(
                                    "data-label",
                                    "MEMO"
                                );
                            }
                            if (!param) {
                                Ex.getRatePaste(true);
                            }
                        });

                        let _exchangeSubmit = UI.button("exchange_submit", {
                            changeAtOnce: false,
                            changeTexts: false,
                        }).click(function(btn, e) {
                            e.preventDefault();
                            for (let key in Ex.error) {
                                if (!Ex.error[key]) {
                                    continue;
                                }
                                let breakSubmit = true;
                                switch (key) {
                                    case "from":
                                        F.id("select_amount_from").focus();
                                        break;
                                    case "to":
                                        F.id("select_amount_to").focus();
                                        break;
                                    case "tag":
                                        if (Ex.timeKeyupWallet == -1) {
                                            if (Ex.tag_required) {
                                                F.id("receive_extraid_error").innerHTML =
                                                    "" +
                                                    F.id("receive_extraid_label").getAttribute(
                                                        "data-label"
                                                    ) +
                                                    " is required";
                                            } else {
                                                F.id("receive_extraid_error").innerHTML =
                                                    "Invalid " +
                                                    F.id("receive_extraid_label").getAttribute(
                                                        "data-label"
                                                    ) +
                                                    "";
                                            }
                                            F.id("receive_extraid").focus();
                                            F.addClass("receive_extraid", "error");
                                        } else {
                                            breakSubmit = false;
                                        }
                                        break;
                                    case "address":
                                    default:
                                        if (Ex.timeKeyupWallet == -1) {
                                            F.id("receive_wallet_error").innerHTML =
                                                "Enter your " +
                                                selectorTo.selectedAttr("label") +
                                                " address";
                                            F.id("receive_wallet").focus();
                                            F.addClass("receive_wallet", "error");
                                        } else {
                                            breakSubmit = false;
                                        }
                                        break;
                                }
                                if (breakSubmit) return;
                            }
                            let data = {
                                fromCurrency: Ex.from.toUpperCase(),
                                toCurrency: Ex.to.toUpperCase(),
                                type: Ex.type,
                                receive_network: Ex.receive_network,
                                send_network: Ex.send_network,
                                toAddress: F.id("receive_wallet").value,
                                payload: payloadHash.getHash(),
                            };
                            if (Ex.changeable == "to") {
                                data["toQty"] = Ex.amount.to;
                            } else {
                                data["fromQty"] = Ex.amount.from;
                            }
                            if (
                                data.toCurrency == "BNB" ||
                                data.toCurrency == "XRP" ||
                                data.toCurrency == "XLM" ||
                                data.toCurrency == "TWT" ||
                                data.toCurrency == "BTCBNB" ||
                                data.toCurrency == "ETHBNB" ||
                                data.toCurrency == "ADABNB" ||
                                data.toCurrency == "USDTBNB" ||
                                data.toCurrency == "BUSD" ||
                                data.toCurrency == "ATOM"
                            ) {
                                data.extra = F.id("receive_extraid").value;
                            }

                            if (typeof gtag == "function") {
                                gtag("event", "exchange", {
                                    event_category: "button"
                                });
                            }

                            let fee = 1 - Ex.usd.to / Ex.usd.from;
                            if (
                                1 - Ex.usd.to / Ex.usd.from >= 0.07 &&
                                Ex.usd.from - Ex.usd.to > 2
                            ) {
                                UI.popup({
                                    html: '<div class="popup-content popup-confirm popup-confirm-whead"> \
                                							<header>Attention! High network fees!</header>\
                                							<div class="popup-confirm-body">\
                                								<p>Please note that the total network fees for sending a transaction and consolidating the funds received represent a significant part of the total exchange amount for this direction.<br><b>Your exchange for this amount can be very unprofitable.</b></p>\
                                								<p>You can read more about this problem in <a href="blog/guides/how-rate-formed">our article on the formation of rates</a>.</p>\
                                								<div class="popup-ctrl"><button type="button" class="btn cancel popup-close-btn">Cancel exchange</button>\
                                								<button type="button" class="btn submit">I understand and confirm this</button></div>\
                                							</div>\
                                						</div>',
                                    onSubmit: function() {
                                        btn.loading();
                                        Ex.makeOrder(data)
                                            .then(function(msg) {
                                                // btn.success();
                                                console.log(msg.data.id)
                                                location.href = "/order/" + msg.data.id;
                                            })
                                            .catch(function() {
                                                btn.error();
                                            });
                                    },
                                }).show();
                            } else {
                                btn.loading();
                                Ex.makeOrder(data)
                                    .then(function(msg) {
                                        btn.success();
                                        console.log(msg.data.id)
                                        location.href = "/order/" + msg.data.id;
                                    })
                                    .catch(function() {
                                        btn.error();
                                    });
                            }
                        });

                        _typeExchange.change(function() {
                            let change = false;
                            if (Ex.type != this.value) {
                                Ex.type = this.value;
                                change = true;
                            }

                            Ex.toggleLocked();
                            if (change) {
                                Ex.getRatePaste();
                            }
                        });

                        F.id("btn_reverse").onclick = function(e) {
                            e = e || event;
                            e.preventDefault();
                            if (F.hasClass(this, "disabled")) {
                                return;
                            }
                            let fromVal = selectorFrom.val();
                            let toVal = selectorTo.val();
                            if (
                                !selectorTo.options[fromVal] ||
                                !selectorFrom.options[toVal]
                            ) {
                                return;
                            }
                            selectorTo.val(fromVal);
                            F.id("receive_wallet").value = "";
                        };

                        F.id("select_amount_from").onfocus = function() {
                            F.remClass("receive_wallet", "error");
                        };
                        F.id("select_amount_from").onkeydown = function(e) {
                            e = e || event;
                            FixedFunc.keydown(this, e);
                        };
                        F.id("select_amount_from").oninput = function(e) {
                            e = e || event;
                            let inp = this;
                            F.remClass(inp, "error");
                            Ex.changeable = Ex.dirfixed ? Ex.changeable : "from";
                            clearTimeout(Ex.timeKeyup);
                            Ex.toggleLocked();
                            if (this.value) {
                                Ex.timeKeyup = setTimeout(function() {
                                    Ex.amount.from = inp.value;
                                    Ex.getRate(selectorFrom.val(), selectorTo.val(), inp.value);
                                }, 300);
                            }
                        };
                        F.id("select_amount_from").onblur = function(e) {
                            clearTimeout(Ex.timeKeyup);
                            if (this.value) {
                                Ex.getRate(selectorFrom.val(), selectorTo.val(), this.value);
                            } else {
                                this.value = "0.0000";
                                F.id("select_hinterror_from").innerHTML =
                                    "The amount can not be zero";
                            }
                        };

                        F.id("select_amount_to").onfocus = function() {
                            F.remClass("receive_wallet", "error");
                        };
                        F.id("select_amount_to").onkeydown = function(e) {
                            e = e || event;
                            FixedFunc.keydown(this, e);
                        };
                        F.id("select_amount_to").oninput = function(e) {
                            e = e || event;
                            Ex.changeable = Ex.dirfixed ? Ex.changeable : "to";
                            let inp = this;
                            F.remClass(inp, "error");
                            clearTimeout(Ex.timeKeyup);
                            Ex.toggleLocked();
                            if (this.value) {
                                Ex.timeKeyup = setTimeout(function() {
                                    Ex.amount.to = inp.value;
                                    Ex.getRate(
                                        selectorFrom.val(),
                                        selectorTo.val(),
                                        inp.value,
                                        "to"
                                    );
                                }, 300);
                            }
                        };
                        F.id("select_amount_to").onblur = function() {
                            clearTimeout(Ex.timeKeyup);
                            if (this.value) {
                                Ex.getRate(
                                    selectorFrom.val(),
                                    selectorTo.val(),
                                    this.value,
                                    "to"
                                );
                            } else {
                                this.value = "0.0000";
                                F.id("select_hinterror_to").innerHTML =
                                    "The amount can not be zero";
                            }
                        };

                        F.bind("receive_wallet", "keydown", function(e) {
                            e = e || event;
                            let WH = e.which || e.keyCode;
                            if (WH == 13) {
                                e.preventDefault();
                                _exchangeSubmit.click();
                            }
                        });
                        F.bind("receive_wallet", "focus", function() {
                            F.remClass(this, "error");
                        });
                        F.bind("receive_wallet", "click", function() {
                            // console.log('try');
                        });
                        F.bind("receive_wallet", "input", function() {
                            F.remClass(this, "error");
                            // F.remClass('receive_wallet', 'error');
                            clearTimeout(Ex.timeKeyupWallet);
                            let val = this.value;
                            if (val) {
                                Ex.timeKeyupWallet = setTimeout(function() {
                                    Ex.timeKeyupWallet = -1;
                                    Ex.validateAddress();
                                }, 300);
                            } else {
                                Ex.timeKeyupWallet = -1;
                                Ex.error.address = true;
                                Ex.unlockAmounts();
                                Ex.checkButton();
                            }
                        });
                        F.bind("receive_wallet", "blur", function() {
                            let inp = this;
                            if (inp.value) {
                                if (Ex.timeKeyupWallet != -1) {
                                    return;
                                }
                                Ex.validateAddress();
                            } else {
                                Ex.error.address = true;
                                Ex.unlockAmounts();
                                Ex.checkButton();
                            }
                        });
                        F.bind("receive_extraid", "blur", function() {
                            let inp = this;
                            Ex.validateAddress();
                            Ex.timeKeyupWallet = -1;
                        });
                        F.bind("receive_extraid", "input", function() {
                            F.remClass(this, "error");
                            // F.remClass('receive_wallet', 'error');
                            clearTimeout(Ex.timeKeyupWallet);
                            Ex.timeKeyupWallet = -1;
                        });

                        F.id("select_label_from").onclick = function() {
                            selectorFrom.open();
                        };
                        F.id("select_label_to").onclick = function() {
                            selectorTo.open();
                        };

                        F.id("wallet_scanqr").onclick = function(e) {
                            e = e || event;
                            e.preventDefault();
                            UI.qrscan({
                                scan: function(code) {
                                    let parse = code.match(/(?:\w+:)?(\w+)(?:\?.*)?/i);
                                    F.id("receive_wallet").value = parse[1];
                                    F.id("receive_wallet").focus();
                                    F.id("receive_wallet").blur();
                                    this.close();
                                },
                            });
                        };
                        F.on("exchange_amount", "click", ".tolightning", function(e) {
                            let dir = this.getAttribute("data-dir");
                            if (dir == "from") {
                                selectorFrom.select("btcln");
                            } else if (dir == "to") {
                                selectorTo.select("btcln");
                            }
                        });
                        F.on(
                            "exchange_amount",
                            "mousedown",
                            ".maxmin-value",
                            function(e) {
                                e = e || event;
                                e.preventDefault();
                                let _inp =
                                    this.parentNode.parentNode.querySelector(
                                        "input.input-amount"
                                    );
                                _inp.value = this.getAttribute("data-value");
                                Ex.toggleLocked();
                                Ex.changeable = Ex.dirfixed ?
                                    Ex.changeable :
                                    _inp.getAttribute("data-dir");
                                Ex.getRatePaste();
                                return false;
                            }
                        );
                        F.id("type_difference").onclick = function(e) {
                            e = e || event;
                            e.preventDefault();
                            UI.popup({
                                html: '<div class="popup-content fix-width2">' +
                                    '<h3 style="margin-bottom: 1.3em;">What is the difference between fixed and a float rates?</h3>' +
                                    "<h4>Fixed rate</h4>" +
                                    '<p style="text-align: justify;margin-bottom: 0.2em;">Opting for a fixed rate, you get the price you see at the point of initiating a transaction.</p>' +
                                    '<ul class="list">' +
                                    "<li>Pay just 1% + network fee.</li>" +
                                    "<li>No hidden commissions.</li>" +
                                    "<li>Rates freeze for 10 minutes.</li>" +
                                    '<li>If the market rate changes by more than 1.2% <span style="text-decoration: underline;">before the appearance of your transaction on the blockchain network</span>, you will be asked to make a refund or continue exchanging at the market rate.</li>' +
                                    "</ul>" +
                                    "<h4>Float rate</h4>" +
                                    '<p style="text-align: justify;margin-bottom: 0.2em;">The exchange rate is finally set when your transaction receives the necessary number of blockchain network confirmations. If the market goes up, you will get more cryptocurrency, if down - less. All fair.</p>' +
                                    '<ul class="list">' +
                                    "<li>Pay just 0.5% + network fee.</li>" +
                                    "<li>No hidden commissions.</li>" +
                                    "<li>The exchange rate will be set when we receive your transaction.</li>" +
                                    "</ul>" +
                                    '<p style="padding-left: 1em;border-left: 2px solid #0171a6;font-size: 0.9em;margin: 0.7em 0 0.2em 0.1em;font-style: italic;text-align: left;"><span style="display: inline-block;margin-bottom: 0.4em;"><b style="font-weight: 600;font-style: normal;">Example:</b> You need to exchange 1 BTC for 28.37362388 ETH.</span><br>' +
                                    '<b style="font-weight: 600;">If you choose a fixed rate</b>, you will receive exactly 28.37362388 ETH for 1 BTC.<br><b style="font-weight: 600;">If you choose a float rate</b>, then the price of 1 BTC will vary between 28.52343244 ETH and 28.13788921, in accordance with the exchange rate volatility.</p>' +
                                    '<div class="popup-ctrl"><span class="btn submit popup-close-btn bghl">Ok</span></div></div>',
                            }).show();
                        };

                        Ex.init = true;
                        Ex.getRateFull(
                            selectorFrom.val(),
                            selectorTo.val(),
                            1000,
                            "to",
                            200
                        );
                        F.id("receive_wallet").focus();
                        F.id("receive_wallet").blur();
                        Ex.extraIDtoggle();
                        Ex.changePositionUsdRate();
                        Ex.toggleLocked();
                    });
                </script>
            </div>
        </section>
        <section class="advantages-section" id="advantages_section">
            <div class="wrapper clrfix">
                <div class="col">
                    <h3 class="notmobile">{{ __('Save time') }}</h3>
                    <div class="advantages-icon">
                        <span class="ico adv-time-0"><i class="ico hl adv-time-1"></i></span>
                    </div>
                    <div class="advantages-descr">
                        <h3 class="onlymobile">{{ __('Save time') }}</h3>
                        <p>{{ __('Maximum exchange speed due to the full automation') }}</p>
                    </div>
                </div>
                <div class="col">
                    <h3 class="notmobile">{{ __('Save money') }}</h3>
                    <div class="advantages-icon">
                        <span class="ico adv-money-0"><i class="ico hl adv-money-1"></i></span>
                    </div>
                    <div class="advantages-descr">
                        <h3 class="onlymobile">{{ __('Save money') }}</h3>
                        <p>{{ __('Best exchange rates and minimum commissions') }}</p>
                    </div>
                </div>
                <div class="col">
                    <h3 class="notmobile">{{ __('Make an exchange') }}</h3>
                    <div class="advantages-icon">
                        <span class="ico adv-exchange-0"><i class="ico hl adv-exchange-1"></i></span>
                    </div>
                    <div class="advantages-descr">
                        <h3 class="onlymobile">{{ __('Make an exchange') }}</h3>
                        <p>{{ __('Pick the right strategy and make favourable trades') }}</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="recent-section">
            <div class="wrapper clrfix">
                <h2 class="center">{{ __('Recent transactions') }}</h2>
                <ul class="recent-list" id="recent_list">
                    @foreach ($history as $order)
                        <li>
                            <div class="recent-time">
                                <time timestamp="{{ strtotime($order->created_at) }}"></time>
                            </div>
                            <div class="dir-from">
                                <div class="coin-value">{{ number_format($order->send_amount, 5) }}
                                    {{ $order->from_currency }}</div>
                                <div class="coin-ico svgcoin {{ strtolower($order->from_currency) }}"></div>
                            </div>
                            <div class="dir-arrow">
                                <span class="ico arrow"></span>
                            </div>
                            <div class="dir-to">
                                <div class="coin-ico svgcoin {{ strtolower($order->to_currency) }}"></div>
                                <div class="coin-value">{{ $order->to_currency }}</div>
                            </div>
                            <div class="recent-howlong">
                                <i class="ico timer hidden"></i>
                                <span class="recent-timer hidden" data-time="22"></span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
        <section class="faq-section">
            <div class="wrapper clrfix">
                <h2 class="center">{{ __('FAQ') }}</h2>
                <ul class="mini-faq clrfix">
                    <li>
                        <h4>How can I track my order?</h4>
                        <p>
                            In three ways: by email (if you leave your email address), on
                            our website (if your browser accepts cookies) or by viewing the
                            transactions in the blockchain by the links from your order.
                        </p>
                    </li>
                    <li>
                        <h4>Why can I trust you?</h4>
                        <p>
                            No registration and no need to share your personal details. We
                            don't hold your funds, all exchanges take place instantly in
                            fully automatic mode.
                        </p>
                        <p class="reviews-images">
                            <a rel="noopener noreferrer" target="_blank" class="svgreviews tw" title="twitter.com"
                                href="https://twitter.com/{{ settings('website_title') }}"></a>
                            <a rel="noopener noreferrer" target="_blank" class="svgreviews tg" title="Telegram"
                                href="https://t.me/{{ settings('website_title') }}"></a>
                            <a rel="noopener noreferrer" target="_blank" class="svgreviews medium"
                                title="medium.com" href="https://medium.com/{{ settings('website_title') }}"></a>
                            <a rel="noopener noreferrer" target="_blank" class="svgreviews instagram"
                                title="instagram.com"
                                href="https://www.instagram.com/{{ settings('website_title') }}/"></a>
                            <a rel="noopener noreferrer" target="_blank" class="svgreviews reddit"
                                title="reddit.com"
                                href="https://www.reddit.com/user/{{ settings('website_title') }}/"></a>
                            <a rel="noopener noreferrer" target="_blank" class="svgreviews bitcointalk"
                                title="bitcointalk.org"
                                href="https://bitcointalk.org/index.php?topic=5107342.new#new"></a>
                            <a rel="noopener noreferrer" target="_blank" class="svgreviews bestchange"
                                title="bestchange.com"
                                href="https://www.bestchange.com/{{ settings('website_title') }}-exchanger"></a>
                            <a rel="noopener noreferrer" target="_blank" class="svgreviews trustpilot"
                                title="trustpilot.com"
                                href="https://www.trustpilot.com/review/{{ settings('website_title') }}.com"></a>
                        </p>
                    </li>
                    <li>
                        <h4>Do you have hidden fees?</h4>
                        <p>
                            Honesty is our main priority, so we commit to full transparency
                            and make all the fees clear:
                        </p>
                        <p>
                            •  1% if you opt for a <b>fixed rate</b><br />•  0.5% if you opt
                            for a <b>floating rate</b>
                        </p>
                    </li>
                </ul>
                <div class="mini-faq-more">
                    <a href="{{ url('/') }}/faq"><span>{{ __('Go to page FAQ') }}</span> <i
                            class="ico arrow-forward"></i></a>
                </div>
            </div>
        </section>
        <section class="recent-section">
            <div class="wrapper clrfix">
                <h2 class="center">{{ __('Recent posts') }}</h2>
                <div class="blog-articles articles-news blog-index">
                    <article class="blog-post blog-post-main">
                        <div class="blog-post-img">
                            <a href="{{ url('/') }}/blog/news/weekly-2022-11-19"><img
                                    src="{{ url('/') }}/media/thumbs/blog/news/3rd%20week%20of%20November/Nov-news-11-22_03_w700.jpg"
                                    alt="" /></a>
                        </div>
                        <div class="blog-post-body">
                            <header class="blog-post-head">
                                <a href="{{ url('/') }}/blog/news/weekly-2022-11-19">News of cryptocurrencies of
                                    the 3rd week of November
                                    2022</a>
                                <div class="blog-time">
                                    <time timestamp="1668859200"></time>
                                </div>
                            </header>
                            <div class="blog-post-desc">
                                Trust in exchanges has been undermined since the FTX crash,
                                Binance is working on solutions to be as transparent to its
                                users as possible, and El Salvador has announced a willingness
                                to buy BTC every day.
                            </div>
                        </div>
                    </article>
                    <article class="blog-post">
                        <div class="blog-post-img">
                            <a href="{{ url('/') }}/blog/news/ftx-crash-reasons-fallout"><img
                                    src="{{ url('/') }}/media/thumbs/blog/news/ftx/FF-FTX-final_w700.jpg"
                                    alt="" /></a>
                        </div>
                        <div class="blog-post-body">
                            <header class="blog-post-head">
                                <a href="{{ url('/') }}/blog/news/ftx-crash-reasons-fallout">FTX crash: reasons
                                    and fallout</a>
                                <div class="blog-time">
                                    <time timestamp="1668600000"></time>
                                </div>
                            </header>
                        </div>
                    </article>
                    <article class="blog-post">
                        <div class="blog-post-img">
                            <a href="{{ url('/') }}/blog/news/weekly-2022-11-12"><img
                                    src="{{ url('/') }}/media/thumbs/blog/news/2nd%20week%20of%20November/Nov-news-11-22_02_w700.jpg"
                                    alt="" /></a>
                        </div>
                        <div class="blog-post-body">
                            <header class="blog-post-head">
                                <a href="{{ url('/') }}/blog/news/weekly-2022-11-12">News of cryptocurrencies of
                                    the 2nd week of November
                                    2022</a>
                                <div class="blog-time">
                                    <time timestamp="1668254400"></time>
                                </div>
                            </header>
                        </div>
                    </article>
                    <article class="blog-post">
                        <div class="blog-post-img">
                            <a href="{{ url('/') }}/blog/news/weekly-2022-11-05"><img
                                    src="{{ url('/') }}/media/thumbs/blog/news/1st%20week%20of%20November/Nov-news-11-22_01_w700.jpg"
                                    alt="" /></a>
                        </div>
                        <div class="blog-post-body">
                            <header class="blog-post-head">
                                <a href="{{ url('/') }}/blog/news/weekly-2022-11-05">News of cryptocurrencies of
                                    the 1st week of November
                                    2022</a>
                                <div class="blog-time">
                                    <time timestamp="1667649600"></time>
                                </div>
                            </header>
                        </div>
                    </article>
                    <article class="blog-post">
                        <div class="blog-post-img">
                            <a href="{{ url('/') }}/blog/news/weekly-2022-10-29"><img
                                    src="{{ url('/') }}/media/thumbs/blog/news/Oct-news-29-22_05_w700.jpg"
                                    alt="" /></a>
                        </div>
                        <div class="blog-post-body">
                            <header class="blog-post-head">
                                <a href="{{ url('/') }}/blog/news/weekly-2022-10-29">News of cryptocurrencies of
                                    the 5th week of October 2022</a>
                                <div class="blog-time">
                                    <time timestamp="1667044800"></time>
                                </div>
                            </header>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>
    <template id="cookies_accept">
        <div class="cookie-table">
            <div class="cookie-cell">
                <p>
                    {{ __('We use cookies to provide the best experience on our website. By
                              using') }}
                    {{ url('/') }} {{ __('you agree to') }}
                    <a href="{{ url('/') }}/privacy-policy">{{ __('Privacy Policy') }}</a> and
                    <a href="{{ url('/') }}/terms-of-service">{{ __('Terms of Service') }}</a>.
                </p>
            </div>
            <div class="cookie-cell clrfix">
                <a class="btn submit bghl close" href="javascript:;">{{ __('Accept') }} &amp;
                    {{ __('Close') }}</a>
            </div>
        </div>
    </template>
    <script src='https://easybit.com/js/en/payload-v1.1.js'></script>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            moment.locale("en");
            let F = UI.func;
            let _typeExchange = UI.radio("select_type_from");
            let Ex = {
                init: false,
                lock: false,
                type: _typeExchange.val(),
                send_network: F.id("send_network").value, //$("#send_network").val(),
                receive_network: F.id("receive_network").value, //$("#receive_network").val(),
                from: "0.1042687",
                to: "",
                // usd: 0,
                usd: {
                    from: 0,
                    to: 0
                },
                onlyfixed: false,
                dirfixed: false,
                changeable: "from",
                timeKeyup: -1,
                timeKeyupWallet: -1,
                errorInterval: -1,
                isRequest: false,
                amount: {
                    from: F.id("select_amount_from").value,
                    to: F.id("select_amount_to").value,
                },
                tag_required: false,
                error: {
                    from: false,
                    to: false,
                    address: true,
                    tag: false,
                },
                lastReq: undefined,
                select: {
                    from: function(sel) {
                        let value = sel.value.toLowerCase();
                        let title =
                            "<span>" +
                            sel.symbol +
                            (sel.sub ? "<sup>" + sel.sub + "<\sup>" : "") +
                            "</span>";
                        let html =
                            title + F.fmt(F.id("label_img_tmpl").innerHTML, value);
                        F.id("select_amount_from").parentNode.setAttribute(
                            "data-value",
                            value
                        );
                        F.id("select_label_from").innerHTML = html;
                        F.id("btn_reverse_from").setAttribute("data-value", value);
                        F.id("logo_text_from").setAttribute("data-value", value);
                        F.id("logo_arrow_from").setAttribute("data-value", value);
                        Ex.from = value;
                        APP.highlightingColor(Ex.from, Ex.to);
                    },
                    to: function(sel) {
                        let value = sel.value;
                        let title =
                            "<span>" +
                            sel.symbol +
                            (sel.sub ? "<sup>" + sel.sub + "<\sup>" : "") +
                            "</span>";
                        let html =
                            F.fmt(F.id("label_img_tmpl").innerHTML, value) + title;
                        F.id("select_amount_to").parentNode.setAttribute(
                            "data-value",
                            value
                        );
                        F.id("select_label_to").innerHTML = html;
                        F.id("btn_reverse_to").setAttribute("data-value", value);
                        F.id("logo_text_to").setAttribute("data-value", value);
                        F.id("logo_arrow_to").setAttribute("data-value", value);
                        Ex.to = value;
                        APP.highlightingColor(Ex.from, Ex.to);
                    },
                },
                gradient: function(from, to) {
                    let style =
                        "background: -moz-linear-gradient(left, " +
                        from +
                        " 0%, " +
                        to +
                        " 100%);" +
                        "background: -webkit-linear-gradient(left, " +
                        from +
                        " 0%," +
                        to +
                        " 100%);" +
                        "background: linear-gradient(to right, " +
                        from +
                        " 0%," +
                        to +
                        " 100%);";

                    F.id("exchange_submit").setAttribute("style", style);
                    F.id("receive_wallet_line").setAttribute("style", style);
                    if (F.id("receive_wallet_line_extra"))
                        F.id("receive_wallet_line_extra").setAttribute(
                            "style",
                            style
                        );
                },
                checkButton: function() {
                    let cond = true;
                    for (let key in Ex.error) {
                        if (Ex.error[key]) cond = false;
                    }
                    if (cond) {
                        F.remClass("exchange_submit", "disabled");
                    } else {
                        F.addClass("exchange_submit", "disabled");
                    }
                },
                getRate: function(from, to, qty, dir, inusd, send_network, receive_network) {
                    if (Ex.isRequest) {
                        Ex.lastReq = {
                            from: from,
                            to: to,
                            qty: qty,
                            dir: dir,
                            inusd: inusd,
                            send_network: send_network,
                            receive_network: receive_network,
                        };
                        return;
                    }
                    clearInterval(Ex.errorInterval);
                    let data = {
                        type: Ex.type,
                        fromCurrency: from.toUpperCase(),
                        toCurrency: to.toUpperCase(),
                        receive_network: Ex.receive_network,
                        send_network: Ex.send_network,
                    };
                    F.remClass("select_amount_to", "error");
                    F.remClass("select_amount_from", "error");

                    if (typeof qty == "string") {
                        qty = qty.match(/[\d\.]+/g)[0];
                    }
                    if (dir == "to") {
                        data["toQty"] = qty;
                    } else {
                        data["fromQty"] = qty;
                    }
                    if (inusd === true) {
                        data["usd"] = Ex.usd.from;
                    } else if (+inusd) {
                        data["usd"] = +inusd;
                    }
                    Ex.isRequest = true;
                    APP.api(
                        "exchangePrice",
                        data,
                        function(msg) {
                            Ex.isRequest = false;
                            if (Ex.lastReq) {
                                Ex.getRate(
                                    Ex.lastReq.from,
                                    Ex.lastReq.to,
                                    Ex.lastReq.qty,
                                    Ex.lastReq.dir,
                                    Ex.lastReq.inusd,
                                    Ex.lastReq.send_network,
                                    Ex.lastReq.receive_network,
                                );
                                Ex.lastReq = undefined;
                                return;
                            }
                            let d = msg.data;
                            let eq = Ex.type == "fixed" ? "=" : "≈";
                            let eqem = Ex.type == "fixed" ? "" : "≈";
                            if (!d) {
                                if (dir == "to") {
                                    F.addClass("select_amount_to", "error");
                                } else {
                                    F.addClass("select_amount_from", "error");
                                }
                                return;
                            }
                            d.to.max = F.fixNumber(d.to.max, 8);

                            if (d.error == 1 && true) {
                                F.addClass("select_amount_from", "error");
                                if (+d.from.amount <= +d.from.min) {
                                    F.id("select_hinterror_from").innerHTML =
                                        'Minimum amount <button type="button" class="maxmin-value" data-value="' +
                                        d.from.min +
                                        '">' +
                                        d.from.min +
                                        " " +
                                        d.from.currency +
                                        "</button>";
                                } else {
                                    F.id("select_hinterror_from").innerHTML =
                                        'You exceeded the limit of <button type="button" class="maxmin-value" data-value="' +
                                        d.from.max +
                                        '">' +
                                        d.from.max +
                                        " " +
                                        d.from.currency +
                                        "</button>";
                                }
                                Ex.error.from = true;
                            } else if (d.error == 2 && true) {
                                F.addClass("select_amount_to", "error");
                                if (+d.to.amount <= +d.to.min) {
                                    F.id("select_hinterror_to").innerHTML =
                                        'Minimum amount <button type="button" class="maxmin-value" data-value="' +
                                        d.to.min +
                                        '">' +
                                        d.to.min +
                                        " " +
                                        d.to.currency +
                                        "</button>";
                                } else {
                                    F.id("select_hinterror_to").innerHTML =
                                        'You exceeded the limit of <button type="button" class="maxmin-value" data-value="' +
                                        d.to.max +
                                        '">' +
                                        d.to.max +
                                        " " +
                                        d.to.currency +
                                        "</button>";
                                }
                                Ex.error.to = true;
                            } else {
                                Ex.error.from = false;
                                Ex.error.to = false;
                            }
                            Ex.checkButton();
                            if (inusd) {
                                F.id("select_amount_from").value = d.from.amount;
                                F.id("select_amount_to").value = eqem + d.to.amount;
                            } else if (dir == "to") {
                                F.id("select_amount_from").value = d.from.amount;
                                // if (document.activeElement != F.id('select_amount_to')) {
                                F.id("select_amount_to").value =
                                    eqem + F.fixNumber(d.to.amount);
                                // }
                            } else {
                                if (
                                    document.activeElement != F.id("select_amount_from")
                                ) {
                                    F.id("select_amount_from").value = F.fixNumber(
                                        d.from.amount
                                    );
                                }
                                F.id("select_amount_to").value = eqem + d.to.amount;
                            }
                            Ex.amount.from = F.fixNumber(d.from.amount);
                            Ex.amount.to = F.fixNumber(d.to.amount);
                            Ex.usd.from = d.from.usd;
                            Ex.usd.to = d.to.usd;
                            F.id("select_rate_from").innerHTML =
                                "1 " +
                                d.from.currency +
                                " " +
                                eq +
                                " " +
                                d.from.rate +
                                " " +
                                d.to.currency;
                            F.id("select_rate_to").innerHTML =
                                "1 " +
                                d.to.currency +
                                " " +
                                eq +
                                " " +
                                d.to.rate +
                                " " +
                                d.from.currency;
                            F.id("rate_usd").innerHTML = "$ " + d.from.usd;
                            F.id("select_maxmin_from").innerHTML =
                                '<span>min:</span>&nbsp;<button type="button" class="maxmin-value" data-value="' +
                                d.from.min +
                                '">' +
                                d.from.min +
                                " " +
                                d.from.coin +
                                '</button> <span>max:</span>&nbsp;<button type="button" class="maxmin-value" data-value="' +
                                d.from.max +
                                '">' +
                                d.from.max +
                                " " +
                                d.from.coin +
                                "</button>";
                            F.id("select_maxmin_to").innerHTML =
                                '<span>min:</span>&nbsp;<button type="button" class="maxmin-value" data-value="' +
                                d.to.min +
                                '">' +
                                d.to.min +
                                " " +
                                d.to.coin +
                                '</button> <span>max:</span>&nbsp;<button type="button" class="maxmin-value" data-value="' +
                                d.to.max +
                                '">' +
                                d.to.max +
                                " " +
                                d.to.coin +
                                "</button>";

                            F.id("select_info_from").innerHTML = "";
                            F.id("select_info_to").innerHTML = "";

                            if (
                                d.from.currency == "BTC" &&
                                d.to.currency != "BTCLN"
                            ) {
                                F.id("select_info_from").innerHTML =
                                    '<button class="btn-text tolightning" type="button" data-dir="from"><span style="display:none" class="ico lightning" data-value="btcln"></span> <span style="display:none">Try lightning!</span></button>';
                            } else if (d.from.currency == "BTCLN") {
                                F.id("select_info_from").innerHTML =
                                    "<span>" +
                                    ~~(Ex.amount.from * 100000000) +
                                    " satoshi</span>";
                            }

                            if (
                                d.to.currency == "BTC" &&
                                d.from.currency != "BTCLN"
                            ) {
                                F.id("select_info_to").innerHTML =
                                    '<button class="btn-text tolightning" type="button" data-dir="to"><span style="display:none">Try lightning!</span> <span style="display:none" class="ico lightning" data-value="btcln"></span></button>';
                            } else if (d.to.currency == "BTCLN") {
                                F.id("select_info_to").innerHTML =
                                    "<span>" +
                                    ~~(Ex.amount.to * 100000000) +
                                    " satoshi</span>";
                            }
                            Ex.toggleLocked();
                        },
                        function(msg) {
                            Ex.isRequest = false;
                            let time = msg.code == 429 ? 60000 : 10000;
                            Ex.errorInterval = setInterval(function() {
                                Ex.getRateFull(from, to, qty, dir);
                            }, time);
                        }
                    );
                },
                getRateFull: function(from, to, qty, dir, inusd) {
                    function parseColor(color) {
                        function toHex(int) {
                            let hex = int.toString(16);
                            return hex.length == 1 ? "0" + hex : hex;
                        }
                        let arr = [];
                        color.replace(/[\d+\.]+/g, function(v) {
                            arr.push(parseFloat(v));
                        });
                        return "#" + arr.slice(0, 3).map(toHex).join("");
                    }
                    let self = this;
                    self.getRate(from, to, qty, dir, inusd);
                    if (to == "btcln") {
                        F.id("receive_wallet_label").innerHTML =
                            "Your " + selectorTo.selectedAttr("label") + " invoice";
                    } else {
                        F.id("receive_wallet_label").innerHTML =
                            "Your " + selectorTo.selectedAttr("label") + " address";
                    }
                    self.gradient(APP.getCoinColor(from), APP.getCoinColor(to));
                },
                getRatePaste: function(full) {
                    if (!full) {
                        if (Ex.changeable == "to") {
                            Ex.getRate(
                                selectorFrom.val(),
                                selectorTo.val(),
                                F.id("select_amount_to").value,
                                "to"
                            );
                        } else {
                            Ex.getRate(
                                selectorFrom.val(),
                                selectorTo.val(),
                                F.id("select_amount_from").value,
                                "from"
                            );
                        }
                    } else {
                        if (Ex.init && Ex.changeable == "to") {
                            Ex.getRateFull(
                                selectorFrom.val(),
                                selectorTo.val(),
                                F.id("select_amount_to").value,
                                "to",
                                !Ex.dirfixed
                            );
                        } else {
                            Ex.getRateFull(
                                selectorFrom.val(),
                                selectorTo.val(),
                                F.id("select_amount_from").value,
                                "from",
                                !Ex.dirfixed
                            );
                        }
                    }
                },
                fixQty: function(amount) {
                    return F.minCountToFixed(amount, 5, 8);
                },
                checkType: function(amount) {
                    let inputFrom = F.id("select_amount_from");
                    let inputTo = F.id("select_amount_to");
                    if (amount) {
                        F.id("float_type").disabled = true;
                        inputTo.value = amount;
                        Ex.type = "fixed";
                        _typeExchange.val("fixed");
                        Ex.changeable = "to";
                        Ex.toggleLocked();
                        inputTo.disabled = true;
                        inputFrom.disabled = true;
                        Ex.lock = true;
                        Ex.getRatePaste();
                    } else {
                        Ex.unlockAmounts();
                    }
                },
                unlockAmounts: function() {
                    if (!Ex.onlyfixed) {
                        Ex.lock = false;
                        F.id("float_type").disabled = false;
                        F.id("select_amount_from").disabled = false;
                        if (Ex.type != "float") {
                            F.id("select_amount_to").disabled = false;
                        }
                    }
                },
                extraIDtoggle: function() {
                    let valTo = selectorTo.val().toLowerCase();
                    let arr = [
                        "bnb",
                        "xrp",
                        "xlm",
                        "twt",
                        "btcbnb",
                        "adabnb",
                        "ethbnb",
                        "usdtbnb",
                        "busd",
                        "atom",
                    ];
                    let cond = arr.indexOf(valTo) >= 0 ? true : false;
                    F.togClass("wallet_extra_outer", "active", cond);
                    F.togClass("receive_wallet", "with-extra", cond);
                },
                toggleLocked: function() {
                    if (Ex.type == "float") {
                        Ex.changeable = "from";
                        F.id("select_amount_to").setAttribute(
                            "readonly",
                            "readonly"
                        );
                    } else if (!Ex.dirfixed) {
                        F.id("select_amount_to").removeAttribute("readonly");
                    }
                    if (Ex.changeable == "to") {
                        F.remClass(F.id("select_amount_from").parentNode, "locked");
                        F.addClass(F.id("select_amount_to").parentNode, "locked");
                    } else {
                        F.addClass(F.id("select_amount_from").parentNode, "locked");
                        F.remClass(F.id("select_amount_to").parentNode, "locked");
                    }
                },
                changePositionUsdRate: function() {
                    let valFrom = selectorFrom.val().toLowerCase();
                    let valTo = selectorTo.val().toLowerCase();
                    if (
                        (valFrom == "btc" && valTo != "btcln") ||
                        valFrom == "btcln"
                    ) {
                        F.id("exchange_amount").setAttribute(
                            "data-pos-usd",
                            "bottom"
                        );
                    } else {
                        F.id("exchange_amount").setAttribute("data-pos-usd", "top");
                    }
                },
                validateAddress: function() {
                    let inp = F.id("receive_wallet");
                    let extra = F.id("receive_extraid");
                    if (!inp.value) return;
                    let addr = inp.value;
                    // if (extra.value) {
                    // 	addr += ':'+extra.value;
                    // }

                    APP.api("exchangeAddressInfo", {
                            currency: selectorTo.val(),
                            address: addr,
                            tag: extra.value,
                            receive_network: F.id("receive_network").value
                        })
                        .then(function(msg) {
                            F.id("receive_wallet_error").innerHTML = "";
                            F.remClass(inp, "error");
                            F.remClass(extra, "error");
                            Ex.checkType(msg.data.amount);
                            Ex.error.address = false;
                            Ex.error.tag = false;
                            Ex.checkButton();
                        })
                        .catch(function(msg) {
                            F.id("receive_wallet_error").innerHTML = "";
                            F.remClass(inp, "error");
                            F.remClass(extra, "error");
                            Ex.checkType(msg.data.amount);
                            Ex.error.address = false;
                            Ex.error.tag = false;
                            Ex.checkButton();
                        });
                },
                makeOrder: function(data) {
                    let promise = new Promise(function(resolve, reject) {
                        APP.api("exchangeMake", data)
                            .then(function(msg) {
                                resolve(msg);
                            })
                            .catch(function(msg) {
                                reject();
                                if (msg.code == 301) {
                                    F.id("receive_wallet_error").innerHTML =
                                        "Enter your " +
                                        selectorTo.selectedAttr("label") +
                                        " address";
                                    F.id("receive_wallet").focus();
                                    F.addClass("receive_wallet", "error");
                                } else if (msg.code == 300) {
                                    UI.alert("Error! Try reloading the page");
                                } else if (msg.code == 406) {
                                    UI.alert(
                                        "Your XRP address has not been activated. To activate a XRP account, you need to send at least 20 XRP"
                                    );
                                } else if (msg.code == 502) {
                                    UI.popup({
                                        html: '<div class="popup-content fix-width2">' +
                                            '<h3 style="margin-bottom: 1.3em;">Important Notice</h3>' +
                                            '<p style="text-align: center;margin-bottom: 0.2em;">U.S. persons cannot make an exchange on </p>' +
                                            '<div class="popup-ctrl"><span class="btn submit popup-close-btn bghl">I understand</span></div></div>',
                                    }).show();
                                }
                            });
                    });
                    return promise;
                },
            };
            let FixedFunc = {
                keydown: function(input, e) {
                    let WH = e.which || e.keyCode;
                    if (e.ctrlKey || e.altKey || e.metaKey) return;
                    if ((WH == 48 || WH == 96) && input.value == "0") {
                        input.value = "0.";
                    }
                    if (
                        (WH >= 58 && WH <= 90) ||
                        (WH >= 106 && WH <= 111) ||
                        WH >= 146
                    ) {
                        e.preventDefault();
                        if (
                            (WH == 188 || WH == 190 || WH == 191 || WH == 110) &&
                            input.value.search(/\./i) == -1
                        ) {
                            let pos = F.carPos(input);
                            input.value =
                                input.value.substr(0, pos) +
                                "." +
                                input.value.substr(pos++);
                            F.setCarPos(input, pos, pos);
                        }
                    } else if (WH == 13) {
                        input.blur();
                    }
                },
                fixAmount: function(value) {
                    let ar = value.split(".");
                    if (ar[0] == "") {
                        value = "0" + value;
                        ar[0] = "0";
                    }
                    if (ar.length == 1 || ar[1].length <= 8) {
                        return value;
                    }
                    return ar[0] + "." + ar[1].substr(0, 8);
                },
            };

            let selectorFrom = UI.selector("select_currency_from", {
                tmpl: F.id("selector_tmpl").innerHTML,
                search: {
                    placeholder: "Type a currency",
                    label: "Found currencies",
                },
                searchByDataset: ["symbol"],
                hidden: true,
                onInit: function(selected) {
                    Ex.select.from(selected);
                },
            });
            let selectorTo = UI.selector("select_currency_to", {
                tmpl: F.id("selector_tmpl").innerHTML,
                search: {
                    placeholder: "Type a currency",
                    label: "Found currencies",
                },
                searchByDataset: ["symbol"],
                hidden: true,
                onInit: function(selected) {
                    Ex.select.to(selected);
                },
            });

            selectorFrom.onChange(function(selected, from, param) {
                let c_from = selected.value,
                    c_to = selectorTo.val();
                F.remClass("receive_wallet", "error");
                Ex.changePositionUsdRate();
                Ex.select.from(selected);
                if (c_to == c_from && !param) {
                    selectorTo.select(from.value, true);
                    Ex.unlockAmounts();
                    F.id("receive_wallet").value = "";
                }
                if (Ex.lock) {
                    Ex.unlockAmounts();
                    F.id("receive_wallet").value = "";
                }
                if (!param) {
                    Ex.getRatePaste(true);
                }
            });
            selectorTo.onChange(function(selected, from, param) {
                F.remClass("receive_wallet", "error");
                if (Ex.to != selected.value) {
                    Ex.unlockAmounts();
                    F.id("receive_wallet").value = "";
                    F.id("receive_extraid").value = "";
                }
                Ex.extraIDtoggle();
                Ex.changePositionUsdRate();
                Ex.select.to(selected);
                if (selectorFrom.val() == selected.value && !param) {
                    selectorFrom.select(from.value, true);
                    Ex.unlockAmounts();
                    F.id("receive_wallet").value = "";
                    F.id("receive_extraid").value = "";
                }
                if (selected.value.toLowerCase() == "xrp") {
                    F.id("receive_extraid_label").innerHTML =
                        "Destination Tag (optional)";
                    F.id("receive_extraid_label").setAttribute(
                        "data-label",
                        "Destination Tag"
                    );
                } else if (selected.value.toLowerCase() == "xmr") {
                    F.id("receive_extraid_label").innerHTML =
                        "Payment ID (optional)";
                    F.id("receive_extraid_label").setAttribute(
                        "data-label",
                        "Payment ID"
                    );
                } else {
                    F.id("receive_extraid_label").innerHTML = "MEMO (optional)";
                    F.id("receive_extraid_label").setAttribute(
                        "data-label",
                        "MEMO"
                    );
                }
                if (!param) {
                    Ex.getRatePaste(true);
                }
            });

            let _exchangeSubmit = UI.button("exchange_submit", {
                changeAtOnce: false,
                changeTexts: false,
            }).click(function(btn, e) {
                e.preventDefault();
                for (let key in Ex.error) {
                    if (!Ex.error[key]) {
                        continue;
                    }
                    let breakSubmit = true;
                    switch (key) {
                        case "from":
                            F.id("select_amount_from").focus();
                            break;
                        case "to":
                            F.id("select_amount_to").focus();
                            break;
                        case "tag":
                            if (Ex.timeKeyupWallet == -1) {
                                if (Ex.tag_required) {
                                    F.id("receive_extraid_error").innerHTML =
                                        "" +
                                        F.id("receive_extraid_label").getAttribute(
                                            "data-label"
                                        ) +
                                        " is required";
                                } else {
                                    F.id("receive_extraid_error").innerHTML =
                                        "Invalid " +
                                        F.id("receive_extraid_label").getAttribute(
                                            "data-label"
                                        ) +
                                        "";
                                }
                                F.id("receive_extraid").focus();
                                F.addClass("receive_extraid", "error");
                            } else {
                                breakSubmit = false;
                            }
                            break;
                        case "address":
                        default:
                            if (Ex.timeKeyupWallet == -1) {
                                F.id("receive_wallet_error").innerHTML =
                                    "Enter your " +
                                    selectorTo.selectedAttr("label") +
                                    " address";
                                F.id("receive_wallet").focus();
                                F.addClass("receive_wallet", "error");
                            } else {
                                breakSubmit = false;
                            }
                            break;
                    }
                    if (breakSubmit) return;
                }
                let data = {
                    fromCurrency: Ex.from.toUpperCase(),
                    toCurrency: Ex.to.toUpperCase(),
                    type: Ex.type,
                    receive_network: Ex.receive_network,
                    send_network: Ex.send_network,
                    toAddress: F.id("receive_wallet").value,
                };
                if (Ex.changeable == "to") {
                    data["toQty"] = Ex.amount.to;
                } else {
                    data["fromQty"] = Ex.amount.from;
                }
                if (
                    data.toCurrency == "BNB" ||
                    data.toCurrency == "XRP" ||
                    data.toCurrency == "XLM" ||
                    data.toCurrency == "TWT" ||
                    data.toCurrency == "BTCBNB" ||
                    data.toCurrency == "ETHBNB" ||
                    data.toCurrency == "ADABNB" ||
                    data.toCurrency == "USDTBNB" ||
                    data.toCurrency == "BUSD" ||
                    data.toCurrency == "ATOM"
                ) {
                    data.extra = F.id("receive_extraid").value;
                }

                if (typeof gtag == "function") {
                    gtag("event", "exchange", {
                        event_category: "button"
                    });
                }

                let fee = 1 - Ex.usd.to / Ex.usd.from;
                if (
                    1 - Ex.usd.to / Ex.usd.from >= 0.07 &&
                    Ex.usd.from - Ex.usd.to > 2
                ) {
                    UI.popup({
                        html: '<div class="popup-content popup-confirm popup-confirm-whead"> \
        							<header>Attention! High network fees!</header>\
        							<div class="popup-confirm-body">\
        								<p>Please note that the total network fees for sending a transaction and consolidating the funds received represent a significant part of the total exchange amount for this direction.<br><b>Your exchange for this amount can be very unprofitable.</b></p>\
        								<p>You can read more about this problem in <a href="blog/guides/how-rate-formed">our article on the formation of rates</a>.</p>\
        								<div class="popup-ctrl"><button type="button" class="btn cancel popup-close-btn">Cancel exchange</button>\
        								<button type="button" class="btn submit">I understand and confirm this</button></div>\
        							</div>\
        						</div>',
                        onSubmit: function() {
                            btn.loading();
                            Ex.makeOrder(data)
                                .then(function(msg) {
                                    // btn.success();
                                    console.log(msg.data.id)
                                    location.href = "/order/" + msg.data.id;
                                })
                                .catch(function() {
                                    btn.error();
                                });
                        },
                    }).show();
                } else {
                    btn.loading();
                    Ex.makeOrder(data)
                        .then(function(msg) {
                            btn.success();
                            console.log(msg.data.id)
                            location.href = "/order/" + msg.data.id;
                        })
                        .catch(function() {
                            btn.error();
                        });
                }
            });

            _typeExchange.change(function() {
                let change = false;
                if (Ex.type != this.value) {
                    Ex.type = this.value;
                    change = true;
                }

                Ex.toggleLocked();
                if (change) {
                    Ex.getRatePaste();
                }
            });

            F.id("btn_reverse").onclick = function(e) {
                e = e || event;
                e.preventDefault();
                if (F.hasClass(this, "disabled")) {
                    return;
                }
                let fromVal = selectorFrom.val();
                let toVal = selectorTo.val();
                if (
                    !selectorTo.options[fromVal] ||
                    !selectorFrom.options[toVal]
                ) {
                    return;
                }
                selectorTo.val(fromVal);
                F.id("receive_wallet").value = "";
            };

            F.id("select_amount_from").onfocus = function() {
                F.remClass("receive_wallet", "error");
            };
            F.id("select_amount_from").onkeydown = function(e) {
                e = e || event;
                FixedFunc.keydown(this, e);
            };
            F.id("select_amount_from").oninput = function(e) {
                e = e || event;
                let inp = this;
                F.remClass(inp, "error");
                Ex.changeable = Ex.dirfixed ? Ex.changeable : "from";
                clearTimeout(Ex.timeKeyup);
                Ex.toggleLocked();
                if (this.value) {
                    Ex.timeKeyup = setTimeout(function() {
                        Ex.amount.from = inp.value;
                        Ex.getRate(selectorFrom.val(), selectorTo.val(), inp.value);
                    }, 300);
                }
            };
            F.id("select_amount_from").onblur = function(e) {
                clearTimeout(Ex.timeKeyup);
                if (this.value) {
                    Ex.getRate(selectorFrom.val(), selectorTo.val(), this.value);
                } else {
                    this.value = "0.0000";
                    F.id("select_hinterror_from").innerHTML =
                        "The amount can not be zero";
                }
            };

            F.id("select_amount_to").onfocus = function() {
                F.remClass("receive_wallet", "error");
            };
            F.id("select_amount_to").onkeydown = function(e) {
                e = e || event;
                FixedFunc.keydown(this, e);
            };
            F.id("select_amount_to").oninput = function(e) {
                e = e || event;
                Ex.changeable = Ex.dirfixed ? Ex.changeable : "to";
                let inp = this;
                F.remClass(inp, "error");
                clearTimeout(Ex.timeKeyup);
                Ex.toggleLocked();
                if (this.value) {
                    Ex.timeKeyup = setTimeout(function() {
                        Ex.amount.to = inp.value;
                        Ex.getRate(
                            selectorFrom.val(),
                            selectorTo.val(),
                            inp.value,
                            "to"
                        );
                    }, 300);
                }
            };
            F.id("select_amount_to").onblur = function() {
                clearTimeout(Ex.timeKeyup);
                if (this.value) {
                    Ex.getRate(
                        selectorFrom.val(),
                        selectorTo.val(),
                        this.value,
                        "to"
                    );
                } else {
                    this.value = "0.0000";
                    F.id("select_hinterror_to").innerHTML =
                        "The amount can not be zero";
                }
            };

            F.bind("receive_wallet", "keydown", function(e) {
                e = e || event;
                let WH = e.which || e.keyCode;
                if (WH == 13) {
                    e.preventDefault();
                    _exchangeSubmit.click();
                }
            });
            F.bind("receive_wallet", "focus", function() {
                F.remClass(this, "error");
            });
            F.bind("receive_wallet", "click", function() {
                // console.log('try');
            });
            F.bind("receive_wallet", "input", function() {
                F.remClass(this, "error");
                // F.remClass('receive_wallet', 'error');
                clearTimeout(Ex.timeKeyupWallet);
                let val = this.value;
                if (val) {
                    Ex.timeKeyupWallet = setTimeout(function() {
                        Ex.timeKeyupWallet = -1;
                        Ex.validateAddress();
                    }, 300);
                } else {
                    Ex.timeKeyupWallet = -1;
                    Ex.error.address = true;
                    Ex.unlockAmounts();
                    Ex.checkButton();
                }
            });
            F.bind("receive_wallet", "blur", function() {
                let inp = this;
                if (inp.value) {
                    if (Ex.timeKeyupWallet != -1) {
                        return;
                    }
                    Ex.validateAddress();
                } else {
                    Ex.error.address = true;
                    Ex.unlockAmounts();
                    Ex.checkButton();
                }
            });
            F.bind("receive_extraid", "blur", function() {
                let inp = this;
                Ex.validateAddress();
                Ex.timeKeyupWallet = -1;
            });
            F.bind("receive_extraid", "input", function() {
                F.remClass(this, "error");
                // F.remClass('receive_wallet', 'error');
                clearTimeout(Ex.timeKeyupWallet);
                Ex.timeKeyupWallet = -1;
            });

            F.id("select_label_from").onclick = function() {
                selectorFrom.open();
            };
            F.id("select_label_to").onclick = function() {
                selectorTo.open();
            };

            F.id("wallet_scanqr").onclick = function(e) {
                e = e || event;
                e.preventDefault();
                UI.qrscan({
                    scan: function(code) {
                        let parse = code.match(/(?:\w+:)?(\w+)(?:\?.*)?/i);
                        F.id("receive_wallet").value = parse[1];
                        F.id("receive_wallet").focus();
                        F.id("receive_wallet").blur();
                        this.close();
                    },
                });
            };
            F.on("exchange_amount", "click", ".tolightning", function(e) {
                let dir = this.getAttribute("data-dir");
                if (dir == "from") {
                    selectorFrom.select("btcln");
                } else if (dir == "to") {
                    selectorTo.select("btcln");
                }
            });
            F.on(
                "exchange_amount",
                "mousedown",
                ".maxmin-value",
                function(e) {
                    e = e || event;
                    e.preventDefault();
                    let _inp =
                        this.parentNode.parentNode.querySelector(
                            "input.input-amount"
                        );
                    _inp.value = this.getAttribute("data-value");
                    Ex.toggleLocked();
                    Ex.changeable = Ex.dirfixed ?
                        Ex.changeable :
                        _inp.getAttribute("data-dir");
                    Ex.getRatePaste();
                    return false;
                }
            );
            F.id("type_difference").onclick = function(e) {
                e = e || event;
                e.preventDefault();
                UI.popup({
                    html: '<div class="popup-content fix-width2">' +
                        '<h3 style="margin-bottom: 1.3em;">What is the difference between fixed and a float rates?</h3>' +
                        "<h4>Fixed rate</h4>" +
                        '<p style="text-align: justify;margin-bottom: 0.2em;">Opting for a fixed rate, you get the price you see at the point of initiating a transaction.</p>' +
                        '<ul class="list">' +
                        "<li>Pay just 1% + network fee.</li>" +
                        "<li>No hidden commissions.</li>" +
                        "<li>Rates freeze for 10 minutes.</li>" +
                        '<li>If the market rate changes by more than 1.2% <span style="text-decoration: underline;">before the appearance of your transaction on the blockchain network</span>, you will be asked to make a refund or continue exchanging at the market rate.</li>' +
                        "</ul>" +
                        "<h4>Float rate</h4>" +
                        '<p style="text-align: justify;margin-bottom: 0.2em;">The exchange rate is finally set when your transaction receives the necessary number of blockchain network confirmations. If the market goes up, you will get more cryptocurrency, if down - less. All fair.</p>' +
                        '<ul class="list">' +
                        "<li>Pay just 0.5% + network fee.</li>" +
                        "<li>No hidden commissions.</li>" +
                        "<li>The exchange rate will be set when we receive your transaction.</li>" +
                        "</ul>" +
                        '<p style="padding-left: 1em;border-left: 2px solid #0171a6;font-size: 0.9em;margin: 0.7em 0 0.2em 0.1em;font-style: italic;text-align: left;"><span style="display: inline-block;margin-bottom: 0.4em;"><b style="font-weight: 600;font-style: normal;">Example:</b> You need to exchange 1 BTC for 28.37362388 ETH.</span><br>' +
                        '<b style="font-weight: 600;">If you choose a fixed rate</b>, you will receive exactly 28.37362388 ETH for 1 BTC.<br><b style="font-weight: 600;">If you choose a float rate</b>, then the price of 1 BTC will vary between 28.52343244 ETH and 28.13788921, in accordance with the exchange rate volatility.</p>' +
                        '<div class="popup-ctrl"><span class="btn submit popup-close-btn bghl">Ok</span></div></div>',
                }).show();
            };

            Ex.init = true;
            Ex.getRateFull(
                selectorFrom.val(),
                selectorTo.val(),
                1000,
                "to",
                200
            );
            F.id("receive_wallet").focus();
            F.id("receive_wallet").blur();
            Ex.extraIDtoggle();
            Ex.changePositionUsdRate();
            Ex.toggleLocked();
        });
    </script>
    <script>
        let fromCurrency = $("#send_network").val();
        // const payloadHash = payloadHash.getHash();
        $("#_payload").val(payloadHash.getHash());
        // // alert(payloadHash)

        function network_list_two(sel, _id) {
            var opt = sel.options[sel.selectedIndex];
            var _network = opt.dataset.network
            let $networkLists = JSON.parse(_network)
            $('#' + _id).empty();
            $networkLists.forEach((coin_network) => {
                if (coin_network.isDefault == true) {
                    isDefault = "selected"
                } else {
                    isDefault = false
                }
                let network_list =
                    `<option ${isDefault} value="${coin_network.network}">${coin_network.name}</option>`;
                $('#' + _id).append(network_list)
            });
            convertCurrency()
        }

        network_list_two(fromCurrency)

        function convertCurrency() {
            const amount = $("#select_amount_from").val();
            const toCurrency = $("#receive_network").val();
            var send, receive, send_network, receive_network
            send = $("#select_currency_from").find(":selected").val();
            receive = $("#select_currency_to").find(":selected").val();
            send_network = $("#send_network").find(":selected").val();
            receive_network = $("#receive_network").find(":selected").val();
            $("#receiveAddress").attr("placeholder", `Your ${receive} (${receive_network}) wallet address`);
            // if (send == receive) {
            //     swal("error", "Send and Receive currency can not be the same.")
            // }
            const ex_url = "{{ url('/') }}/rate?send=" + send + "&receive=" + receive + "&sendNetwork=" +
                send_network + "&receiveNetwork=" + receive_network + "&amount=" + amount;
            fetch(ex_url)
                .then(response => {
                    return response.json();
                })
                .then(data => {
                    // console.log(data);
                    if (data.success == 0) {
                        const min_am = "Min: " + data.data.minimumAmount + " Max: " + data.data.maximumAmount;
                        $("#minimumAmount").html(min_am);
                        $("#cur_rate").html(min_am);
                    } else if (data.success == 1) {
                        let rate = data.data.rate;
                        let total = data.data.receiveAmount;
                        const cur_rate = "1: " + send + " = " + rate + " " + receive;
                        $("#cur_rate").html(cur_rate);
                        $("#minimumAmount").html("");
                        $("#select_amount_to").val(total)
                        $("#_rate").val(rate);
                    } else {
                        alert("Unprocessible request, try again in 5minutes")
                    }
                });
        }

        <
        !--

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
</body>

</html>
