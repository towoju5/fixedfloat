@include('header')
<style>
    label {
        display: unset;
        margin-bottom: 0rem;
    }
</style>
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
                    <form action="{{ route('create') }}" method="post">
                        <div class="jby_container">
                            <div class="jby_currency1">
                                <div class="jby_side1">
                                    <p class="jby_min">You Send <small id="minimumAmount"></small></p>
                                    <input type="number" name="amount" id="send_amount" value="0.01"
                                        placeholder="0.1" oninput="convertCurrency()" step="any">
                                </div>
                                <div class="jby_side2">
                                    <label for="crypto_network" class="jby_crypto_network">
                                        <select name="sendNetwork" id="send_network" onchange="convertCurrency()">
                                            <option value="BEP2">BEP2</option>
                                            <option value="BEP20">BEP20</option>
                                            <option selected value="BTC">BTC</option>
                                            <option value="ERC20">ERC20</option>
                                            <option value="SEGWIT">SEGWIT</option>
                                        </select>
                                    </label>

                                    <div class="currency">
                                        <label for="crypto_currrency" class="jby_crypto_currrency">
                                            <select name="send" id="send"
                                                onchange="network_list_two(this, 'send_network')"
                                                data-style="custom-select bg-transparent border-0" data-container="body"
                                                data-live-search="true" class="selectpicker form-control bg-transparent"
                                                required="" tabindex="-98">
                                                @foreach ($currencies['data'] as $item)
                                                    @php($props = json_encode($item['networkList']))
                                                    <option data-network="{{ $props }}"
                                                        @if ($item['currency'] == 'BTC') selected @endif
                                                        value="{{ $item['currency'] }}">{{ $item['currency'] }}</option>
                                                @endforeach
                                            </select>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="jby_switch">
                                <button class="jby_btn" type="button">
                                    <i class="fa-sharp fa-solid fa-repeat"></i>
                                </button>
                            </div>

                            <div class="jby_currency2">
                                <div class="jby_side1">
                                    <p class="jby_min2">You Receive</p>
                                    <input type="number" id="receive_amount" readonly disabled placeholder="0.1" />
                                </div>
                                <div class="jby_side2">
                                    <label for="crypto_network" class="jby_crypto_network">
                                        <select name="receiveNetwork" id="receive_network" onchange="convertCurrency()">
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
                                    </label>

                                    <div class="currency">
                                        <label for="crypto_currrency" class="jby_crypto_currrency">
                                            <select name="receive" id="receive"
                                                onchange="network_list_two(this, 'receive_network')"
                                                id="recipientCurrency"
                                                data-style="custom-select bg-transparent border-0" data-container="body"
                                                data-live-search="true" class="selectpicker form-control bg-transparent"
                                                required="" tabindex="-98">
                                                @foreach ($currencies['data'] as $item)
                                                    @php($props = json_encode($item['networkList']))
                                                    <option
                                                        data-image="https://easybit.com/images/coins/svg/{{ $item['currency'] }}.svg"
                                                        data-network="{{ $props }}"
                                                        @if ($item['currency'] == 'USDT') selected @endif
                                                        value="{{ $item['currency'] }}">{{ $item['currency'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="jby_rate">
                                <p>Current Rate: <span id="cur_rate">1 BTC = 14.2ETH</span></p>
                                {{-- <p><span id="exchange_result">1 USDT = 14.37796 TRX</span></p> --}}
                                <p>More details</p>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="coin_img">
                                        <img src="https://easybit.com/images/coins/svg/ETH.svg" alt="Eth">
                                    </span>
                                </div>
                                <input type="hidden" name="payload" value="" id="_payload">
                                <input type="hidden" name="rate" value="" id="_rate">
                                <input type="text" class="form-control" name="receiveAddress" id="receiveAddress"
                                    value="TRv5pYtmsioaSHHZiN2mB39C5WuCMchrp9"
                                    placeholder="Your Etherium (ERC20) wallet address">
                            </div>
                            <button class="btn_exchange">Exchange</button>
                        </div>
                    </form>
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
                            <div class="featured-box-icon border border-primary text-primary rounded-circle">
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
                            <div class="featured-box-icon border border-primary text-primary rounded-circle">
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
                            <div class="featured-box-icon border border-primary text-primary rounded-circle">
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
                            <div class="featured-box-icon border border-primary text-primary rounded-circle">
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

</div>
@push('js')
    <script src='https://easybit.com/js/en/payload-v1.1.js'></script>
    <script>
        let fromCurrency = $("#send_network").val();
        // const payloadHash = payloadHash.getHash();
        $("#_payload").val(payloadHash.getHash());
        // // alert(payloadHash)

        function network_list_two(sel, _id) {
            var opt = sel.options[sel.selectedIndex];
            var _network = opt.dataset.network
            let $networkLists = JSON.parse(_network)
            $('#' + _id).empty()
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
            const amount = $("#send_amount").val();
            const toCurrency = $("#receive_network").val();
            var send, receive, send_network, receive_network
            send = $("#send").find(":selected").val();
            receive = $("#receive").find(":selected").val();
            send_network = $("#send_network").find(":selected").val();
            receive_network = $("#receive_network").find(":selected").val();
            $("#receiveAddress").attr("placeholder", `Your ${receive} (${receive_network}) wallet address`);
            if (send == receive) {
                swal("error", "Send and Receive currency can not be the same.")
            }
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
                        $("#receive_amount").val(total)
                        $("#_rate").val(rate);
                    } else {
                        alert("Unprocessible request, try again in 5minutes")
                    }
                });
        }
    </script>
@endpush

<!-- Content end -->
@include('footer')
