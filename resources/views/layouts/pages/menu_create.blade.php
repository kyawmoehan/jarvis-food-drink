@extends('layouts.admintemplate')
@section('content')
<div class="container my-5"> 
    <div class="row">
        <div class="col-md-8 offset-md-3">
            <h2>Menu Create Form</h2>
           <form  method="post" action="{{route('menu.store')}}" enctype="multipart/form-data">
               @csrf
               <div class="form-group">
                   <label for="name">Name:</label>
                   <input type="text" name="name" class="form-control  @error('name')
                    @if($message)
                        {{"border border-danger"}}
                    @endif
                @enderror
                "value="{{old('name')}}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

               </div>
                <div class="form-group">
                   <label for="price">Price:</label>
                   <input type="number" name="price" class="form-control  
                   @error('price')
                    @if($message)
                        {{"border border-danger"}}
                    @endif
                @enderror
                "value="{{old('price')}}">
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
               </div>
                <div class="form-group">
                   <label>Image:</label>
                   <input type="file" name="image" class="form-control-file  @error('image')
                    @if($message)
                        {{"border border-danger"}}
                    @endif
                @enderror
                "value="{{old('image')}}">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
               </div>
               <div class="form-group">
                   <label>Category:</label>
                   <select name="category" class="form-control">
                       <option value="" disabled="">
                           Choose Category
                       </option>
                       @foreach($categories as $row)
                       <option value="{{$row->id}}">{{$row->name}}</option>
                       @endforeach
                   </select>
               </div>
                <div class="form-group">
                   <input type="submit" name="submit" class="btn btn-primary" value="Save">
               </div>
           </form> 
        </div>
    </div>
</div>
@endsection