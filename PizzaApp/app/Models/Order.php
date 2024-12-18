<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['total_amount', 'total_cost', 'total_profit', 'status'];

    public function pizzas()
    {
        return $this->belongsToMany(Pizza::class);
    }
}
