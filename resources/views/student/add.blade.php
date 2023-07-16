@extends('template.layout')
@section('content')
<form action="{{route('route_student_add')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label  class="form-label">Email address</label>
      <input type="email" class="form-control" name="email">
    
    </div>
    <div class="mb-3">
        <label  class="form-label">name</label>
        <input type="name" class="form-control" name="name">
      
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection