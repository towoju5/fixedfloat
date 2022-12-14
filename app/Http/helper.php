<?php

use App\Models\Admin\Settings;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use KuCoin\SDK\KuCoinApi;
use App\Models\Order;

if (!function_exists('kucoin')) {
   /**
    * Convert data to array
    */
   function kucoin()
   {
      $kucoin = KuCoinApi::setBaseUri('https://openapi-sandbox.kucoin.com');
      return $kucoin;
   }
}

if (!function_exists('currency')) {
   /**
    * Convert data to array
    */
   function currency()
   {
      return "$";
   }
}

if (!function_exists('currency_format')) {
   /**
    * Convert data to array
    */
   function currency_format($amount)
   {
      return currency() . number_format($amount, 2);
   }
}

if (!function_exists('result')) {
   /**
    * Convert data to array
    */
   function result($result)
   {
      if (is_array($result))
         return ($result);
      else
         return json_decode($result, true);
   }
}

if (!function_exists('get_error_response')) {
   function get_error_response($data, $code = NULL)
   {
      $err = $code ?? 400;
      $result = [
         'status' => 'error',
         'error'  => $code ?? 400,
         'message' => "Request Error",
         'data'   => $data
      ];
      return response($result, $err);
   }
}

if (!function_exists('settings')) {
   function settings($key)
   {
      if ($key == 'website_title') {
         return 'sneat';
      }

      $result = Settings::where('key', $key)->first();
      if (!empty($result)) :
         return $result->value;
      endif;

      return null;
   }
}

if (!function_exists('findValByKey')) {
   /**
    * Find if an array key exists
    */
   function findValByKey($arr, $keySearch)
   {
      $out = null;
      if (is_array($arr)) {
         if (array_key_exists($keySearch, $arr)) {
            $out = $arr[$keySearch];
         } else {
            foreach ($arr as $key => $value) {
               if ($out = findValByKey($value, $keySearch)) {
                  break;
               }
            }
         }
      }
      return $out;
   }
}


if (!function_exists('result')) {
   /**
    * Convert data to array
    */
   function result($result)
   {
      if (is_array($result))
         return ($result);
      else
         return json_decode($result, true);
   }
}

if (!function_exists('_getTransactionId')) {
   /**
    * return uuid()
    */
   function _getTransactionId()
   {
      return sprintf(
         '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',

         // 32 bits for "time_low"
         mt_rand(0, 0xffff),
         mt_rand(0, 0xffff),

         // 16 bits for "time_mid"
         mt_rand(0, 0xffff),

         // 16 bits for "time_hi_and_version",
         // four most significant bits holds version number 4
         mt_rand(0, 0x0fff) | 0x4000,

         // 16 bits, 8 bits for "clk_seq_hi_res",
         // 8 bits for "clk_seq_low",
         // two most significant bits holds zero and one for variant DCE1.1
         mt_rand(0, 0x3fff) | 0x8000,

         // 48 bits for "node"
         mt_rand(0, 0xffff),
         mt_rand(0, 0xffff),
         mt_rand(0, 0xffff)
      );
   }
}

if (!function_exists('save_image')) {
   function save_image($path, $image, $customName = NULL)
   {
      // $fileOrignalName = $image->getClientOriginalName();
      $newName = rand(1009, 9999) . (sha1(time())) . '.' . $image->getClientOriginalExtension();
      $image_path = '/storage/' . $path;
      if (!Storage::exists($image_path)) {
         Storage::makeDirectory($image_path);
      }
      $path = public_path() . $image_path;
      $filename = $customName ?? $newName;
      $image->move($path, $filename);
      $paths = $image_path . '/' . $filename;
      return substr($paths, 1);
   }
}

if (!function_exists("updateDotEnv")) {
   /**
    * @param string $key, $newValue
    */
   function updateDotEnv($key, $newValue, $delim = '')
   {
      $path = base_path('.env');
      // get old value from current env
      $oldValue = env($key);

      // was there any change?
      if ($oldValue === $newValue) {
         return;
      }

      // rewrite file content with changed data
      if (file_exists($path)) {
         // replace current value with new value
         file_put_contents(
            $path,
            str_replace(
               $key . '=' . $delim . $oldValue . $delim,
               $key . '=' . $delim . $newValue . $delim,
               file_get_contents($path)
            )
         );
      }
   }
}

if (!function_exists('show_datetime')) {
   function show_datetime($datetime)
   {
      return Carbon::createFromTimeStamp(strtotime($datetime))->diffForHumans();
   }
}

if (!function_exists('addReferalBonus')) {
   function addReferalBonus($referral, $newUser)
   {
      $ref = User::find($referral);
      if ($ref->completed != 1)
         $bonusLeft = ((int)$ref->total_bonus + 1);
      $cred = getenv('BONUS_LEVEL_' . $bonusLeft);

      if ($ref->expected_bonus == $bonusLeft)
         $ref->completed = 1;

      $ref->save();

      return true;
   }
}

if (!function_exists('day_based_sales')) {
   function day_based_sales($days, array $query = [])
   {
      if ($days == 1)
         $from = date('Y-m-d');
      else
         $from = date('Y-m-d', strtotime("-$days days"));

      $to = date('Y-m-d');
      return $query = DB::table('orders')->whereBetween('orders.created_at', [$from, $to])
         ->where($query)
         ->select('created_at', DB::raw('SUM(orders.amount) as total'))
         ->orderBy('orders.created_at', 'asc')
         ->get();
      return $query->total;
   }
}

if (!function_exists('iterateMonth')) {

   #----------------------------------------------
   #   iterate through months
   #----------------------------------------------

   function iterateMonth(array $datas)
   {
      $models = collect($datas);
      $monthsLists = ['January', 'February', 'March', 'April', 'May', 'June', 'July ', 'August', 'September', 'October', 'November', 'December'];
      $months = collect($monthsLists)->map(
         function ($month) use (&$models) {
            $match = $models->firstWhere('month_name', $month);
            $new = [
               "count"     => $match['count'] ?? 0,
               "amount"    => $match['amount'] ?? 0,
               "month_name" => $month
            ];
            return $new;
         }
      );
      return $months;
   }
}

if (!function_exists('searchInArray')) {

   #----------------------------------------------
   #   iterate through months
   #----------------------------------------------

   function searchInArray(array $datas, $key)
   {
      foreach ($datas as $value) {
         if ($value['symbol'] == $key) {
            return true;
         }
      }
      return false;
   }
}

if (!function_exists('get_commission')) {
   /**
    * return uuid()
    */
   function get_commission($price): float
   {
      $commission = 0;
      $getCharges = settings('order_charges') ?? 1;
      $commission = (($price / 100) * $getCharges);
      return floatval($commission);
   }
}

if (!function_exists('save_order')) {
   /**
    * return uuid()
    */
   function save_order($data)
   {
      $save = Order::create([
         'user_id'         => auth()->id(),
         'order_id'        => $data['id'],
         'from_currency'   => $data['from']['currency'],
         'to_currency'     => $data['to']['currency'],
         'send_amount'     => $data['from']['amount'],
         'receive_amount'  => $data['to']['amount'],
         'receive_address' => $data['to']['address'],
         'order_type'      => $data['type'],
         'order_rate'      => $data['rate'],
         'order_rateRev'   => $data['rateRev'],
         'order_status'    => $data['status'],
         'order_left'      => $data['left'],
         'order_left'      => $data['left'],
         'order_token'     => $data['token'],
         'raw_data'        => json_encode($data),
         'order_reg'       => Carbon::parse($data['reg'])->format('Y-m-d H:i'),
         'order_expiration' => Carbon::parse($data['expiration'])->format('Y-m-d H:i'), // time stamp,
      ]);
      return $save;
   }
}

if (!function_exists('status_code')) {
   /**
    * return meaning of code
    */
   function status_code($code): string
   {
      switch ($code) {
         case '0':
            return "New order.";
            break;
         case '1':
            return "The transaction is waiting for the required number of confirmations.";
            break;
         case '2':
            return "Currency exchange in progress";
            break;
         case '3':
            return "Sending funds";
            break;
         case '4':
            return "Completed";
            break;
         case '5':
            return "Expired";
            break;
         case '6':
            return "Cancelled";
            break;
         case '7':
            return "A decision must be made to proceed with the order, please contact support";
            break;

         default:
            return "Pending";
            break;
      }
   }
}

if (!function_exists('currency_btc')) {
   /*
    * Convert fee to BTC
    * @param string currency
    * @param float-decimal amount
    */
   function currency_btc($currency, $amount)
   {
      // return Carbon::createFromTimeStamp(strtotime($datetime))->diffForHumans();
   }
}

if (!function_exists('blog_url')) {
   /*
    * Convert fee to BTC
    * @param string currency
    * @param float-decimal amount
    */
   function blog_url($slug)
   {
      $url = session()->get('locale') . '/' . config('binshopsblog.blog_prefix', 'blog');
      $final = "$url/$slug";
      return url($final);
   }
}

if (!function_exists('process_binance_withdrawal')) {
   /*
    * Convert fee to BTC
    * @param string currency
    * @param float-decimal amount
    */
   function process_binance_withdrawal($order)
   {
      $getTransaction = Order::where('order_id', $order)->first();
      $data = [
         'coin'      => $getTransaction->to_currency,
         'address'   => $getTransaction->receive_address,
         'amount'    => $getTransaction->receive_amount,
         'withdrawOrderId' => _getTransactionId()
      ];
      $pro = app('binance');
      return $pro->processWithdrawal($data);
   }
}

if (!function_exists('ajaxEchangePrice')) {
   function ajaxEchangePrice($data, $main)
   {
      // var_dump([$data, $main]);
      $req = request(); 
      $main = $main[0];
      // get the USD rate via API
      $rate = cache()->remember('users', 120, function () use (&$req) {
         $endCoin = $req->fromCurrency;
         $rates = json_decode(file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=$endCoin&tsyms=USD"), true);
         if(!empty($rates)) return ($rates['USD'] * $req->fromQty);
      });
      
      // cache(['quoteId_' => 'value'], now()->addMinutes(1));
      if(in_array('quoteId', $data)){
         session()->put('quoteId', $data['quoteId'] ?? '12415572564');
      }

      return [
         'code' => 0,
         'msg' => 'OK',
         'data' => [
            'from' => [
               'currency' => $req->fromCurrency,
               'network' => $req->fromCurrency,
               'coin' => $req->fromCurrency,
               'amount' => $req->fromQty,
               'rate' => $data['ratio'],
               'precision' => 8,
               'min' => $main['fromAssetMinAmount'], //0.00040829,
               'max' => $main['fromAssetMaxAmount'],
               'usd' => $rate,
               'btc' => ($req->fromQty * $data['inverseRatio']),
            ],
            'to' => [
               'currency' => $req->toCurrency,
               'network' => $req->toCurrency,
               'coin' => $req->toCurrency,
               'amount' => $data['toAmount'],
               'rate' => $data['inverseRatio'], //0.07335538,
               'precision' => 8,
               'min' => $main['toAssetMinAmount'],
               'max' => $main['toAssetMaxAmount'],
               'usd' => $data['toAmount'],
            ],
            'error' => 0,
            'status' => [],
         ],
      ];
   }
}
