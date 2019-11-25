@extends('layouts.admintemplate')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <h1 class="text-center">Rating board</h1>
            <div class="table-responsive-md">
                <table class="table my-4">
                    <thead class="thead-dark">
                      <tr>
                        <th>No</th>
                        <th>Menu</th>
                        <th>Rating</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rating as $rate)
                    <tr>
                        <td id="no"></td>
                        <td id="menu"></td>
                        <td id="showratings"></td>
                    </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
   </div>
</div>
@endsection
@section ('script')
<script>
   $(document).ready(function()
   {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var no = $("#no").val();
    $('.click').click(function(){
      var menu = $("#menu").val();
     // alert(body + pid);
     $.post("{{route('rating.store')}}",{menu:menu,no:no},
      function(response){
      //alert(response);
      $('#menu').val('');
      getRatings(no);
  })
 })
    
    getRatings(no);
    function getRatings(no){
      $.post("{{route('getratings')}}",{no:no},function(response){
        console.log(response);
        var html = '';
        $.each(response,function(i,v){
          html += `<div class="media mb-4">
          <div class="media-menu">
          ${v.menu.name}
          ${v.menu}
          </div>
          </div>`;
      })      
        $('#showratings').html(html);
    })
  }
})
</script>
@endsection