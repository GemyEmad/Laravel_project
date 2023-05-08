<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{

    use HasApiTokens, HasFactory,Notifiable;

    protected $guard = 'admin';

     protected $fillable = [
        'admin_id',
        'Username',
        'Password',
    ];

    public function items()
    {
    return $this->belongsTo(item::class);
    }

    public function orders()
    {
    return $this->belongsTo(order::class);
    }

    public function branches()
    {
    return $this->belongsTo(branche::class);
    }
}