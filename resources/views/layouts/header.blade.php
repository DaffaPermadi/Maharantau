 <!-- ***** Header Area Start ***** -->
 <header class="header-area header-sticky">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <nav class="main-nav">
                  <!-- ***** Logo Start ***** -->
                  <a href="index.html" class="logo">
                      <img src="{{ asset('images/logo.png')}}" alt="">
                  </a>
                  <!-- ***** Logo End ***** -->
                  <!-- ***** Menu Start ***** -->
                  <ul class="nav">
                    <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                    <li><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
                    <li><a href="/deals" class="{{ request()->is('deals') ? 'active' : '' }}">Deals</a></li>
                    <li><a href="/reservation" class="{{ request()->is('reservation') ? 'active' : '' }}">Reservation</a></li>
                    <li><a href="/book" class="{{ request()->is('book') ? 'active' : '' }}">Book Yours</a></li>
                </ul>   
                  <a class='menu-trigger'>
                      <span>Menu</span>
                  </a>
                  <!-- ***** Menu End ***** -->
              </nav>
          </div>
      </div>
  </div>
</header>
<!-- ***** Header Area End ***** -->