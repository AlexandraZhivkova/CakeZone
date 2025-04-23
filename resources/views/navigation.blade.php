<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0 mx-auto">
    <div class="col-lg-4 text-center py-3">
        <div class="d-inline-flex align-items-center justify-content-center">
            <a href="{{route('home')}}" class="navbar-brand">
                <h1 class="m-0 text-primary font-secondary">CakeZone
                </h1>
            </a>
        </div>
    </div>
    <a href="{{route('home')}}" class="navbar-brand d-block d-lg-none">
        <h1 class="m-0 text-primary font-secondary">CakeZone
        </h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto mx-lg-auto py-0">
            <a href="{{ route('home')}}" class="nav-item nav-link {{ Route::currentRouteName()== 'home' ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link {{ Route::currentRouteName()== 'about' ? 'active' : '' }}">About Us</a>
            <a href="{{ route('sweets.index') }}" class="nav-item nav-link {{ Route::currentRouteName()== 'sweets.index' ? 'active' : '' }}">Catalogue</a>
            <a href="{{ route('reviews.index') }}" class="nav-item nav-link {{ Route::currentRouteName()== 'reviews.index' ? 'active' : '' }}">Reviews</a>
            <a href="{{ route('contactus')}}" class="nav-item nav-link {{ Route::currentRouteName()== 'contactus' ? 'active' : '' }}">Contact Us</a>
        </div>
        <div class="navbar-nav ms-auto mx-lg-auto py-0">
            @guest
                <a href="{{ route('login') }}" class="nav-item nav-link {{ Route::currentRouteName()== 'login' ? 'active' : '' }}">Log In</a>
                <a href="{{ route('register') }}" class="nav-item nav-link {{ Route::currentRouteName()== 'register' ? 'active' : '' }}">Register</a>
            @endguest

            @auth
                <a href="{{ route('profile') }}" class="nav-item nav-link {{ Route::currentRouteName()== 'profile' ? 'active' : '' }} m-0 text-capitalize">{{ explode(' ', auth()->user()->name)[0] }}</a>
               <form action="{{ route('logout') }}" method="post">
                   @csrf
                   <button type="submit" class="nav-item nav-link bg-dark border-0">Log Out</button>
               </form>
            @endauth
        </div>
    </div>
</nav>
<!-- Navbar End -->
