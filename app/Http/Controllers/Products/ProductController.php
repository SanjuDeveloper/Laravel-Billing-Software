<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;

class ProductController extends Controller
{
      /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $products = Products::all();
        return view('products.index', compact('products'));
    }

    /**
     * Save the products
     *
     * * Returns product Id
     */
    public function store(Request $req)
    {
        if(($req->input('category_new'))   && ($req->input('category_new') <> "") && ($req->input('category')== "") ){
            $category = new Categories;  
            $category->catetory_name = $req->input('category_new');
            $category->save();
            $categoryId=$category->id;
        }else{
            $categoryId=$req->input('category');
        }

        $obj = new Products;  
        $obj->product_code= $req->input('product_code');
        $obj->product_name= $req->input('product_name');
        $obj->category= $categoryId;
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
