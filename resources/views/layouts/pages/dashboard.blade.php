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
                                        
                                    </tr>
                                @endforeach
                                </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                    <h1 class="text-center">Message board</h1>
                    <div class="table-responsive-md">
                        <table class="table my-4">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Message</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach ($messages as $message)
                                    <tr>
                                        <th scope="row">{{$message->id}}</th>
                                        <td>{{$message->name}}</td>
                                        <td>{{$message->email}}</td>
                                        <td>{{$message->subject}}</td>
                                        <td>{{$message->message}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
@endsection