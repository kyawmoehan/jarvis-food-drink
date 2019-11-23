@extends('layouts.admintemplate')
@section('content')
<div class="container my-5"> 
    <div class="row">
        <div class="col-md-8 offset-md-3">
            <h2>Menu Edit Form</h2>
           <form  method="post" action="{{route('menu.update',$menu->id)}}" enctype="multipart/form-data">
               @csrf
               @method('PUT')
               <div class="form-group">
                   <label for="name">Name:</label>
                   <input type="text" name="name" class="form-control" value="{{$menu->name}}">
               </div>
                <div class="form-group">
                   <label for="price">Price:</label>
                   <input type="number" name="price" class="form-control" value="{{$menu->price}}">
               </div>
                <div class="form-group">
                   <label>Image:</label>
                   <input type="file" name="image" class="form-control-file">
                   <img src="{{asset($menu->image)}}" class="img-fluid" alt="">
                   <input type="hidden" name="oldimg" value="{{$menu->image}}">
               </div>
               <div class="form-group">
                   <label>Category:</label>
                   <select name="category" class="form-control">
                       <option value="" disabled="">
                           Choose Category
                       </option>
                       @foreach($categories as $row)
                       <option value="{{$row->id}}"
                       @if($menu->category_id == $row->id)
                       {{'selected'}}
                       @endif>{{$row->name}}
                       </option>
                       @endforeach
                   </select>
               </div>
                <div class="form-group">
                   <input type="submit" name="submit" class="btn btn-primary" value="Update">
               </div>
           </form> 
        </div>
    </div>
</div>
@endsection