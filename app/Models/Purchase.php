<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'current_date', 'payment_method', 'type', 'e_name', 'u_name', 'price', 'quantity', 'total', 'purchase_rate', 'sale_rate', 'vendor_previous_due', 'total_bill', 'payable', 'payment',
    ];

    function customer(){
        return $this->belongsTo(Customer::class);
    }

    function purchase_item(){
        return $this->hasMany(PurchaseItem::class);
    }
}
