<header class="mobile-header">
    <a href="/" class="mobile-logo">
      <img src="/img/sushi-logo.png">
    </a>
  </header>
  
  <div class="navigation">
  
    <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
  
    <label for="navi-toggle" class="navigation__button">
        <span class="navigation__icon">&nbsp;</span>
    </label>
  
    <div class="navigation__background">&nbsp;</div>
  
    <nav class="navigation__nav">
        <ul class="navigation__list">
            <li class="navigation__item"><a href="/" class="navigation__link">Home</a></li>
            <li class="navigation__item"><a href="/menu" class="navigation__link">Menu</a></li>
            <li class="navigation__item"><a href="/about" class="navigation__link">About Us</a></li>
            <li class="navigation__item"><a href="/reservations" class="navigation__link">Reservations</a></li>
            <li class="navigation__item"><a href="/offers" class="navigation__link">Offers</a></li>
            <li class="navigation__item"><a href="/contact" class="navigation__link">Contact Us</a></li>
            @if (Route::has('login'))
            @auth
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <li class="navigation__item">
              <a class="navigation__link" href="/logout" onclick="event.preventDefault(); this.closest('form').submit();" type="button">
                  Logout
              </a>
              </li>
          </form>
      
            @else
             <li class="navigation__item"><a href="/admin/register" class="navigation__link">Register</a></li>
             <li class="navigation__item"><a href="/admin/login" class="navigation__link">Login</a></li>
            @endauth
            @endif
            </ul>
    </nav>
  </div>