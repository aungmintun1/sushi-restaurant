<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    use HasFactory;

    public function food_items()
    {
        return $this->hasMany(FoodItem::class, 'category_id');
    }
}
