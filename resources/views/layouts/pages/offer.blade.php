@extends('layouts.admintemplate')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <h1 class="d-inline-block">Best Offer</h1>
             <form action="{{route('bestoffer.create')}}" method="GET" class="d-inline-block float-right">
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Add New">
                </div>
            </form>
            <div class="table-responsive-md">
                <table class="table my-4">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Variety</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                     @foreach($offer as $offer)
                    <tr>
                        <td>{{$offer->id}}</td>
                        <td>{{$offer->title}}</td>
                        <td>{{$offer->variety}}</td>
                        <td>{{$offer->categories->name}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('bestoffer.edit',$offer->id)}}">Edit</a>
                            <form action="{{route('bestoffer.destroy',$offer->id)}}" method="POST" class="d-inline-block" onsubmit="return ConfirmDelete()">
                                @csrf
                                @method('DELETE')
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                  Delete
                              </button>

                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </td>
        </tr>
        @endforeach 
                </table>
            </div>
        </div>
    </div>
</div>
@endsection