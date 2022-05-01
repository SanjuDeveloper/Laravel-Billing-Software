<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'productCode',
        'billNumber', 
        'customerCode',
        'productDisco',
        'productQuty',
        'productPrice',
        'billDate',
        'productGrand', 
        'status', 
        'NetPayble',
        'Gst',     
    ];
}
