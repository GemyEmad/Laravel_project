<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branche extends Model
{
    use HasFactory;
     protected $fillable = [
        'branche_id',
        'Address',
        'Phone',
        'Email',
        'admin_id',
    ];

    public function admin()
    {
    return $this->hasMany(admin::class);
    }
}