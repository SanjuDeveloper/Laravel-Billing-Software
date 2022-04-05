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
       $products = Products::join('categories', 'products.category', '=', 'categories.id')
               ->get(['products.*', 'categories.catetory_name']);
        
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

     /**
     * get all categories
     *
     * * Returns categories
     */
    public function get()
    {
        $categories = Categories::all();
        return view('products.add', compact('categories'));
    }

      /**
     * get all products by id
     *
     * * Returns a product
     */
    public function edit($id)
    {
        $product = Products::join('categories', 'products.category', '=', 'categories.id')
               ->get(['products.*', 'categories.*'])->find($id);
        
       // $product = Products::find($id);
        return view('products.edit', compact('product'));

    }

     /**
     * update the products.
     *
     * @return \Illuminate\View\View
     */
    public function update(Request $req)
    {
        $productId = $req->input('productId');
        $obj = Products::find($productId);  
        $obj->product_code= $req->input('product_code');
        $obj->product_name= $req->input('product_name');
        $obj->category= $req->input('category');
        $obj->product_price= $req->input('unit_price');
        $obj->selling_price= $req->input('selling_price');
        $obj->total_product= $req->input('quantity');
        $obj->product_description= $req->input('product_description');
        $obj->update();
        $getAllProducts = Products::all();
        $response = array(
               'insertId'=>$obj->id,
               'status'=>'Success',
               'products' =>$getAllProducts
       );  

         return json_encode($response);   
    }
} 
