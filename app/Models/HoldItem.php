<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoldItem extends Model
{
    use HasFactory;
    
    function hold(){
        return $this->belongsTo(Hold::class);
    }

    function item(){
        return $this->belongsTo(Item::class);
    }


}
