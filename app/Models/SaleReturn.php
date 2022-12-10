<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleReturn extends Model
{
    use HasFactory;

    function user(){
        return $this->belongsTo(User::class);
    }

    function customer(){
        return $this->belongsTo(Customer::class);
    }

    function sale_return_items(){
        return $this->hasMany(SaleReturnItem::class);
    }
}
