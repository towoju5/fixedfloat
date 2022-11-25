<form class="col-md-8" method="POST" id="layout_signup" action="{{ route('register') }}">
    @csrf
    <h4>Join to {{ settings('website_title') }}</h4>
    <div class="input-dyn">
        <input name="name" required type="text" value="" />
        <label for="name">{{__('Name')}}</label>
    </div>
    <div class="input-dyn">
        <input name="email" required type="text" value="" />
        <label for="email">{{__('Email')}}</label>
        <sub class="error">Email entered is not a valid email</sub>
    </div>
    <div class="input-dyn">
        <input name="password" required type="password" value="" />
        <label for="pswd">{{__('Password')}}</label>
        <sub class="error">Password must contain one uppercase, one lowercase, one
            number, one special character, and be at least 6 characters
            long.</sub>
    </div>
    <div class="input-dyn">
        <input name="password_confirmation" required type="password" value="" />
        <label for="repswd">{{__('Confirm Password')}}</label>
        <sub class="error">Passwords do not match.</sub>
    </div>
    <div class="auth-error" id="auth_signup_error">
        An account with this email already exists.
        <button class="btn-text auth-nav-btn" type="button" data-layout="forgot" style="color: inherit">
            {{__('Forgot password')}}?
        </button>
    </div>
    <div class="auth-wrap-btn">
        <button class="btn submit bghl" id="iauth_signup">
            {{__('Sign up')}}
        </button>
    </div>
</form>


{
    "code": 0,
    "msg": "OK",
    "data": [
        {
            "currency": "BTC",
            "symbol": "BTC",
            "network": "BTC",
            "sub": "",
            "name": "Bitcoin",
            "alias": "bitcoin",
            "type": "COIN",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "ETH",
            "symbol": "ETH",
            "network": "ETH",
            "sub": "",
            "name": "Ethereum",
            "alias": "ethereum",
            "type": "COIN",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "USDT",
            "symbol": "USDT",
            "network": "ETH",
            "sub": "ERC20",
            "name": "Tether (ERC20)",
            "alias": "usdt",
            "type": "ERC20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "LTC",
            "symbol": "LTC",
            "network": "LTC",
            "sub": "",
            "name": "Litecoin",
            "alias": "litecoin",
            "type": "COIN",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "XMR",
            "symbol": "XMR",
            "network": "XMR",
            "sub": "",
            "name": "Monero",
            "alias": "monero",
            "type": "COIN",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "ZRX",
            "symbol": "ZRX",
            "network": "ETH",
            "sub": "ERC20",
            "name": "0x (ERC20)",
            "alias": "zrx",
            "type": "ERC20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "AVAX",
            "symbol": "AVAX",
            "network": "C-CHAIN",
            "sub": "C-CHAIN",
            "name": "Avalanche",
            "alias": "avalanche",
            "type": "COIN",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "BAT",
            "symbol": "BAT",
            "network": "ETH",
            "sub": "ERC20",
            "name": "Basic Attention (ERC20)",
            "alias": "bat",
            "type": "ERC20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "BNB",
            "symbol": "BNB",
            "network": "BNB",
            "sub": "BEP2",
            "name": "Binance Chain",
            "alias": "bnb",
            "type": "BEP2",
            "precision": "8",
            "send": "1",
            "recv": "0"
        },
        {
            "currency": "BSC",
            "symbol": "BNB",
            "network": "BSC",
            "sub": "BEP20",
            "name": "Binance Smart Chain",
            "alias": "bnb",
            "type": "BEP20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "BUSD",
            "symbol": "BUSD",
            "network": "BNB",
            "sub": "BEP2",
            "name": "Binance USD (BEP2)",
            "alias": "busd",
            "type": "BEP2",
            "precision": "8",
            "send": "1",
            "recv": "0"
        },
        {
            "currency": "BUSDBSC",
            "symbol": "BUSD",
            "network": "BSC",
            "sub": "BEP20",
            "name": "Binance USD (BEP20)",
            "alias": "busd",
            "type": "BEP20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "BUSDETH",
            "symbol": "BUSD",
            "network": "ETH",
            "sub": "ERC20",
            "name": "Binance USD (ERC20)",
            "alias": "busd",
            "type": "ERC20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "BTCBNB",
            "symbol": "BTC",
            "network": "BNB",
            "sub": "BEP2",
            "name": "Bitcoin (BEP2)",
            "alias": "btc",
            "type": "BEP2",
            "precision": "8",
            "send": "1",
            "recv": "0"
        },
        {
            "currency": "BTCBSC",
            "symbol": "BTC",
            "network": "BSC",
            "sub": "BEP20",
            "name": "Bitcoin (BEP20)",
            "alias": "btc",
            "type": "BEP20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "BTCLN",
            "symbol": "BTC",
            "network": "BTCLN",
            "sub": "LN",
            "name": "Bitcoin (Lightning)",
            "alias": "lightning",
            "type": "COIN",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "BCH",
            "symbol": "BCH",
            "network": "BCH",
            "sub": "",
            "name": "Bitcoin Cash",
            "alias": "bitcoincash",
            "type": "COIN",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "BTT",
            "symbol": "BTT",
            "network": "TRX",
            "sub": "TRC20",
            "name": "BitTorrent",
            "alias": "bittorrent",
            "type": "TRC20",
            "precision": "8",
            "send": "0",
            "recv": "0"
        },
        {
            "currency": "ADA",
            "symbol": "ADA",
            "network": "ADA",
            "sub": "",
            "name": "Cardano",
            "alias": "cardano",
            "type": "COIN",
            "precision": "8",
            "send": "0",
            "recv": "1"
        },
        {
            "currency": "ADABNB",
            "symbol": "ADA",
            "network": "BNB",
            "sub": "BEP2",
            "name": "Cardano (BEP2)",
            "alias": "cardano",
            "type": "BEP2",
            "precision": "8",
            "send": "1",
            "recv": "0"
        },
        {
            "currency": "ADABSC",
            "symbol": "ADA",
            "network": "BSC",
            "sub": "BEP20",
            "name": "Cardano (BEP20)",
            "alias": "cardano",
            "type": "BEP20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "LINK",
            "symbol": "LINK",
            "network": "ETH",
            "sub": "ERC20",
            "name": "Chainlink (ERC20)",
            "alias": "link",
            "type": "ERC20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "ATOM",
            "symbol": "ATOM",
            "network": "ATOM",
            "sub": "",
            "name": "Cosmos",
            "alias": "cosmos",
            "type": "COIN",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "DAIBSC",
            "symbol": "DAI",
            "network": "BSC",
            "sub": "BEP20",
            "name": "DAI (BEP20)",
            "alias": "dai",
            "type": "BEP20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "DAIETH",
            "symbol": "DAI",
            "network": "ETH",
            "sub": "ERC20",
            "name": "DAI (ERC20)",
            "alias": "dai",
            "type": "ERC20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "DAIMATIC",
            "symbol": "DAI",
            "network": "POLYGON",
            "sub": "POLYGON",
            "name": "DAI (POLYGON)",
            "alias": "dai",
            "type": "BEP20",
            "precision": "8",
            "send": "0",
            "recv": "0"
        },
        {
            "currency": "DASH",
            "symbol": "DASH",
            "network": "DASH",
            "sub": "",
            "name": "Dash",
            "alias": "dash",
            "type": "COIN",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "DOGE",
            "symbol": "DOGE",
            "network": "DOGE",
            "sub": "",
            "name": "Dogecoin",
            "alias": "dogecoin",
            "type": "COIN",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "ETHBNB",
            "symbol": "ETH",
            "network": "BNB",
            "sub": "BEP2",
            "name": "Ethereum (BEP2)",
            "alias": "eth",
            "type": "BEP2",
            "precision": "8",
            "send": "1",
            "recv": "0"
        },
        {
            "currency": "ETHBSC",
            "symbol": "ETH",
            "network": "BSC",
            "sub": "BEP20",
            "name": "Ethereum (BEP20)",
            "alias": "eth",
            "type": "BEP20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "ETC",
            "symbol": "ETC",
            "network": "ETC",
            "sub": "",
            "name": "Ethereum Classic",
            "alias": "ethclassic",
            "type": "COIN",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "MKR",
            "symbol": "MKR",
            "network": "ETH",
            "sub": "ERC20",
            "name": "Maker (ERC20)",
            "alias": "mkr",
            "type": "ERC20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "CAKE",
            "symbol": "CAKE",
            "network": "BSC",
            "sub": "BEP20",
            "name": "PancakeSwap (BEP20)",
            "alias": "cake",
            "type": "BEP20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "USDP",
            "symbol": "USDP",
            "network": "ETH",
            "sub": "ERC20",
            "name": "Pax Dollar (ERC20)",
            "alias": "usdp",
            "type": "ERC20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "PAX",
            "symbol": "PAX",
            "network": "ETH",
            "sub": "",
            "name": "Paxos Standard",
            "alias": "pax",
            "type": "ERC20",
            "precision": "8",
            "send": "0",
            "recv": "0"
        },
        {
            "currency": "DOT",
            "symbol": "DOT",
            "network": "DOT",
            "sub": "",
            "name": "Polkadot",
            "alias": "polkadot",
            "type": "COIN",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "MATICETH",
            "symbol": "MATIC",
            "network": "ETH",
            "sub": "ERC20",
            "name": "Polygon (ERC20)",
            "alias": "matic",
            "type": "ERC20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "MATIC",
            "symbol": "MATIC",
            "network": "MATIC",
            "sub": "",
            "name": "Polygon (POLYGON)",
            "alias": "matic",
            "type": "COIN",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "XRP",
            "symbol": "XRP",
            "network": "XRP",
            "sub": "",
            "name": "Ripple",
            "alias": "ripple",
            "type": "COIN",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "SHIBBSC",
            "symbol": "SHIB",
            "network": "BSC",
            "sub": "BEP20",
            "name": "SHIBA INU (BEP20)",
            "alias": "shib",
            "type": "BEP20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "SHIB",
            "symbol": "SHIB",
            "network": "ETH",
            "sub": "ERC20",
            "name": "SHIBA INU (ERC20)",
            "alias": "shib",
            "type": "ERC20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "SOL",
            "symbol": "SOL",
            "network": "SOL",
            "sub": "",
            "name": "Solana",
            "alias": "solana",
            "type": "COIN",
            "precision": "8",
            "send": "0",
            "recv": "0"
        },
        {
            "currency": "XLM",
            "symbol": "XLM",
            "network": "XLM",
            "sub": "",
            "name": "Stellar Lumens",
            "alias": "stellar",
            "type": "COIN",
            "precision": "8",
            "send": "0",
            "recv": "0"
        },
        {
            "currency": "USTBSC",
            "symbol": "UST",
            "network": "BSC",
            "sub": "BEP20",
            "name": "TerraUSD (BEP20)",
            "alias": "ust",
            "type": "BEP20",
            "precision": "8",
            "send": "0",
            "recv": "0"
        },
        {
            "currency": "USDTBNB",
            "symbol": "USDT",
            "network": "BNB",
            "sub": "BEP2",
            "name": "Tether (BEP2)",
            "alias": "usdt",
            "type": "BEP2",
            "precision": "8",
            "send": "1",
            "recv": "0"
        },
        {
            "currency": "USDTBSC",
            "symbol": "USDT",
            "network": "BSC",
            "sub": "BEP20",
            "name": "Tether (BEP20)",
            "alias": "usdt",
            "type": "BEP20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "USDTMATIC",
            "symbol": "USDT",
            "network": "POLYGON",
            "sub": "POLYGON",
            "name": "Tether (POLYGON)",
            "alias": "usdt",
            "type": "BEP20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "USDTSOL",
            "symbol": "USDT",
            "network": "SOL",
            "sub": "SOL",
            "name": "Tether (Solana)",
            "alias": "usdt",
            "type": "TRC20",
            "precision": "8",
            "send": "0",
            "recv": "0"
        },
        {
            "currency": "USDTTRC",
            "symbol": "USDT",
            "network": "TRX",
            "sub": "TRC20",
            "name": "Tether (TRC20)",
            "alias": "usdt",
            "type": "TRC20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "XTZ",
            "symbol": "XTZ",
            "network": "XTZ",
            "sub": "",
            "name": "Tezos",
            "alias": "tezos",
            "type": "COIN",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "TRX",
            "symbol": "TRX",
            "network": "TRX",
            "sub": "",
            "name": "Tron",
            "alias": "tron",
            "type": "COIN",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "TUSD",
            "symbol": "TUSD",
            "network": "ETH",
            "sub": "ERC20",
            "name": "TrueUSD (ERC20)",
            "alias": "trueusd",
            "type": "ERC20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "TWT",
            "symbol": "TWT",
            "network": "BNB",
            "sub": "BEP2",
            "name": "Trust Wallet Token (BEP2)",
            "alias": "twt",
            "type": "BEP2",
            "precision": "8",
            "send": "1",
            "recv": "0"
        },
        {
            "currency": "USDCBSC",
            "symbol": "USDC",
            "network": "BSC",
            "sub": "BEP20",
            "name": "USD Coin (BEP20)",
            "alias": "usdc",
            "type": "BEP20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "USDC2",
            "symbol": "USDC2",
            "network": "ETH",
            "sub": "ERC20",
            "name": "USD Coin (ERC20)",
            "alias": "usdc",
            "type": "ERC20",
            "precision": "8",
            "send": "0",
            "recv": "0"
        },
        {
            "currency": "USDCETH",
            "symbol": "USDC",
            "network": "ETH",
            "sub": "ERC20",
            "name": "USD Coin (ERC20)",
            "alias": "usdc",
            "type": "ERC20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "USDCMATIC",
            "symbol": "USDC",
            "network": "POLYGON",
            "sub": "POLYGON",
            "name": "USD Coin (POLYGON)",
            "alias": "usdc",
            "type": "BEP20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "USDCSOL",
            "symbol": "USDC",
            "network": "SOL",
            "sub": "SOL",
            "name": "USD Coin (Solana)",
            "alias": "usdc",
            "type": "TRC20",
            "precision": "8",
            "send": "0",
            "recv": "0"
        },
        {
            "currency": "USDCTRC",
            "symbol": "USDC",
            "network": "TRX",
            "sub": "TRC20",
            "name": "USD Coin (TRC20)",
            "alias": "usdc",
            "type": "TRC20",
            "precision": "8",
            "send": "1",
            "recv": "1"
        },
        {
            "currency": "ZEC",
            "symbol": "ZEC",
            "network": "ZEC",
            "sub": "",
            "name": "Zcash",
            "alias": "zcash",
            "type": "COIN",
            "precision": "8",
            "send": "1",
            "recv": "1"
        }
    ]
}
