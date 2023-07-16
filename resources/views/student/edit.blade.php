@extends('template.layout')
@section('content')
<form action="{{route('route_student_edit',['id'=>$student->id])}}" method="POST">
    @csrf
    <div class="mb-3">
      <label  class="form-label"></label>
      <input type="email" class="form-control" value="{{$student->email}}" name="email">
    
    </div>
    <div class="mb-3">
        <label  class="form-label">name</label>
        <input type="name" class="form-control" value="{{$student->name}}" name="name">
      
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection