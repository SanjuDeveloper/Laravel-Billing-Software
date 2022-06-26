<?php

namespace App\Http\Controllers\orders;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\TempOrder;
use App\Models\Products;
use App\Models\Sale;
use App\Models\OrderItem;
use App\Models\customers;

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
    $productName  = $req->input('productName');
    $billNumber   = $req->input('billNumber');
    $customerCode = $req->input('customerCode');
    $customerName = $req->input('customerName');
    $productDisco = $req->input('productDisco');
    $productQuty  = $req->input('productQuty');
    $productPrice = $req->input('productPrice');
    $productGrand = $req->input('productGrand');
    $billDate     = $req->input('billDate');

    if($productName==''){
      $productName = $req->input('select');
    }else{
      $productName =$productName;
    }
    $getOrder = TempOrder::where('billNumber', $billNumber)
                          ->Where('productCode', $productCode)
                          ->Where('customerCode', $customerCode)
                          ->Where('billDate', $billDate)
                          ->first();   
    if(!$getOrder){ 
      $obj = new TempOrder; 
      $obj->productCode  = $productCode;
      $obj->productName  = $productName;
      $obj->billNumber   = $billNumber;
      $obj->customerCode = $customerCode; 
      $obj->customerName = $customerName; 
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
      $obj =  new Sale;    
      $billNumber = $post->input('billNumber');
      $obj->billNumber   = $billNumber;
      $obj->customerCode = $post->input('customerCode');
      $obj->customerName = $post->input('cust_name');
      $obj->billDate     = $post->input('bill_date');
      $obj->netPayable    = $post->input('NetPayble');
      $obj->Gst          = $post->input('Gst');
      $obj->discount     = $post->input('totDiscount'); 
      $obj->save();
      $insertId = $obj->id;
    $order_items = TempOrder::where('billNumber', $billNumber)->get()->toArray();
    
    foreach ($order_items as $item) 
    {
      $object = new OrderItem;
      
      $object->orderId       = $insertId;
      $object->billNumber    = $billNumber;
      $object->productCode   = $item['productCode'];
      $object->productName   = $item['productName'];
      $object->productDisco  = $item['productDisco'];
      $object->productQuty   = $item['productQuty'];
      $object->productPrice  = $item['productPrice'];
      $object->productGrand  = $item['productGrand'];
      $object->timestamp     = $post->input('bill_date');
      $object->save();
      $status='Success';  
      $productQty = Products::where('product_code', $item['productCode'])->first(); 
      $updates = array(
        'total_product'=> ($productQty->total_product)-($item['productQuty']),
      );
      
      $QtyUpdate = Products::where('product_code', $item['productCode'])->update($updates); 
     
    }     

    if($status=='Success'){

      self::DeleteTempOrder();
      return redirect('billprint/'.$billNumber);
    }else{
       return Redirect::back()->withErrors(['msg' => 'Somthing Wen wrong Please try againg !']);
    }
   
  }

  public function Print($billNumber)
  {
    //$orders = Sale::all(); 
    $getOrderDetails = Sale::join('customers', 'sales.customerCode', '=', 'customers.customer_code')
                              ->where('sales.billNumber', $billNumber)
                              ->get(['sales.*', 'customers.*']); 
    $getSales = OrderItem::where('billNumber', $billNumber)->get()->toArray();
    return view('billGenerat.print', compact('getOrderDetails','getSales'));
  }

  public function GetMaxBillNuber()
  {
    //$price = Sale::max('billNumber');
    $MaxbillNumber = Sale::orderBy('id', 'DESC')->skip(0)->take(1)->get('billNumber');
    return $MaxbillNumber[0]['billNumber']+1;
  }

}
