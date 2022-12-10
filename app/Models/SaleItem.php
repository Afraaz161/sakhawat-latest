<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleItem extends Model
{
    use HasFactory;

    function sale(){
        return $this->belongsTo(Sale::class);
    }

    function brand(){
        return $this->belongsTo(Brand::class);
    }
}
