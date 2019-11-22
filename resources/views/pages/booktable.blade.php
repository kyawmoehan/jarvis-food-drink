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