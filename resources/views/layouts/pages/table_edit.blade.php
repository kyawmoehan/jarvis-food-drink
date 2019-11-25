@extends('layouts.admintemplate')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <h2>Edit Tables</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <form action="{{route('table.update',$table->id)}}" method="POST" class="my-3">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="number">Table Number</label>
                <input type="text" name="number" class="form-control" value="{{$table->number}}">
                    @error('number')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="form-group">
                    <label for="type">Table Type</label>
                    <select class="custom-select" name="type">
                        <option selected value="Small">Small</option>
                        <option value="Medium">Medium</option>
                        <option value="Large">Large</option>
                    </select>
            </div>
            <input type="submit" name="submit"  class="btn btn-info" value="Update">
          </form>
        </div>
    </div>
</div>
@endsection