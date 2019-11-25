@extends('template')
@section('pagetitle')
    <title>Jarvis - Food & Drink</title>
@endsection
@section('navbar')
<div id="banner">
    @include('part.nav')
    <div class="container d-flex flex-column align-items-start">
        <div class="text-show-case">
            <div class="text-case ">
                <p>HAVE YOU TRIED OUR</p>
                <P>NEW MENU YET?</P>
                <P>VISIT NOW!</P>
            </div>
            <a href="{{route('Booktable')}}"  class="btn btn-info book-btn " id="booktable">Book Table</a>
        </div>
    </div>
 </div>
@endsection
@section('content')
      <!-- best offers -->
      <section class="section-c">
        <div class="container">
            <div class="best-offer">
                <h2 class="text-center pt-5">BEST OFFERS</h2>
                <p>Check out the carefully selected menu of Food and Drink here.</p>
                <div class="offers">
                    <div class="offers-box">
                        <div>
                            <p>
                                <strong>{{$bestoffers[0]['title']}}</strong>
                                {{$bestoffers[0]['variety']}}
                            </p>
                            <p>
                                <strong>{{$bestoffers[1]['title']}}</strong>{{$bestoffers[1]['variety']}}
                            </p>
                            <p>
                                <strong>{{$bestoffers[2]['title']}}</strong>{{$bestoffers[2]['variety']}}
                            </p>
                            <a href="{{route('Food')}}" class="btn-2">Discover More</a>
                        </div>
                    <img src="{{asset('storage/images/home/food.jpg')}}" border="0">
                    </div>
                    <div class="offers-box">
                        <div>
                            <p>
                                <strong>{{$bestoffers[3]['title']}}</strong>{{$bestoffers[3]['variety']}}
                            </p>
                            <p>
                                <strong>{{$bestoffers[4]['title']}}</strong>{{$bestoffers[4]['variety']}}
                            </p>
                            <p>
                                <strong>{{$bestoffers[5]['title']}}</strong>{{$bestoffers[5]['variety']}}
                            </p>
                            <a href="{{route('Drink')}}" class="btn-2">Discover More</a>
                        </div>
                        <img src="{{asset('storage/images/home/drink.jpg')}}" border="0">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact us -->
    <section class="section-d">
        <div class="container">
            <div class="contact">
                <h2>CONTACT US</h2>
                <p>Get in touch with us. We'd love to hear from you.</p>
                <a href="{{route('Contact')}}" class="btn-1">Contact Us</a>
            </div>
        </div>
    </section>
    <!-- organic menu -->
    <section class="section-e">
        <div class="organic-menu">
            <h2>ORGANIC MENU</h2>
            <p>
                We are dedicated to providing truly pure and vibrant food. It's an intuitive approach of using our whole foods in recipes and on the plate. All the ingredients are fresh, nourishing and healthy. We serve authentic starters and main dishes introducing
                classic Greek cuisine along with must-try Mediterranean favorites, and some excellent wine, of course.
            </p>
        </div>
    </section>
    <!-- gallery-->
    <!-- gallery-->
    <section class="section-gallery">
        <div class="gallery">
            <p>
                <img src="{{asset('storage/images/home/orgainc-1.jpg')}}" alt="" />
            </p>
            <p>
                <img src="{{asset('storage/images/home/organic-2.jpg')}}" alt="" />
            </p>
            <p>
                <img src="{{asset('storage/images/home/orgainc-3.jpg')}}" alt="" />
            </p>
            <p><img src="{{asset('storage/images/home/orgainc-4.jpg')}}" alt="" /></p>
            <p>
                <img src="{{asset('storage/images/home/orgainc-5.jpg')}}" alt="" />
            </p>
            <p>
                <img src="{{asset('storage/images/home/orgainc-6.jpg')}}" alt="" />
            </p>
        </div>
    </section>



    <!-- reserve table -->
    <section class="section-f">
        <div class="container">
            <div class="reserve">
                <h3><strong>RESERVE A TABLE</strong></h3>
                <p>During sunset, surrender to the dramatic views of the caldera, the deep blue Aegean sea and treat yourself with a glass of divine wine from local vineyards.</p>
                <a href="{{route('Booktable')}}" class="btn-2">Reserve Now</a>
            </div>
        </div>
    </section>
@endsection