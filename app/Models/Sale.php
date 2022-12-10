<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    function user(){
        return $this->belongsTo(User::class);
    }

    function bank_sales(){
        return $this->hasMany(BankSale::class);
    }

    function customer(){
        return $this->belongsTo(Customer::class);
    }

    function sale_items(){
        return $this->hasMany(SaleItem::class);
    }
}
