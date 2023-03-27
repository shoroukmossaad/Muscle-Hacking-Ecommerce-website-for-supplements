<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'isInCart',

    ];
    function products()
    {
        return $this->hasMany(Product::class);
    }
    function user()
    {
        return $this->belongsTo(User::class);
    }
}
