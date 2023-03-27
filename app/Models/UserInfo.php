<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'street',
        'district',
        'city',
        'Country',
        'address',
        'user_id',

    ];
    function user(){
        return $this->belongsTo(User::class);
    }
}
