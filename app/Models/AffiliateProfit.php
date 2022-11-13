<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AffiliateProfit extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id', 'user_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
