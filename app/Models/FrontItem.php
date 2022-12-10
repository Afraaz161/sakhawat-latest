<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontItem extends Model
{
    use HasFactory;

    function item(){
        return $this->belongsTo(Item::class);
    }
}
