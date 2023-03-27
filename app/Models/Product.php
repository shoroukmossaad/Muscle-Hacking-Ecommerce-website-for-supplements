<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
use App\Models\Cart;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'price',
        'amount',
        'image',
        'discount',
        'category_id',
        'user_id',

    ];
function user(){
    return $this->belongsTo(User::class);
}

function category(){
    return $this->belongsTo(Category::class);
}
function cart(){
    return $this->hasOne(Cart::class);
}
}
