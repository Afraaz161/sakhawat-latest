<?php

namespace App\Models;

use App\FrontItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'e_name', 'u_name', 'category_id', 'manufacture_id', 'company_rate', 'buy_price', 'sell_price', 'opening_stock',
    ];

    function category(){
        return $this->belongsTo(Category::class);
    }

    function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    function manufacture(){
        return $this->belongsTo(Manufacture::class);
    }

    function brand(){
        return $this->belongsTo(Brand::class);
    }

    function front_item(){
        return $this->hasMany(FrontItem::class);
    }
}
