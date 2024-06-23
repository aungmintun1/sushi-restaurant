<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.metatags')
    </head>
    <body>
@include('includes.mobile-header')

<section class="home">
@include('includes.side-menu')
<div class="home-bg">
  <h1>A True Taste of Japanese Cousine</h1>
  <div class="welcome-btn-container">
    <button class="welcome-btn">Reservations</button>
    <button class="welcome-btn">Get Offers</button>
  </div>
</div>
</section>
  @yield('content')
  

  <section id="footer">
    <img class="footer-logo" src="/img/sushi-logo.png">

    <div class="footer-content">
      <div class="footer-box">
        <h5>Our Location</h5>
        <p>56 12th Ave, <br>
          New York, NY 10011</p>
          <a href="#">Get Directions</a>
      </div>
      <div class="footer-box">
        <h5>Get News & Offers</h5>
        <div class="input-container">
          <input class="footer-input" type="text" name="email" placeholder="Enter Your Email Address">
          <button class="footer-input-btn"> <i class="fa-solid fa-envelope"></i></button>
        </div>
     
        <div class="footer-social">
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-tiktok"></i></a>
          <a href="#"><i class="fab fa-pinterest"></i></a>

        </div>
      </div>
      <div class="footer-box">
        <h5>Contact Us</h5>
        <p>+1 800 603 6035</p>
        <p> +1 800 603 6036</p>
        <a href="#">mail@companyname.com</a>
      </div>
      
    </div>
  
    <div class="footer-links">
      <a href="#">Home</a><span> |</span>
      <a href="#">About</a><span> |</span>
      <a href="#">Menu</a><span> |</span>
      <a href="#">Events</a><span> |</span>
      <a href="#">Contact</a><span> |</span>
      <a href="#">News</a><span> |</span>
      <a href="#">Reservation</a>

      <p>Copyright © 2024 SushiFushi. All Rights Reserved.</p>
    </div>
  </section>

  <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>

  <script>
  document.addEventListener('DOMContentLoaded', function() {

  const slides = document.querySelectorAll('.slide'); //array of all slides
  const slidingSystem = document.querySelector('.sliding-system'); //width of whole slide system 1800px

  if (window.innerWidth < 475) {
     //mobile slider
    slideWidth = slides[0].offsetWidth;
    slideAmount = 1; 
} else {
  //desktop slider
    slideWidth = slides[0].offsetWidth + 36; // Assuming the additional 38px margin or padding
    slideAmount = 4; 
}

  let slideMultiplier = 0; //multiplys by slide width each iteration

  const maxSlides = slides.length; //max slide limit, if equal then cant keep iterating next slide

  function updateSlider() {
    slidingSystem.style.transform = `translateX(-${slideMultiplier * slideWidth}px)`;
  }

  document.querySelector('.right-btn').addEventListener('click', () => {
    if (slideAmount < maxSlides) {
      slideMultiplier++;
      slideAmount++;
      updateSlider();
    }
   else {
    console.log('Reached the last slide');
  }

  });

  document.querySelector('.left-btn').addEventListener('click', () => {
    if (slideAmount > 0) {
      slideMultiplier--;
      slideAmount--;
      updateSlider();
    }
  });

  window.addEventListener('resize', () => {
    slidingSystem.style.transform = 'translateX(0)';
    currentSlide = 0;
  });
});

  </script>

    </body>
</html>
