@extends('layouts.adminMaster')
@section('admin')

    <form action="{{ route('site.settings.update') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Site Name</label>
            <input type="text" class="form-control" ia-describedby="emailHelp" name="site_setting" value="{{ isset($site) ? $site->site_name : '' }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Phone</label>
            <input type="text" class="form-control"  name="phone" value="{{ isset($site) ? $site->phone : '' }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mobile</label>
            <input type="text" class="form-control"  name="mobile" value="{{ isset($site) ? $site->mobile : '' }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Slogan</label>
            <input type="text" class="form-control"  name="slogan" value="{{ isset($site) ? $site->slogan : '' }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Facebook</label>
            <input type="text" class="form-control"  name="facebook" value="{{ isset($site) ? $site->facebook : '' }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Instagram</label>
            <input type="text" class="form-control"  name="instagram" value="{{ isset($site) ? $site->instagram : '' }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Linkedin</label>
            <input type="text" class="form-control"  name="linkedin" value="{{ isset($site) ? $site->linkedin : '' }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Copyright</label>
            <input type="text" class="form-control"  name="copyright" value="{{ isset($site) ? $site->copyright : '' }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Logo</label>
            <input type="file" class="form-control"  name="logo">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



@endsection

