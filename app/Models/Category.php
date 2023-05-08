<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
     protected $fillable = [
        'category_id',
        'Categoryname',
    ];
    public function items()
    {
    return $this->belongsTo(item::class);
    }
}