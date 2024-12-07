<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'purchase_price'];

    public function pizzas()
    {
        return $this->belongsToMany(Pizza::class);
    }
}

