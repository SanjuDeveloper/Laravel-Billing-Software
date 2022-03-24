<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('products.index', compact('products'));
    }

    public function store(Request $req)
    {
        $obj = new Products;  
        $obj->product_code= $req->input('product_code');
        $obj->product_name= $req->input('product_name');
        $obj->category= $req->input('category');
        $obj->product_price= $req->input('product_price');
        $obj->selling_price= $req->input('selling_price');
        $obj->total_product= $req->input('total_product');
        $obj->product_description= $req->input('product_description');
        $obj->save();
        $response = array(
               'insertId'=>$obj->id,
               'status'=>'Success'
       );  

         return json_encode($response);    
       
    }

    public function get()
    {
        $categories = Categories::all();
        return view('products.add', compact('categories'));
    }
} 
