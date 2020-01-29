@extends('layout')

@section('content')

<br>
 <CENTER><h1><b>EDIT</b><h1></CENTER><br>
 <div class="row">
 <div class="col-md-3">
   
 </div>
 <div class="col-md-6">
 <form method="post" action="/students/{{$student->id}}">
  @csrf

  @method('PUT')
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{$student->name}}">
  </div>
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" class="form-control" placeholder="Enter address" name="address" value="{{$student->address}}" required>
  </div>
   <div class="form-group">
    <label for="contact">Contact No:</label>
    <input type="text" class="form-control" placeholder="Enter contact" name="contact" value="{{$student->contact}}" required>
  </div>
  <button type="submit" class="btn btn-primary">update</button>
 </form> 
 </div>
 <div class="col-md-3">
  
 </div>
</div>

@endsection