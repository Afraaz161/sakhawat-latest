<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Subcategory as ModelsSubcategory;
use App\Models\Item as ModelsItem;
use App\Models\FronCategory as ModelsFrontCategory;

class Category extends Model
{
    function items(){
        return $this->hasMany(ModelsItem::class);
    }

    function subcategory(){
        return $this->hasMany(ModelsSubcategory::class);
    }

    function front_category(){
        return $this->hasMany(ModelsFrontCategory::class);
    }
}
