<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',
        'status',
        'payment_method',
        'product_ids',
        'total_price',
        'amount',
        // 'cart_id',

    ];
    function user()
    {
        return $this->belongsTo(User::class);
    }

    // function products()
    // {
    //     return $this->hasMany(User::class);
    // }

}
