@extends('layouts.admintemplate')
@section('content')
<div class="container my-5"> 
    <div class="row">
        <div class="col-md-8 offset-md-3">
            <h2>Best Offer Create Form</h2>
           <form  method="post" action="{{route('bestoffer.store')}}" enctype="multipart/form-data">
               @csrf
               <div class="form-group">
                   <label for="name">Title:</label>
                   <input type="text" name="title" class="form-control @error('title')
                    @if($message)
                        {{"border border-danger"}}
                    @endif
                @enderror
                "value="{{old('title')}}">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
               </div>
                <div class="form-group">
                   <label>Variety:</label>
                   <input type="text" name="variety" class="form-control @error('variety')
                    @if($message)
                        {{"border border-danger"}}
                    @endif
                @enderror
                "value="{{old('variety')}}">
                @error('variety')
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