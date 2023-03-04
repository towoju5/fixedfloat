@include('header')
            <section class="hero-wrap section shadow-md pb-4">
                <div class="hero-mask opacity-7 bg-dark"></div>
                <div class="hero-bg" style="background-image: url('images/bg/image-5.jpg')"></div>
                <div class="hero-content py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-xl-6 my-auto text-center text-lg-left pb-4 pb-lg-0">
                                <h2 class="text-14 font-weight-400 text-white mb-4">
                                    The Secure,<br class="d-none d-xl-block" />
                                    easiest and fastest <br class="d-none d-xl-block" />
                                    way to transfer money.
                                </h2>
                                <p class="text-4 text-white mb-4">
                                    Send & Receive money to your loved ones in minutes with
                                    great rates and low fees. Over 180 countries and 30
                                    currencies supported.
                                </p>
                                <a href="#" class="btn-link text-4">See more details<i
                                        class="fas fa-chevron-right text-2 ml-2"></i></a>
                            </div>
                            <div class="col-lg-7 col-xl-6 my-auto">
                                <div class="jby_container">
                                    <div class="jby_currency1">
                                        <div class="jby_side1">
                                            <p class="jby_min">You Send</p>
                                            <input type="number" name="send_amount" id="send_amount"
                                                placeholder="0.1" oninput="convertCurrency()">
                                        </div>
                                        <div class="jby_side2">
                                            <label for="crypto_network" class="jby_crypto_network">
                                                <select name="send_network" id="send_network"
                                                    onchange="convertCurrency()">
                                                    <option value="TRC20">TRC20</option>
                                                    <option value="ERC20">ERC20</option>
                                                    <option value="ETH20">ETH20</option>
                                                    <option value="BSC20">BSC20</option>
                                                </select>
                                            </label>

                                            <div class="currency">
                                                <label for="crypto_currrency" class="jby_crypto_currrency">
                                                    <select name="send" id="send"
                                                        onchange="convertCurrency()">
                                                        <option value="TRX">TRX</option>
                                                        <option value="BUSD">BUSD</option>
                                                        <option value="BTC">BTC</option>
                                                        <option value="ETH">ETH</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="jby_switch">
                                        <button class="jby_btn">
                                            <i class="fa-sharp fa-solid fa-repeat"></i>
                                        </button>
                                    </div>

                                    <div class="jby_currency2">
                                        <div class="jby_side1">
                                            <p class="jby_min2">You Receive</p>
                                            <input type="number" id="receive_amount" readonly disabled
                                                name="receive_amount" placeholder="0.1" />
                                        </div>
                                        <div class="jby_side2">
                                            <label for="crypto_network" class="jby_crypto_network">
                                                <select name="receive_network" id="receive_network"
                                                    onchange="convertCurrency()">
                                                    <option value="TRC20">TRC20</option>
                                                    <option value="ERC20">ERC20</option>
                                                    <option value="ETH20">ETH20</option>
                                                    <option value="BSC20">BSC20</option>
                                                </select>
                                            </label>

                                            <div class="currency">
                                                <label for="crypto_currrency" class="jby_crypto_currrency">
                                                    <select name="receive" id="receive"
                                                        onchange="convertCurrency()">
                                                        <option value="USDT">USDT</option>
                                                        <option value="BUSD">BUSD</option>
                                                        <option value="BTC">BTC</option>
                                                        <option value="ETH">ETH</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="jby_rate">
                                        <p>Current Rate: <span id="exchange_result">1 USDT = 14.37796 TRX</span></p>
                                        <p>More details</p>
                                    </div>
                                    <button class="btn_exchange">Exchange</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Send/Request Money End -->

            <!-- Why choose us
    ============================================= -->
            <section class="section bg-white">
                <div class="container">
                    <h2 class="text-9 text-center text-uppercase font-weight-400">
                        Why choose us?
                    </h2>
                    <p class="text-4 text-center font-weight-300 mb-5">
                        Here’s Top 4 reasons why using a Payyed account for manage your
                        money.
                    </p>
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row">
                                <div class="col-sm-6 mb-4">
                                    <div class="featured-box style-3">
                                        <div
                                            class="featured-box-icon border border-primary text-primary rounded-circle">
                                            <i class="fas fa-hand-pointer"></i>
                                        </div>
                                        <h3 class="font-weight-400">Easy to use</h3>
                                        <p>
                                            Lisque persius interesset his et, in quot quidam
                                            persequeris vim, ad mea essent possim iriure.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-4">
                                    <div class="featured-box style-3">
                                        <div
                                            class="featured-box-icon border border-primary text-primary rounded-circle">
                                            <i class="fas fa-share"></i>
                                        </div>
                                        <h3 class="font-weight-400">Faster Payments</h3>
                                        <p>
                                            Persius interesset his et, in quot quidam persequeris
                                            vim, ad mea essent possim iriure.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-4 mb-sm-0">
                                    <div class="featured-box style-3">
                                        <div
                                            class="featured-box-icon border border-primary text-primary rounded-circle">
                                            <i class="fas fa-dollar-sign"></i>
                                        </div>
                                        <h3 class="font-weight-400">Lower Fees</h3>
                                        <p>
                                            Essent lisque persius interesset his et, in quot quidam
                                            persequeris vim, ad mea essent possim iriure.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="featured-box style-3">
                                        <div
                                            class="featured-box-icon border border-primary text-primary rounded-circle">
                                            <i class="fas fa-lock"></i>
                                        </div>
                                        <h3 class="font-weight-400">100% secure</h3>
                                        <p>
                                            Quidam lisque persius interesset his et, in quot quidam
                                            persequeris vim, ad mea essent possim iriure.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Why choose us End -->

            <!-- How it works
    ============================================= -->
            <section class="section">
                <div class="container">
                    <h2 class="text-9 text-center text-uppercase font-weight-400">
                        As simple as 1-2-3
                    </h2>
                    <p class="text-4 text-center font-weight-300 mb-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                    </p>
                    <div class="row">
                        <div class="col-sm-4 mb-4">
                            <div class="featured-box style-4">
                                <div class="featured-box-icon text-dark shadow-none border-bottom">
                                    <span class="w-100 text-20 font-weight-500">1</span>
                                </div>
                                <h3 class="mb-3">Sign Up Your Account</h3>
                                <p class="text-3 font-weight-300">
                                    Sign up for your free personal/business Account in fea a
                                    minute.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-4">
                            <div class="featured-box style-4">
                                <div class="featured-box-icon text-dark shadow-none border-bottom">
                                    <span class="w-100 text-20 font-weight-500">2</span>
                                </div>
                                <h3 class="mb-3">Send & Receive Money</h3>
                                <p class="text-3 font-weight-300">
                                    Receive & Send Payments from worldwide in 40 currencies.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-4 mb-sm-0">
                            <div class="featured-box style-4">
                                <div class="featured-box-icon text-dark shadow-none border-bottom">
                                    <span class="w-100 text-20 font-weight-500">3</span>
                                </div>
                                <h3 class="mb-3">Withdraw Funds</h3>
                                <p class="text-3 font-weight-300">
                                    Your funds will be transferred to your local bank account.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-2">
                        <a href="#" class="btn btn-primary">Open a Free Account</a>
                    </div>
                </div>
            </section>
            <!-- How it works End -->

            <!-- What can you do
    ============================================= -->
            <section class="section bg-white">
                <div class="container">
                    <h2 class="text-9 text-center text-uppercase font-weight-400">
                        What can you do?
                    </h2>
                    <p class="text-4 text-center font-weight-300 mb-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                    </p>
                    <div class="row">
                        <div class="col-sm-6 col-lg-3 mb-4">
                            <a href="#">
                                <div class="featured-box style-5 rounded">
                                    <div class="featured-box-icon text-primary">
                                        <i class="fas fa-share-square"></i>
                                    </div>
                                    <h3>Send Money</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-4">
                            <a href="#">
                                <div class="featured-box style-5 rounded">
                                    <div class="featured-box-icon text-primary">
                                        <i class="fas fa-check-square"></i>
                                    </div>
                                    <h3>Receive Money</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-4">
                            <a href="#">
                                <div class="featured-box style-5 rounded">
                                    <div class="featured-box-icon text-primary">
                                        <i class="fas fa-user-friends"></i>
                                    </div>
                                    <h3>Pay a Friend</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-4">
                            <a href="#">
                                <div class="featured-box style-5 rounded">
                                    <div class="featured-box-icon text-primary">
                                        <i class="fas fa-shopping-bag"></i>
                                    </div>
                                    <h3>Online Shopping</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <a href="#" class="btn-link text-4">See more can you do<i
                                class="fas fa-chevron-right text-2 ml-2"></i></a>
                    </div>
                </div>
            </section>
            <!-- What can you do End -->

            <!-- Testimonial
    ============================================= -->
            <section class="hero-wrap section shadow-md">
                <div class="hero-mask opacity-3 bg-dark"></div>
                <div class="hero-bg hero-bg-scrll" style="background-image: url('images/bg/image-4.jpg')"></div>
                <div class="hero-content py-0 py-lg-5 my-0 my-lg-5">
                    <div class="container text-center">
                        <h2 class="text-9 text-white font-weight-400 text-uppercase mb-5">
                            What our customers say
                        </h2>
                        <a class="video-btn d-flex" href="#"
                            data-src="https://www.youtube.com/embed/7e90gBu4pas" data-toggle="modal"
                            data-target="#videoModal">
                            <span class="btn-video-play bg-white shadow-md rounded-circle m-auto"><i
                                    class="fas fa-play"></i></span>
                        </a>
                    </div>
                </div>
            </section>
            <!-- Testimonial end -->

            <!-- Mobile App
    ============================================= -->
            <section class="section pt-5 pb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-9 col-xl-8 mx-auto">
                            <div class="row">
                                <div class="col-sm-5 col-md-5 text-center align-bottom order-1 order-sm-0">
                                    <img class="img-fluid" alt="" src="images/app-mobile.png" />
                                </div>
                                <div class="col-sm-7 col-md-7 my-auto order-0 order-sm-1 text-center text-sm-left">
                                    <h2 class="text-8 font-weight-400 text-uppercase mb-3">
                                        Get the app
                                    </h2>
                                    <p class="text-4">
                                        Download our app for the fastest, most convenient way to
                                        send & get Payment.
                                    </p>
                                    <div class="pt-2 mb-4 mb-sm-0">
                                        <a class="mr-3" href=""><img class="img-fluid" alt=""
                                                src="images/app-store.png" /></a><a href=""><img
                                                class="img-fluid" alt=""
                                                src="images/google-play-store.png" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Mobile App end -->
        </div>
        <!-- Content end -->
