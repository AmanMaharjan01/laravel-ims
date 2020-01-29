@extends('layout')

@section('content')

<br>
<div class="container">
  <a href="/student/add" role="button" class="btn btn-primary" style="float: right;">Add students</a><br>
  <br>          
  <table class="table table-striped">
      <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Contact No</th>
        <th >Actions</th>
      </tr> 
    @foreach($students as $student)   
      <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->address}}</td>
        <td>{{$student->contact}}</td>
        <td><a href="/students/{{$student->id}}/edit" role="button" class="btn btn-info">Edit</a>  <a href="/students/delete/{{$student->id}}/" role="button" class="btn btn-danger">delete</a></td>
      </tr>  
     @endforeach   
  </table>
  {{ $students->links() }}
</div>

@endsection