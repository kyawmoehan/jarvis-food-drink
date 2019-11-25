@extends('layouts.admintemplate')
@section('content')
<div class="container my-5"> 
    <div class="row">
        <div class="col-md-8 offset-md-3">
            <h2>BestOffer Edit Form</h2>
           <form  method="post" action="{{route('bestoffer.update',$offer->id)}}" enctype="multipart/form-data">
               @csrf
               @method('PUT')
               <div class="form-group">
                   <label for="name">Title:</label>
                   <input type="text" name="title" class="form-control" value="{{$offer->title}}">
               </div>
                <div class="form-group">
                   <label for="price">Variety:</label>
                   <input type="text" name="variety" class="form-control" value="{{$offer->variety}}">
               </div>
               <div class="form-group">
                   <label>Category:</label>
                   <select name="category" class="form-control">
                       <option value="" disabled="">
                           Choose Category
                       </option>
                       @foreach($categories as $row)
                       <option value="{{$row->id}}"
                       @if($offer->category_id == $row->id)
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