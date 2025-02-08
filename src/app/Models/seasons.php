<?php

// app/Models/Season.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    // 多対多リレーション
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_season');
    }
}
