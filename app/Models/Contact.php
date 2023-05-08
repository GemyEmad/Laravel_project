<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['contact_id','name','email', 'phone', 'message', 'status'];

    protected $casts = [
    'status'=> 'boolean'
    ];

    public function scopeSelection($query)
    {
    return $query->select('id', 'name','email','phone', 'message', 'status');

    }

public function scopeActive($query)
    {
    return $query->where('status',1);

    }

// protected function name(): Attribute
//     {
//         return Attribute::make(
//             get: fn ($value) => ucfirst($value),
//             set: fn ($value) => strtolower($value),
//         );

//     }

}