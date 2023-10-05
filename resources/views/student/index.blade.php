{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$name}}</title>
</head>
<body> --}}
    @extends('template.layout')
    @section('content')
    <h1>hello</h1>
    <h2>{{$name}}</h2>
    <p>{{$title}}</p>
    <form action="{{url('/student')}}" method="post">
        @csrf
        <label for="">
           email
            <input type="text" name="email">
        </label>
        {{-- <input type="text" name="seach"> --}}
        <input type="submit" name="btnseach" value="tìm kiếm">
    </form>
    <table border="1">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>image</td>
        </tr>
            @foreach ($students as $item)
                <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td><img src="{{ $item->image?''.Storage::url($item->image):''}}" style="width: 100px" /></td>
                <td><a href="{{route('route_student_delete',['id'=>$item->id])}}">Xóa</a></td>
                </tr>  
                
            @endforeach
            
          
    </table>
    @endsection