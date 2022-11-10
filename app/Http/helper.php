<?php

use App\Models\Admin\Settings;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use KuCoin\SDK\KuCoinApi;

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
      return currency().number_format($amount,2);
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

if (!function_exists('settings')) {
   function settings($key)
   {
      if ($key == 'website_title') {
         return 'sneat';
      }
      
      $result = Settings::where('key', $key)->first();
      if(!empty($result) && count($result) > 0) :
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
