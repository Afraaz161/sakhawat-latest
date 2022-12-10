<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    function items(){
        return $this->hasMany(Item::class);
    }
}
