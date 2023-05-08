<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
     protected $fillable = [
        'delivery_id',
        'Name',
        'phone',
        'DeliveryStauts',
        'Address',
    ];

    public function orders()
    {
    return $this->belongsTo(order::class);
    }
}