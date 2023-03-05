@php($i = 1)
@while($i < count($lists))
<div class="currency">
    <label for="crypto_currrency" class="jby_crypto_currrency">
        <select name="receive" id="receive" onchange="convertCurrency()">
            <option value="USDT">USDT</option>
            <option value="BUSD">BUSD</option>
            <option value="BTC">BTC</option>
            <option value="ETH">ETH</option>
        </select>
    </label>
</div>
@php($i++)
@endwhile