@extends('template')
@section('pagetitle')
    <title>Jarvis - About Us</title>
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('food_drink/foodanddrink.css')}}">
    <link rel="stylesheet" href="{{asset('food_drink/bookandtable.css')}}">
    <link rel="stylesheet" type="text/css" href="ft/css/all.min.css">
    <link rel="stylesheet" href="{{asset('food_drink/abt.css')}}">
@endsection
@section('navbar')
<div id="about-banner">
    @include('part.nav')
    <div class="container">
        <div class="text-show-case-o">
            <div class="text-case-o">
                <h2 class="menu-o">ABOUT US</h2>
            </div>
        </div>
    </div>
 </div>
@endsection

@section('content')
<br><br><br>
<div class="container about-us">

    <div class="text-block ">
        <h4><b><i>Chef</i></b></h4>
        <p>A chef is a trained professional cook and tradesman who is proficient in all aspects of food preparation, often focusing on a particular cuisine. The word "chef" is derived from the term chef de cuisine, the director or head of a kitchen.</p>
    </div>

    <div class="carousel slide" data-ride="carousel" id="mycr">

        <ol class="carousel-indicators">
            <li data-target="#mycr" data-slide-to="0" class="active"></li>
            <li data-target="#mycr" data-slide-to="1"></li>
            <li data-target="#mycr" data-slide-to="2"></li>
        </ol>


        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../Image/about/p18.jpg" class="rounded ml-5" style="width:80%;">

                <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-info">Chef.Selena</h3>

                </div>

            </div>
            <div class="carousel-item">
                <img src="../Image/about/p17.jpg" class="rounded ml-5" style="width:80%;">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-dark">Chef.John</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../Image/about/p16.jpg" class="rounded ml-5" style="width:80%;">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-warning">They are the best chefs in Jarvis.</h3>

                </div>
            </div>
        </div>
        <a href="#mycr" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#mycr" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>

</div>
<div class="container">
    <div class="row m-3">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body ">
                    <h3 class="card-title"><i>Our Mission</i></h3>
                    <ul>
                        <li><p>To be the best chain in the world by suitble prices with consistent quality,value and commitment t o its customer base.</p></li>
                        <li><p>Determine to develop the brand valuable by food safety and nutritional value.</p></li>

                        <li><p>Our business principle is not only to become a successful organization but also to value the restaurant.</p></li>

                      

                    </ul>
                    <img src="../Image/about/fd.jpeg" class="rounded-circle ml-5" style="width:50%;">
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"><i>Our Vision</i></h3>
                    <p>To be sustainable and inclusive growth restaurant.</p>
                    <img src="../Image/about/d5.jpeg" class="rounded-circle w-100" alt="Cinque Terre">
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card bg-inverse">
                <div class="card-body">

                    <h3 class="card-title"> <i> Meaning of Drinks</i></h3>
                    <p>drink is a liquid intended for human consumption. In addition to their basic function of satisfying thirst, drinks play important roles in human culture. Common types of drinks include plain drinking water, milk, coffee, tea, hot
                        chocolate, juice and soft drinks.</p>
                    <p>In addition, alcoholic drinks such as wine, beer, and liquor, which contain the drug ethanol, have been part of human culture for more than 8,000 years.</p>
                    <img src="../Image/about/p7.jpeg" class="rounded-circle" alt="Cinque Terre" class="rounded-circle">
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card bg-light">
                <div class="card-body">

                    <h3 class="card-title"> <i>Juice</i></h3>
                    <p>Juice is a drink made from the extraction or pressing of the natural liquid contained in fruit and vegetables. It can also refer to liquids that are flavored with concentrate or other biological food sources, such as meat or seafood,
                        such as clam juice.</p>
                    <p>Juice is commonly consumed as a beverage or used as an ingredient or flavoring in foods or other beverages, as for smoothies.</p>
                    <img src="../Image/about/p5.jpeg" class="rounded-circle" alt="Cinque Terre" class="rounded-circle">
                </div>
            </div>
        </div>

    </div>

</div>
<div>
@endsection