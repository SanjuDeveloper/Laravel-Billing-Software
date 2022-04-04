<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function store(Request $post)
    {
       
        $obj = new Categories;  
        $obj->catetory_name = $post->input('catetory_name');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        $obj->catetory_description = $post->input('catetory_description');
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
      $response = [];
      if(request()->ajax()){
        foreach($categories as $data)
        {
          $response[] = array('id'=>$data->id,'name'=>$data->catetory_name);
        }
        return json_encode($response);  
       //return response()->json(['categories' => $categories], 400);
      }else{        
        return view('category.index', compact('categories'));
      }
    
    }
}
