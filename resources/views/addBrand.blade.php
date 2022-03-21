@extends('layouts.adminMaster')
@section('brand')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<form>
    <div class="form-group">
      <label for="exampleInputEmail1">BrandName</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">BrandSlogan</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Brand Slogan">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"> BrandLogo</label>
        <input type="file" class="form-control"  name="logo">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection
