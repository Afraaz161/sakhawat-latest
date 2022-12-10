<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    function receipt(){
        return $this->hasMany(Receipt::class);
    }

    function purchase(){
        return $this->hasMany(Purchase::class);
    }

    function sales(){
        return $this->hasMany(Sale::class);
    }
    
}
