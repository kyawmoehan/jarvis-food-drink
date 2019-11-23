@extends('layouts.admintemplate')
@section('content')
<div class="container">
    <div class="col-lg-8 offset-lg-2 my-4">
        <h1 class="d-inline-block text-center">Categories</h1>
        <form action="{{route('category.create')}}" method="GET" class="d-inline-block float-right">
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-info" value="Add New">
            </div>
        </form>
    </div>
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
    <table class="table col-lg-8 offset-lg-2">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>
                <a class="btn btn-info" href="{{route('category.edit',$category->id)}}">Edit</a>
                <form action="{{route('category.destroy',$category->id)}}" method="POST" class="d-inline-block" onsubmit="return ConfirmDelete()">
                    @csrf
                    @method('DELETE')
                    <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
 <script>
     function ConfirmDelete(){
        var x = confirm("Are you sure");
        if (x) 
            return true;
            else
                return false;
     }
 </script>

@endsection