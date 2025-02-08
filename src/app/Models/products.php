<?php

// app/Models/Product.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // 多対多リレーション
    public function seasons()
    {
        return $this->belongsToMany(Season::class, 'product_season');
    }
}

