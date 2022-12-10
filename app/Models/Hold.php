<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hold extends Model
{
    use HasFactory;

    function customer(){
        return $this->belongsTo(Customer::class);
    }

    function item(){
        return $this->belongsTo(Item::class);
    }

    function user(){
        return $this->belongsTo(User::class);
    }

    function hold_item(){
        return $this->hasMany(HoldItem::class);
    }
}
