@extends('layouts.admintemplate')
@section('content')
 <div class="container  my-5">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <h2>Today</h2>
            @php 
            $currentdate = date('m/d/Y');
                $data = DB::table("customers")
                            ->whereRaw('date = ?',[$currentdate])
                            ->get();
                //print_r($data[0]->name);
            @endphp
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Person</th>
                            <th scope="col">Table</th>
                            <th scope="col">Status</th>
                            <th scope="col">Arrivng</th>
                            <th scope="col">Leaving</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $today)
                        <tr>
                            <td>{{$today->id}}</td>
                            <td>{{$today->name}}</td>
                            <td>{{$today->phone}}</td>
                            <td>{{$today->email}}</td>
                            <td>{{$today->person}}</td>
                            <td>{{$today->table}}</td>
                            <td>{{$today->status}}</td>
                            <td>{{$today->arrivingtime}}</td>
                            <td>{{$today->leavingtime}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 </div>
@endsection

