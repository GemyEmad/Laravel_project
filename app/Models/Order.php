<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'user_id',
        'item_id',
        'delivery_id',
        'Quantity',
        'orderdate',
        'admin_id',
    ];

    public function user()
    {
    return $this->hasMany(user::class);
    }

    public function delivery()
    {
    return $this->hasMany(delivery::class);
    }
     public function admin()
    {
    return $this->hasMany(admin::class);
    }
   
}
