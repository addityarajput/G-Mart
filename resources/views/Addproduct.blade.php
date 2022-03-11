@extends('layouts.adminMaster')
@section('admin')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input type="text" class="form-control" id="productName" aria-describedby="productName" placeholder="Enter Product Name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Product Id</label>
    <input type="text" class="form-control" id="productid" placeholder="Enter Product Id">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Product Price</label>
    <input type="text" class="form-control" id="productPrice" placeholder="Enter Price of the product">
  </div>
  
  <div class="form-group">
            <label for="exampleInputPassword1">Product Image</label>
            <input type="file" class="form-control"  name="Image">
        </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection