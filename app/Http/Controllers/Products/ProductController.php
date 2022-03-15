<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function store(Request $req)
    {
       $code= $req->input('product_code');
       $name= $req->input('product_name');
       $ccategory= $req->input('category');
       $price= $req->input('product_price');
       $sellingPrice= $req->input('selling_price');
       $Quentity= $req->input('total_product');
       $description= $req->input('product_description');
       
    }
}
