<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleCart extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'user_id',
        'name',
        'price',
        'quantity',
        'total',
    ];
}
