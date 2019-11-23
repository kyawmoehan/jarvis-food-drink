@extends('layouts.admintemplate')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <h2>Create Tables</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <form action="{{route('table.store')}}" method="POST" class="my-3">
                    @csrf
                    <div class="form-group">
                            <label for="number">Table Number</label>
                            <input type="text" name="number" class="form-control" value="{{old('number')}}">
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
                    <input type="submit" name="submit"  class="btn btn-info" value="Add New">
             </form>
        </div>
    </div>
</div>
@endsection