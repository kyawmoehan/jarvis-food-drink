@extends('template')
@section('pagetitle')
    <title>Jarvis - Drink Menu</title>
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('food_drink/foodanddrink.css')}}">
@endsection
@section('navbar')
<div id="drink-banner">
    @include('part.nav')
    <div class="container">
        <div class="text-show-case-o">
            <div class="text-case-o ">
                <h2 class="menu-o">DRINK MENU</h2>
            </div>
        </div>
    </div>
 </div>
@endsection