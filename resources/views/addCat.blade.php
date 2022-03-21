@extends('layouts.adminMaster')
@section('cat')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<form>
    <div class="form-group">
      <label for="exampleInputEmail1">CategoryName</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">CategoryId</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection
