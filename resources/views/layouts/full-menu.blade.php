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

  <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>

  <script>
    let slides = $('.sliding-system a.slide').length;
    let maxSlides;
    let moveTotal;
    let currentSlide = 0;

    $(window).resize(function(){
      currentSlide = 0;
      $('.sliding-system').css('transform', 'translate3d(-0%, 0,0');
    })
    function desktopSlider(){
      if(a.matches){
        maxSlides = Math.ceil((slides * 20) / 100);
        moveTotal = 100;
        // Right Button
        $('.right-btn').on('click', () => {
          console.log('clicked right btn')
          if(currentSlide < maxSlides){
            currentSlide += 100;
            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
          }
        });
        // Left Button
        $('.left-btn').on('click', () => {
          console.log('clicked right btn')
          if(currentSlide != 0){
            currentSlide -= 100;
            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
          }
        });
      }
    }
    var a = window.matchMedia("(min-width: 998px)")
    desktopSlider(a);
    a.addListener(desktopSlider);

    function tabletSlider(){
      if(b.matches){
        maxSlides = Math.ceil((slides * 50) / 100);
        moveTotal = 100;
        // Right Button
        $('.right-btn').on('click', () => {
          console.log('clicked right btn')
          if(currentSlide < ((maxSlides * 100) - 100)){
            currentSlide += 50;
            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
          }
        });
        // Left Button
        $('.left-btn').on('click', () => {
          console.log('clicked right btn')
          if(currentSlide != 0){
            currentSlide -= 50;
            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
          }
        });
      }
    }
    var b = window.matchMedia("(min-width: 768px) and (max-width: 997px");
    console.log(b)
    tabletSlider(b);
    b.addListener(tabletSlider);

  </script>
    </body>
</html>
