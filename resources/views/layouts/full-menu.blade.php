<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.metatags')
    </head>
    <body>
        <section id="menu-layout">
            @include('includes.side-menu')
            <section id="content-section">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @yield('content')
            <section id="footer">
              <img class="footer-logo" src="/img/sushi-logo.png">
          
              <div class="footer-fullmenu-content">
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
          
                <p>Copyright © 2020 SushiFushi. All Rights Reserved.</p>
              </div>
            </section>
            </section>
        </section>
    </body>
</html>
