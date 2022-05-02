<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'orderId',
        'productCode',
        'productName',
        'productDisco',
        'productQuty',
        'productPrice',
        'productGrand',
        'timestamp',       
    ];
}
