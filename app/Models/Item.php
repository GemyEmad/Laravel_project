<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
     protected $fillable = [
        'item_id',
        'Name',
        'price',
        'category_id',
        'admin_id',
    ];
    public function admin()
    {
    return $this->hasMany(admin::class);
    }

    public function category()
    {
    return $this->hasMany(category::class);
    }

    public function user()
    {
    return $this->hasMany(user::class);
    }

}
