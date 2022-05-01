<?php

namespace App\Http\Controllers\orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TempOrder;
use App\Models\Products;
use App\Models\Sale;

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
    
    $getAlltempOrders = TempOrder::join('products', 'temp_orders.productCode', '=', 'products.product_code')
                                   ->get(['temp_orders.*', 'products.product_name']);
    return response()->json($getAlltempOrders);
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

  /**
  * Update Status of Orders.
  *
  * @param  \App\Models\TempOrder  $req
  * @return \Illuminate\Http\Response
  */
  public function PrintBill(Request $post)
  {
    $status='Filed';
    $order_items = TempOrder::where('billNumber', $post->input('billNumber'))->get()->toArray();
    foreach ($order_items as $item) 
    {
      $productCode['productCode'][] = $item['productCode'];
      $productDisco['productDisco'][] = $item['productDisco'];
      $productQuty['productQuty'][]  = $item['productQuty'];
      $productPrice['productPrice'][] = $item['productPrice'];
      $productGrand['productGrand'][] = $item['productGrand'];
    }  

    $billNumber =  $order_items[0]['billNumber'];
    $billDate   = $order_items[0]['billDate'];
    $customerCode   = $order_items[0]['customerCode'];
    $storeOrder =  Sale::insert([
      'productCode'  => json_encode($productCode),
      'billNumber'   => $billNumber,
      'customerCode' => $customerCode,
      'productDisco' => json_encode($productDisco),
      'productQuty'  => json_encode($productQuty),
      'productPrice' => json_encode($productPrice),
      'billDate'     => $billDate,
      'productGrand' => json_encode($productGrand),
      'NetPayble'    => $post->input('NetPayble'),
      'Gst'          => $post->input('Gst'),
    ]);

   if($storeOrder){

     self::DeleteTempOrder();
     return redirect('billprint/'.$billNumber);

   }else{
    return Redirect::back()->withErrors(['msg' => 'Somthing Wen wrong Please try againg !']);
   }
   
  }

  public function Print($billNumber)
  {
    $orders = Sale::all();
    return view('billGenerat.print', compact('orders'));
  }
}
