@extends('header')
@section('Section') 

<style>
  span.eye{
		  position: absolute;
		  right:-16px;
		  display: flex;
		  align-items: center;
		  margin-top:5px;
		}
		
</style>
		
    <div class="container-fluid" style="height:780px;padding:0 10%;overflow:auto;border-bottom:2px solid red;">
        <form id="addcat" class="form">			
            <h3 style="text-shadow: 1px 1px 2px black,0 0 0.2em darkblue;color:#DC3545;font-size: 30px;"class="text-center"><u>Add Category</u></h3>
            <hr class="hr">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" class="form-control" name ="catetory_name">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Category Description</label>
                        <textarea rows="4" class="form-control" name="catetory_description"placeholder="Enter Product's Description"></textarea>
                    </div>
                </div>
            </div>		    
            
            <div class="row">
                <div class="col-sm-6 d-flex justify-content-center mx-auto">                    
                    <input type="submit" name="submit" class="btn btn-success btn-md" value="SUBMIT">
                </div>                    
            </div>	
        </form>	
    </div>
@endsection