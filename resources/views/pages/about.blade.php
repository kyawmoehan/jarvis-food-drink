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


<div class="container">
  <div class="row m-3">
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="card border-warning">
        <div class="card-body ">
          <h3 class="card-title"><i>Our Mission</i></h3>
          <ul>
            <p>To be the best chain in the world by suitble prices with consistent quality,value and commitment to its customer base.</p>
            <p>Determine to develop the brand valuable by food safety and nutritional value.</p>
            <p>Our business principle is not only to become a successful organization but also to value the restaurant.</p>



          </ul>
          <img src="../storage/images/about/d5.jpeg" class="rounded-circle ml-5" style="width:75%;">
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="card border-warning">
        <div class="card-body">
          <h3 class="card-title"><i>Our Vision and Goal</i></h3>
          <p>To the National Leading Brand of Myanmar which provides the quality  products and services.</p>
          <p>To be sustainable and inclusive growth restaurant.</p>
          <p>Enrich our drinking-experiences to be more
            natural, healthy, convenient, and fulfilling,
          by leading the next drinks revolution.</p><br>
          <img src="../storage/images/about/j11.jpg" class="rounded-circle w-75 ml-5" alt="Cinque Terre">
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="card border-warning">
        <div class="card-body">

          <h3 class="card-title"> <i> Meaning of Drinks</i></h3>
          <p><b>Drink</b> is a liquid intended for human consumption. In addition to their basic function of satisfying thirst, drinks play important roles in human culture. Common types of drinks include plain drinking water, milk, coffee, tea, hot,chocolate, juice and soft drinks.</p>
          <p>In addition, alcoholic drinks such as wine, beer, and liquor, which contain the drug ethanol, have been part of human culture for more than 8,000 years.</p>
          <p>Juice is commonly consumed as a beverage or used as an ingredient or flavoring in foods or other beverages, as for smoothies.</p>
          <img src="../storage/images/about/j1.jpeg" class="rounded-circle" alt="Cinque Terre" class="rounded-circle">
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="card border-warning">
        <div class="card-body">

          <h3 class="card-title"> <i>Meaning of foods</i></h3>
          <p><b>Food</b> is any substance consumed to provide nutritional support for the body. It is usually of plant or animal origin, and contains essential nutrients, such as carbohydrates, fats, proteins, vitamins, or minerals.</p>
          <p>Food can be very healthy and flavorful, but you have to watch what you eat because <b>food</b> can be dangerous.</p>
          <p>Eating a healthy diet is not about strict limitations, staying unrealistically thin, or depriving yourself of the foods you love.</p>
          <br>
          <img src="../storage/images/about/j9.jpeg" class="rounded-circle" alt="Cinque Terre" class="rounded-circle">
        </div>
      </div>
    </div>

  </div>

</div>


<br>
    <h2 style="text-align: center;"><b><i>About Chef</i></b></h2>
    <p style="margin-left: 100px;font-size: 20px;">A chef is a trained professional cook and tradesman who is proficient in all aspects of food preparation, often focusing on a particular cuisine. The word "chef" is derived from the term chef de cuisine, the director or head of a kitchen.</p>
    <br>
    <div class="slideshow-container">

      <!-- Full-width images with number and caption text -->
      <div class="mySlides">
        <img src="../storage/images/about/j6.jpeg" style="width:80%;" class="center rounded">
        <div class="text-block rounded-circle" style="margin-left: 50px;">
          <h4 style="text-align: center;">Chef John</h4>
          <p>He is the best chef in Jarvis</p>
        </div>
      </div>
      <div class="mySlides">
        <img src="../storage/images/about/j7.jpeg" style="width:80%;" class="center">
        <div class="text-block rounded-circle" style="margin-left: 50px;">
          <h4 style="text-align:center;">Chef Smith</h4>
          <p>He is good at making cake among foods</p>
        </div>
      </div>
      <div class="mySlides">
        <img src="../storage/images/about/j8.jpeg" style="width:80%;" class="center">
        <div class="text-block rounded-circle" style="margin-left: 50px;">
          <h4 style="text-align:center;">Chef Peter</h4>
          <p>He is good at making juice</p>
        </div>
      </div>
      <div class="mySlides">
        <img src="../storage/images/about/j4.jpeg" style="width:80%;" class="center">
        <div class="text-block rounded-circle" style="margin-left: 50px;">
          <h4 style="text-align: center;">Others</h4>
          <p>They are also the best chef in Javis</p>
        </div>
      </div>

      <!-- Next and previous buttons -->
      <a class="prev" style="margin-left: 80px" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" style="margin-right: 80px" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>

    </div>
    <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
          }
        </script>
        <br><br>
@endsection