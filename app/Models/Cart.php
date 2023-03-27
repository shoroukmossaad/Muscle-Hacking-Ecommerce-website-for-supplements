<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'amount',
        'product_id',
        'isCheckedOut',

    ];
    function product(){
        return $this->belongsTo(Product::class);
    }
    function user(){
        return $this->belongsTo(User::class);
    }

}
