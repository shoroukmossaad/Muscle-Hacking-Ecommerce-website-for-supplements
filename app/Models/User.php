<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Product;
use App\Models\Order;
use App\Models\Cart;
use App\Models\UserInfo;
use App\Models\Wishlist;
use Request;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'phone',
        'gender',
        'role',
        'remember_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function products()
    {
        return $this->hasMany(Product::class);
    }

    function orders()
    {
        return $this->hasMany(Order::class);
    }
    function cart()
    {
        return $this->hasOne(Cart::class);
    }

    function wishlist()
    {
        return $this->hasOne(Wishlist::class);
    }
    function user_info()
    {
        return $this->hasOne(UserInfo::class);
    }

    //admin dashboard starts here




}
