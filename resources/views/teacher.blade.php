@extends('layout')

@section('content')

<br>
<div class="container">
  <a href="/teacher/add" role="button" class="btn btn-primary" style="float: right;">Add teachers</a><br>
  <br>          
  <table class="table table-striped">
      <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Contact No</th>
        <th>Subject</th>
        <th >Actions</th>
      </tr> 
    @foreach($teachers as $teacher)   
      <tr>
        <td>{{$teacher->name}}</td>
        <td>{{$teacher->address}}</td>
        <td>{{$teacher->contact}}</td>
        <td>{{$teacher->subject}}</td>
        <td><a href="/teachers/{{$teacher->id}}/edit" role="button" class="btn btn-info">Edit</a>  <a href="/teachers/delete/{{$teacher->id}}/" role="button" class="btn btn-danger">delete</a></td>
      </tr>  
     @endforeach   
  </table>
  {{ $teachers->links() }}
</div>

@endsection