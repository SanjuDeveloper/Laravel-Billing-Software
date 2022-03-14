<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Usermodel;

class UserController extends Controller
{
    //

    public function adminLogin(Request $req)
    {
      
      $user = usermodel::where("name",$req->input('name'))->first();
      if(!$user || !Hash::check($req->password,$user->password)){
        $response = array(
           'Login'=>'Failed'
        );
      }else{
        $response = array(
          'Login'=>'Success'
        );
        $req->session()->put('user',$req->input('name'));
      }
      return json_encode($response);
     
    }

    public function adminSignup(Request $post)
    {
        $obj = new Usermodel;        
        $obj->name=$post->input('name');
        $obj->email=$post->input('email');
        $obj->phone=$post->input('phone');
        $obj->password=Hash::make($post->input('password'));        
        $post->session()->put('user',$post->input('name'));
        $obj->save();
        $response = array(
				'insertId'=>$obj->id,
				'status'=>'Success'
            );
           
		return json_encode($response);        
    }
}
