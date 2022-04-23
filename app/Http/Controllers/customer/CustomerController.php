<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customers;

class CustomerController extends Controller
{
   public function store(Request $req)
   {
      $customer = customers::where('phone_no', $req->input('phone_no'))->first();
      if(!$customer){
         $obj = new customers;
         $obj->customer_code = $req->input('customer_code');
         $obj->customer_name = $req->input('customer_name');
         $obj->phone_no = $req->input('phone_no');
         $obj->email = $req->input('email');
         $obj->address = $req->input('address');
         $obj->save();
         $response = array(
            'insertId'=>$obj->id,
            'status'=>'Success'
         ); 
      }else{
         $response = array(
            'status'=>'Phone number is Already Exist'
         ); 
      }
     return json_encode($response);  
   }

   public function get()
   {
        $customers = customers::all();
        return view('customer.index', compact('customers'));
   }

   public function getByname($value)
   {
      $customer = customers::where('customer_name', $value)->get();
      return response()->json($customer);
   }
}
