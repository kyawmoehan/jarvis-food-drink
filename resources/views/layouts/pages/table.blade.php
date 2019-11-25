@extends('layouts.admintemplate')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <h2 class="d-inline-block text-center">Table</h2>
                <form action="{{route('table.create')}}" method="GET" class="d-inline-block float-right">
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="Add New">
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-10 offset-lg-1">
                <div class="table-responsive-md">
                    @if (session('status'))
                        <div class="table col-lg-12 bg-info p-2">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table  my-4">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Number</th>
                                <th scope="col">Type</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tables as $table)
                                <tr>
                                    <th>{{$table->id}}</th>
                                    <th>{{$table->number}}</th>
                                    <th>{{$table->type}}</th>
                                    <th>
                                        <a class="btn btn-info" href="{{route('table.edit',$table->id)}}">Edit</a>
                                         <!-- Button trigger modal -->
                                         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#tabledelete">Delete</button>
      
                                         <!-- Modal -->
                                         <div class="modal fade" id="tabledelete" tabindex="-1" role="dialog" aria-labelledby="tabledeleteLabel" aria-hidden="true">
                                             <div class="modal-dialog" role="document">
                                             <div class="modal-content">
                                                 <div class="modal-header">
                                                 <h5 class="modal-title" id="tabledeleteLabel">Are You Sure?</h5>
                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                     <span aria-hidden="true">&times;</span>
                                                 </button>
                                                 </div>
                                                 <div class="modal-footer">
                                                 <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                 <form action="{{route('table.destroy',$table->id)}}" method="POST" class="d-inline-block">
                                                         @csrf
                                                         @method('DELETE')
                                                         <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
                                                </form>
                                                 </div>
                                             </div>
                                             </div>
                                         </div>
                                     
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection