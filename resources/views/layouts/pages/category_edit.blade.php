@extends('layouts.admintemplate')
@section('content')
<div class="container my-5">
    <div class="row">
       <div class="col-lg-10 offset-lg-1">
           <form action="{{route('category.update',$category->id)}}" method="POST" class="my-3">
        @csrf
        @method('PUT')
        <div class="form-group">
                <label for="name">Update Category</label>
                <input type="text" name="name" class="form-control
                @error('name')
                    @if($message)
                        {{"border border-danger"}}
                    @endif
                @enderror
                " value="{{$category->name}}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>
        <input type="submit" name="submit"  class="btn btn-primary" value="Update">
    </form>
       </div>        
    </div>
</div>
@endsection