<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoinWallet extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "coin_wallet_id";
    protected $guarded = [];
}
