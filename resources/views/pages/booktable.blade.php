@extends('template')
@section('pagetitle')
    <title>Jarvis - BookTable</title>
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('food_drink/foodanddrink.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('food_drink/bookandtable.css')}}">
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
                    <div class="form-group">
                        <label for="checktable">Table:</label>
                        <p><a class="btn btn-info checktable">Check Table</a></p>
                    </div>
                </div>
        </div>
        <div class="row m-4">
            <div class="col-lg-8 offset-lg-2 col-md-12 offset-md-0">
                <div class="form-group">
                    <div id="avaliabletable"></div>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-2 col-md-12 offset-md-0" id="user-info">
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
                    <label for="person">People</label>
                    <input type="number" name="person" id="person" class="form-control"><br>
                </div> 
                {{-- <div class="form-group">
                    <label for="table">Choose Table</label>
                   <select name="table" id="table" class="form-control">
                        @foreach($tables as $table)
                            <option value="{{$table->id}}">{{$table->number}}{{$table->type}}</option>
                        @endforeach
                   </select>
                </div> --}}
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
              <button type="button" class="btn btn-primary click">Confirm</button>
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
    function order(){
        var date = document.getElementById("date").value;
        var arrivingtime = document.getElementById("arrivingtime").value;
        var leavingtime = document.getElementById("leavingtime").value;
        var person = document.getElementById("person").value;
        var name = document.getElementById("name").value;
        var phone = document.getElementById("phone").value;
        var email = document.getElementById("email").value;
        var table = document.getElementById("table").value;
        var customer = {
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
    $(document).ready(function(){
        // hide user info
        $("#user-info").hide();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.click').click(function(){
            let customer=JSON.parse(localStorage.getItem('jarvisorder'));
            //console.log(customer.name);
           $.post("{{route('customer.store')}}",{customer:customer},function(response){
               console.log(response);
               if(response ==="success"){
                     location.reload();
               }
           });    
        })
        // check table
        $('.checktable').click(function(){
            $.post("{{route('checktable')}}",function(response){
                var date = $('#date').val();
                var arrivingtime = $('#arrivingtime').val();
                var leavingtime = $('#leavingtime').val();

                var occupy_table =[];
                var avaliable_table = [];
                var all_table = [];
                var All_Table = [];
                var table_state = false;
               var tables;
                var html = ' <select name="table" id="table" class="form-control">';
                // all table
                $.each(response[1],function(key,value){
                    all_table.push(value.number);
                });
                // table state
               $.each(response[0],function(key,value){

                    if(value['date'] === date){
                        table_state = false;
                        return false;
                    }else{
                        table_state = true;
                    }
                });
                // all free table
                if(table_state){
                    $("#user-info").show();
                    $.each(response[1],function(key,value){
                            $.each(all_table,function(keya,valuea){
                                if(value.number == valuea){
                                    html += `<option value="${value.id}">${value.number}-${value.type}</option>`;
                                }
                            });
                        });
                    html += '</select>';
                    $('#avaliabletable').html(html);
                }
                // avilable table
                if(!table_state){
                    $.each(response[0],function(key1,value1){
                        // if(value1.date === date){
                            All_Table.push(parseInt(value1.table));   
                        // }
                       
                    });
                    console.log(All_Table);
                    // else{
                        $.each(response[0],function(key1,value1){
                            if(value1.date === date){
                                if(timeChanger(arrivingtime)>=timeChanger(value1.arrivingtime) && timeChanger(arrivingtime)<= timeChanger(value1.leavingtime)){
                                    $.each(response[1],function(key2,value2){
                                        if(value1.table == value2.number){
                                            occupy_table.push(value2.number);
                                        }
                                       
                                    });
                                }
                               
                            }
                        });
                        if(arraysMatch(All_Table,occupy_table)){
                            console.log("match");
                            $("#user-info").hide();
                            $('#avaliabletable').html("<h2>We are sorry</h2>");
                            return false;
                        }else{
                            avaliable_table = all_table.filter(val => !occupy_table.includes(val));
                        }
                        console.log(avaliable_table);
                        if((avaliable_table === undefined || avaliable_table == 0)) {
                            // $("#user-info").show();
                            // $.each(response[1],function(key,value){
                            //         $.each(all_table,function(keya,valuea){
                            //             if(value.number == valuea){
                            //                 html += `<option value="${value.id}">${value.number}-${value.type}</option>`;
                            //             }
                            //         });
                            //     });
                            // html += '</select>';
                            // $('#avaliabletable').html(html);
                            console.log("match");
                            $("#user-info").hide();
                            $('#avaliabletable').html("<h2>We are sorry</h2>");
                            return false;
                        }else{
                            $("#user-info").show();
                                $.each(response[1],function(key,value){
                                    $.each(avaliable_table,function(keya,valuea){
                                        if(value.number == valuea){
                                            html += `<option value="${value.id}">${value.number}-${value.type}</option>`;
                                        }
                                    });
                                });
                                html += '</select>';
                                $('#avaliabletable').html(html);
                        }
                    // }
                    
                }               
            });
            
        });

        // time change string to time hour function
        function timeChanger(time){
            for(i = 0;i <= time.length; i++){
                if(time[i] == ':'){
                    var hour = parseInt(time.slice(0,i));
                }
                if(time[i] == " "){
                    var duration = time.slice(i+1,);
                }
                if(duration == "AM"){
                    time_hour = hour;
                }else if(duration == "PM"){
                    time_hour = hour+12;
                }
            }
            return time_hour;
        }
        // array match
        var arraysMatch = function (arr1, arr2) {
            // Check if the arrays are the same length
            if (arr1.length !== arr2.length) return false;
            // Check if all items exist and are in the same order
            for (var i = 0; i < arr1.length; i++) {
                if (arr1[i] !== arr2[i]) return false;
            }
            // Otherwise, return true
            return true;
        };
    })
   
</script>
@endsection

