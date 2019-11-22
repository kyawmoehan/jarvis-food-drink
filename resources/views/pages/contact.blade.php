@extends('template')
@section('pagetitle')
    <title>Jarvis - Contact Us</title>
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('food_drink/foodanddrink.css')}}">
@endsection
@section('navbar')
<div id="contact-banner">
    @include('part.nav')
    <div class="container">
        <div class="text-show-case-o">
            <div class="text-case-o ">
                <h2 class="menu-o">CONTACT US</h2>
            </div>
        </div>
    </div>
 </div>
@endsection
@section('content')
<div id="contact-us" class="container my-5">
    <div class="row">
        <div class="col-lg-8">
            <h2>Contact Us</h2>
            <p>If you have any questions or support requests please fill out the following form and we will get back to you as soon as we can.</p>
        <form action="{{route('message.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name"  class="form-control"  value="{{old('name') }}">
                    @error('name')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{old('email')}}">
                    @error('email')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                <input type="text" name="subject"  class="form-control" value="{{old('subject')}}">
                    @error('subject')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                <textarea class="form-control" name="message">{{old('message')}}</textarea>
                    @error('message')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <input type="submit" value="CONTACT" name="" class="btn btn-outline-info d-block">
            </form>
        </div>

        <div class="col-lg-4 phone-number">
            <h3>Phone Number:</h3>
            <ul>
                <li>09789654568</li>
                <li>09876543214</li>
                <li>09456345798</li>
            </ul>
            <br><br>
            <h3>Mailing Address</h3>
            <address>
                      Brooklyn<br>
                      376 Fake Street <br>
                      Brooklyn, Ny - 11231<br>
                      (718) 555-1234<br>
                      USA
                    </address>
        </div>
    </div>

</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29601.168445485448!2d96.0739814265037!3d21.967356821821028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cb6d074d041f63%3A0xe12084c7d44b5b6d!2sSaigyi%20Food%20%26%20Drinks!5e0!3m2!1sen!2smm!4v1572001812235!5m2!1sen!2smm"
    width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
@endsection

