@php($i = 1)
@while($i < count($lists))
<label for="crypto_network" class="jby_crypto_network">
    <select name="receive_network" id="receive_network" onchange="convertCurrency()">
        @foreach ($lists as $item)
        <option value="TRC20">TRC20</option>
        @endforeach
    </select>
</label>
@include("crypto",  ['lists' => $lists, 'key' => $i])
@php($i++)
@endwhile