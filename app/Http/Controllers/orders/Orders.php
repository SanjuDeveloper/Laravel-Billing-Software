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
                          ->Where('productCode', $productCode)
                          ->Where('customerCode', $customerCode)
                          ->Where('billDate', $billDate)
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
      $newTotal = $getOrder->productGrand;
      $updatedQty = ($productQuty+$newQty);
      $updatedGrand = ($productGrand+$newTotal);
      $obj = TempOrder::find($getOrder->id); 
      $obj->productQuty  = $updatedQty;
      $obj->productGrand = $updatedGrand;
      $obj->update();     
    } 
    
    $tempOrders = TempOrder::all();
      
    return response()->json($tempOrders);
  }

  /**
   * Delete all tempOrders
   *
   * * Returns product Id
  */
  public function DeleteTempOrder()
  {
    TempOrder::truncate();
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Models\TempOrder  $req
  * @return \Illuminate\Http\Response
  */
  public function DeleteTempOrderById(Request $req)
  {
    if(TempOrder::destroy($req->input('ids'))){
      return 'Success';
    }else{
      return 'Failed';
    }

  }
}
