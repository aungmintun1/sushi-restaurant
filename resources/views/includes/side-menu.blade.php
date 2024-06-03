<div class="side-menu">
  <a href="/" class="logo">
    <img src="img/clipart-restaurant-restaurant-logo-5.png">
  </a>
  <div class="menu">
    <div class="menu-title">
      Menu
    </div>
    <ul class="links">
      <li>
        <a href="/menu">Food</a>
      </li>
      <li>
        <a href="/about">About Us</a>
      </li>
      
      <li>
        <a href="/reservations">Reservations</a>
      </li>
      <li>
        <a href="/offers">Offers</a>
      </li>
      <li>
        <a href="/contact">Contact</a>
      </li>
      <li>
        <a href="/admin/register">Register</a>
      </li>
      @if (Route::has('login'))
      @auth
      <form method="POST" action="{{ route('logout') }}">
          @csrf
          <a class="sidemenu-link" href="/logout" onclick="event.preventDefault(); this.closest('form').submit();" type="button">
              Logout
          </a>
      </form>

      @else
      <li>
        <a href="/admin/login">Login</a>
      </li>
      @endauth
      @endif
    </ul>
  </div>
  <div class="social-icons">
    <a href="#" target="new">
      <i class="fa fa-facebook" aria-hidden="true"></i>
    </a>
    <a href="#" target="new"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a href="#" target="new"><i class="fa fa-instagram" aria-hidden="true"></i></a>
  </div>
  <div class="location">
    <div class="address">
      {{-- {{$settings["general"]->address_1}} {{$settings["general"]->address_2}},<br>
      {{$settings["general"]->city}}, {{$settings["general"]->state}} {{$settings["general"]->zipcode}} --}}
    </div>
    <div class="phone-number">
      {{-- <a href="tel:{{$settings["general"]->phone_number}}">{{$settings["general"]->phone_number}}</a> --}}
    </div>
  </div>
</div>