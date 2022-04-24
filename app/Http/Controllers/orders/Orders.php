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
     
      $productCode  = $req->input('productCode');
      $billNumber   = $req->input('billNumber');
      $customerCode = $req->input('customerCode');
      $productDisco = $req->input('productDisco');
      $productQuty  = $req->input('productQuty');
      $productPrice = $req->input('productPrice');
      $productGrand = $req->input('productGrand');
      $billDate     = $req->input('billDate');

      $getOrder = TempOrder::where('billNumber', $billNumber)
                            ->orWhere('productCode', $productCode)
                            ->orWhere('customerCode', $customerCode)
                            ->orWhere('billDate', $billDate)
                            ->first();
      
     
      if(!$getOrder){ 
        $obj = new TempOrder; 
        $obj->productCode  = $productCode;
        $obj->billNumber   = $billNumber;
        $obj->customerCode = $customerCode;
        $obj->productDisco = $productDisco;
        $obj->productQuty  = $productQuty;
        $obj->productPrice = $productPrice;
        $obj->productGrand = $productGrand;
        $obj->billDate     = $billDate;
        $obj->save();

      }else{ 
        $newQty   = $getOrder->productQuty;
        $newTotal = $getOrder->$productGrand;
        $obj = TempOrder::find($getOrder->id); 
        $obj->productQuty  = ($productQuty+$newQty);
        $obj->productGrand = ($productGrand+$newTotal);
        $obj->update();
      }  
         
      $response = array(
              'insertId'=>$obj->id,
              'status'=>'Success'
      );  
    }
}
