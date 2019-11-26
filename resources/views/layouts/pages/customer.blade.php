@extends('layouts.admintemplate')
@section('content')
 <div class="container my-5">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                    <h1 class="text-center">Booking board</h1>
                    <div class="table-responsive-md">
                        <table class="table my-4">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Arriving Time</th>
                                    <th scope="col">Leaving Time</th>
                                    <th scope="col">Table</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach ($booking as $book)
                                    <tr>
                                        <th scope="row">{{$book->id}}</th>
                                        <td>{{$book->name}}</td>
                                         <td>{{$book->phone}}</td>
                                        <td>{{$book->email}}</td>
                                         <td>{{$book->date}}</td>
                                          <td>{{$book->arrivingtime}}</td>
                                        <td>{{$book->leavingtime}}</td>
                                        <td>{{$book->table}}</td>
                                         <td>{{$book->status}}</td>
                                        <td>
                                        <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#messagedelete">Confirm</button>
      
                                            <!-- Modal -->
                                            <div class="modal fade" id="messagedelete" tabindex="-1" role="dialog" aria-labelledby="messagedeleteLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="messagedeleteLabel">Are You Sure?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                    <form action="{{route('customer.destroy',$book->id)}}" method="POST" class="d-inline-block">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
                                                        </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
@endsection