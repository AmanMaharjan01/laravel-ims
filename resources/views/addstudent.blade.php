@extends('layout')

@section('content')

<br>
 <div class="row">

 <div class="col-md-3">
   
 </div>
 <div class="col-md-6">
 <form method="post" action="/students" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{old('name')}}">
  </div>
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" class="form-control" placeholder="Enter address" name="address" value="{{old('address')}}">
  </div>
   <div class="form-group">
    <label for="contact">Contact No:</label>
    <input type="text" class="form-control" placeholder="Enter contact" name="contact" value="{{old('contact')}}">
  </div>
  <div class="form-group">
    <label for="file">Profile:</label>
    <input type="file" class="form-control" name="pic">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Add</button>
 </form> 
 </div>
 <div class="col-md-3">
  
 </div>
</div>

@endsection