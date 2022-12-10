<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    function customer(){
        return $this->belongsTo(Customer::class);
    }
}
