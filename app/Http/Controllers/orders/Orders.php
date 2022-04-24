<?php

namespace App\Http\Controllers\orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TempOrder;

class Orders extends Controller
{
   /**
     * Save the products
     *
     * * Returns product Id
     */
    public function AddTempOrder(Request $req)
    {
        $obj = new TempOrder;  
        $obj->productCode= $req->input('productCode');
        $obj->billNumber= $req->input('billNumber');
        $obj->customerCode= $req->input('customerCode');
        $obj->productDisco= $req->input('productDisco');
        $obj->productQuty= $req->input('productQuty');
        $obj->productPrice= $req->input('productPrice');
        $obj->productGrand= $req->input('productGrand');
        $obj->billDate= $req->input('billDate');
        $obj->save();
        $response = array(
               'insertId'=>$obj->id,
               'status'=>'Success'
       );  

    }
}
