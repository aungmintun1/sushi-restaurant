@extends('layouts.app')

@section('title')
{{-- About - {{$settings["general"]->site_title}}  --}}
@endsection



@section('content')
    <div id="contact-page">
      
      <div class="content-box">
        <div class="row">
          <div class="col-md-4">
            <h1>Contact Us</h1>
            <p> <i class="fa-solid fa-phone"></i>  +1 800 603 6035
               {{-- <a href="tel:{{$settings["general"]->phone_number}}">{{$settings["general"]->phone_number}}</a> --}}
            </p>
            <p><i class="fa-regular fa-envelope"></i>   mail@companyname.com</p>
            <p><i class="fa-solid fa-location-dot"></i>
              56 12th Ave,
              New York, NY 10011
              {{-- {{$settings["general"]->address_1}} {{$settings["general"]->address_2}},<br>
              {{$settings["general"]->city}}, {{$settings["general"]->state}} {{$settings["general"]->zipcode}} --}}
            </p>
         
             <div class="time-container">
            <i class="fa-regular fa-clock"></i> <p>Monday - Thursday: 11:00 AM - 11:00 PM <br> Friday - Saturday: 11:00 AM - 1:00 AM <br> Sunday: Closed</p>
            </div>

            <div class="contact-social">
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-tiktok"></i></a>
              <a href="#"><i class="fab fa-pinterest"></i></a>
            </div>
            
      
       
          </div>
          <div class="col-md-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193501.08260999445!2d-74.0316984241664!3d40.73002549025966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258fe7c87b859%3A0xf4d5471439a404ac!2sKurumazushi!5e0!3m2!1sen!2sus!4v1717952460939!5m2!1sen!2sus" width="600" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
@endsection