<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankSale extends Model
{
    use HasFactory;
    protected $fillable = [
        'bank_id',
        'sale_id'
    ];

    function bank(){
        return $this->belongsTo(Bank::class);
    }

    function sale(){
        return $this->belongsTo(Sale::class);
    }
}
