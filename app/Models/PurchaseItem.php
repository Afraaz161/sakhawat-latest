<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseItem extends Model
{
    use HasFactory;

    function purchase(){
        return $this->belongsTo(Purchase::class);
    }

    function brand(){
        return $this->belongsTo(Brand::class);
    }
}
