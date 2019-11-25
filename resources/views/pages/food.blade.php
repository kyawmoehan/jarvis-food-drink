@extends('template')
@section('pagetitle')
<title>Jarvis - Food Menu</title>
@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('food_drink/foodanddrink.css')}}">
<link rel="stylesheet" href="{{asset('food_drink/')}}">
@endsection
@section('navbar')
<div id="food-banner">
    @include('part.nav')
    <div class="container">
        <div class="text-show-case-o">
            <div class="text-case-o ">
                <h2 class="menu-o">FOOD MENU</h2>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="container">
    <div class="food-quote">
        <h2>Join us for your next meal!</h2>
    </div>
</div>
<div class="container mt-2 mb-5">

    <div class="row">
     @foreach($foods as $food)
     <div class="col-lg-4">
        <div class="card">
            <img src="{{asset($food->image)}}" class="card-img-top">
            <div class="con">
                <div class="card-body">
                    <h3>{{$food->name}}</h3>
                    <h5>{{$food->price}}</h5>
                    <div class="star-rating"><s><s><s><s><s></s></s></s></s></s></div>
            </div>
        </div>
    </div>
</div>
@endforeach
</div>
</div>
@endsection
@section('script')
<script>

    $(function() {
    $("div.star-rating > s").on("click", function(e) {
        var numStars = $(e.target).parentsUntil("div").length+1;
        alert(numStars + (numStars == 1 ? " star" : " stars!"));
    });
});

</script>
@endsection