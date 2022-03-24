<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;

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

    public function get()
    {
        $categories = Categories::all();
        return view('products.add', compact('categories'));
    }
} 
