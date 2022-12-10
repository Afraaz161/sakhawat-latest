<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Subcategory extends Model
{
    function category(){
        return $this->belongsTo(Category::class);
    }

    function item(){
        return $this->hasMany(Item::class);
    }
}
