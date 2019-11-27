@extends('layouts.admintemplate')
@section('content')
    <div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-lg-10 offset-lg-1">
                <h2>Monthly Report</h2>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-lg-4 offset-lg-1">
                <form action="">
                    <div class="form-group">
                        <label for="moth">Choose Month</label>
                       <select name="" id="choosemonth" class="form-control">

                       </select>
                    </div>
                    <div class="form-group">
                        <a class="btn btn-info" id="choose">Show</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 offset-lg-1">
                <div  id="totalbooking"></div>
                {{-- <h2>TotalBooking : <span></span></h2> --}}
                <div id="totaltable"></div>
            </div>
        </div>
       <div class="row my-3">
            <div class="col-lg-10 offset-lg-1">
                <div class="table-responsive my-3">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Person</th>
                                <th scope="col">Date</th>
                                <th scope="col">Table</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody id="monthly">

                        </tbody>
                    </table>
                </div>
            </div>
       </div>
    </div>
@endsection
@section('script')
    <script>
         $(document).ready(function(){
            var d = new Date();
            var current_month = d.getMonth()+1;
            var html ='';
            var months = [];
            var total_booking = 0;
            var total_table =[];
            var totaltable_html ='';
             $.get("{{route('monthly')}}",function(response){
                //  get months
                 $.each(response,function(key,value){
                    months.push(month(value.date));
                 });
                //  change month
                 months.sort();
                 months = jQuery.unique(months)
                //  show month
                 $.each(months,function(key,value){
                     $('#choosemonth').append(`<option val="${value}">${value}</option>`);
                 });
                //  when choose
                $('#choose').click(function(){
                    total_booking = 0;
                    total_table =[];
                    html='';
                    totaltable_html='';
                    choose_month = $('#choosemonth').val();
                    $.each(response,function(key,value){
                     if(month(value.date) == choose_month){
                        total_booking++;
                        total_table.push(value.table);
                         html += `<tr>
                            <td>${value.id}</td>
                            <td>${value.name}</td>
                            <td>${value.phone}</td>
                            <td>${value.email}</td>
                            <td>${value.person}</td>
                            <td>${value.date}</td>
                            <td>${value.table}</td>
                            <td>${value.status}</td>
                        </tr>`
                     }
                 });
                 total_table = countTable(total_table);
                 $('#totalbooking').html(`<h2>TotalBooking : ${total_booking}</h2>`);
                 totaltable_html =`<div class="table-responsive my-3">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Table</th>
                                <th scope="col">Quantity</th>  
                            </tr>
                        </thead>
                        <tbody>`;
                 $.each(total_table,function(key,value){
                    console.log(key + value);
                    totaltable_html +=`
                        <tr>
                            <td>${key}</td>
                            <td>${value}</td>
                        </tr>
                    `;
                 });
                 totaltable_html += `</tbody></table></div>`;
                $('#totaltable').html(totaltable_html);
                 $('#monthly').html(html);
                });
             });


            //  get month
             function month(date){
                for(i = 0;i <= date.length; i++){
                    if(date[i] == '/'){
                        var month = parseInt(date.slice(0,i));
                        return month;
                    }
                }
             }
             function countTable(tables){
                counts = {};
                jQuery.each(tables, function(key,value) {
                    if (!counts.hasOwnProperty(value)) {
                        counts[value] = 1;
                    } else {
                        counts[value]++;
                    }
                });
                return counts;
             }
         });
    </script>
@endsection