@extends('template')
@section('pagetitle')
    <title>Jarvis - BookTable</title>
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('food_drink/foodanddrink.css')}}">
<link rel="stylesheet" href="{{asset('food_drink/bookandtable.css')}}">
@endsection
@section('navbar')
<div id="book-banner">
    @include('part.nav')
    <div class="container">
        <div class="text-show-case-o">
            <div class="text-case-o ">
                <h2 class="menu-o">BOOK A TABLE</h2>
            </div>
        </div>
    </div>
 </div>
@endsection

@section('content')
<div class="bootstrap-iso">
     <div class="container">
        <div class="row my-5">
            <div class="col-lg-8 offset-lg-2 col-md-12 offset-md-0">
                <h2 class="reservation-title">SELECT DATE AND TIME FOR YOUR RESERVATION</h2>
            </div>
        </div>
        {{-- form start here --}}
        <form action="{{route('customer.create')}}" method="GET">
        @csrf
        <div class="row m-4">
                <div class="col-lg-3">
                   <div class="form-group">
                        <label for="date">Date:</label>
                        <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                            <input type="text" name="date" id="date" class="form-control datetimepicker-input" data-target="#datetimepicker4"/>
                            <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                   </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="arrivingtime">Arriving Time:</label>
                        <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                            <input type="text" name="arrivingtime" id="arrivingtime" class="form-control datetimepicker-input" data-target="#datetimepicker3"/>
                                <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="leavingtime">Leaving Time:</label>
                        <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                            <input type="text" name="leavingtime" id="leavingtime" class="form-control datetimepicker-input" data-target="#datetimepicker2"/>
                            <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
                            </div>
                        </div>
                    </div>       
                </div>
                <div class="col-lg-3">
                    <label for="person">People</label>
                    <input type="number" name="person" id="person" class="form-control"><br>
                </div>
               
        </div>
        <div class="row m-4">
            <div class="col-lg-8 offset-lg-2 col-md-12 offset-md-0">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name"  class="form-control">
                </div>
                <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" name="phone" id="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="table">Choose Table</label>
                   <select name="table" id="table" class="form-control">
                        @foreach($tables as $table)
                            <option value="{{$table->id}}">{{$table->number}}{{$table->type}}</option>
                        @endforeach
                   </select>
                </div>
                {{-- <input type="submit" name="order" id="order" value="Order" class="btn btn-info"> --}}
                <a href="#" class="btn btn-info" onclick="order()" data-toggle="modal" data-target="#exampleModalScrollable">Order</a>
                <!-- Button trigger modal -->

      
      <!-- Modal -->
      <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalScrollableTitle">Confirmation Box</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div id="confirmation" class="col-lg-12">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary">Confirm</button>
            </div>
          </div>
        </div>
      </div>
            </div>
        </div>
        {{-- form end here --}}
        </form>
     </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(function () {
        $('#datetimepicker4').datetimepicker({
            format: 'L'
        });
    });
    $(function () {
        $('#datetimepicker3').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker2').datetimepicker({
            format: 'LT'
        });
    });
    // add to local storage
    function order(){
        let date = document.getElementById("date").value;
        let arrivingtime = document.getElementById("arrivingtime").value;
        let leavingtime = document.getElementById("leavingtime").value;
        let person = document.getElementById("person").value;
        let name = document.getElementById("name").value;
        let phone = document.getElementById("phone").value;
        let email = document.getElementById("email").value;
        let table = document.getElementById("table").value;
        let customer = {
            date : date,
            arrivingtime : arrivingtime,
            leavingtime : leavingtime,
            person : person,
            name : name,
            phone : phone,
            email : email,
            table : table
        }
        //console.log(customer);
        localStorage.setItem('jarvisorder', JSON.stringify(customer));
        confirm();
    }
   
    function confirm(){
        let confirm=JSON.parse(localStorage.getItem('jarvisorder'));
        console.log(confirm);
        let html = `<table>
            <tr>
                <th class="p-3">Name </th>
                <td class="p-3">${confirm.name}</td>
            </tr>
            <tr>
                <th class="p-3">Phone</th>
                <td class="p-3">${confirm.phone}</td>
            </tr>
            <tr>
                <th class="p-3">Email</th>
                <td class="p-3">${confirm.email}</td>
            </tr>
            <tr>
                <th class="p-3">Person</th>
                <td class="p-3">${confirm.person}</td>
            </tr>
            <tr>
                <th class="p-3">Date</th>
                <td class="p-3">${confirm.date}</td>
            </tr>
            <tr>
                <th class="p-3">Arriving</th>
                <td class="p-3">${confirm.arrivingtime}</td>
            </tr>
            <tr>
                <th class="p-3">Leaving</th>
                <td class="p-3">${confirm.leavingtime}</td>
            </tr>
            <tr>
                <th class="p-3">Table</th>
                <td class="p-3">${confirm.table}</td>
            </tr>
        </table>`;
        document.getElementById('confirmation').innerHTML = html;
    }
   
</script>
@endsection