<nav class="mobile-nav">
    <i class="fa-solid fa-xmark mobile-nav__close"></i>
    <h3 class="mobile-nav__heading">Main menu</h3>
    <ul class="mobile-nav__menu">
        <li class="mobile-nav__item">
            <a href="{{route('home')}}" class="mobile-nav__link">Home</a>
        </li>
        <li class="mobile-nav__item">
            <a href="{{route('home')}}#genres" class="mobile-nav__link">Genres</a>
        </li>
        <li class="mobile-nav__item">
            <a href="{{route('home')}}#popular" class="mobile-nav__link">Popular</a>
        </li>
        <li class="mobile-nav__item">
            <a href="{{route('home')}}#about" class="mobile-nav__link">About</a>
        </li>
        <li class="mobile-nav__item">
            <a href="{{route('home')}}#testimonials" class="mobile-nav__link">Testimonials</a>
        </li>
    </ul>
</nav>
<div class="dark-background"></div>
<nav class="nav">
    <div class="nav__wrapper">
        <div class="nav__logo-wrapper">
            <a href="{{route('home')}}"><img src="{{asset('img/logo-white.png')}}" alt="Movie app logo"
                    class="nav__logo"></a>
        </div>
        <ul class="nav__menu-list">
            <li class="nav__menu-item">
                <a class="nav__menu-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav__menu-item">
                <a class="nav__menu-link" href="{{route('home')}}#genres">Genres</a>
            </li>
            <li class="nav__menu-item">
                <a class="nav__menu-link" href="{{route('home')}}#popular">Popular</a>
            </li>
            <li class="nav__menu-item">
                <a class="nav__menu-link" href="{{route('home')}}#about">About</a>
            </li>
            <li class="nav__menu-item">
                <a class="nav__menu-link" href="{{route('home')}}#testimonials">Testimonials</a>
            </li>
        </ul>
        <ul class="nav__icons-menu">
            <li class="nav__icons-menu-item">
                <a href="{{route('search')}}" class="nav__icons-menu-link">
                    <i class="nav__icons-menu-icon fa-solid fa-magnifying-glass"></i>
                </a>
            </li>
            @auth
            <li class="nav__icons-menu-item nav__icons-menu-item--auth">
                <i class="nav__icons-menu-icon fa-regular fa-user"></i>
                <span class="nav__icons-menu-login">{{ Auth::user()->name }}</span>
                <div class="nav__arrow-link">
                    <i class="nav__profile-arrow fa-solid fa-chevron-down"></i>
                </div>
                <ul class="nav__profile-list">
                    <li class="nav__profile-item">
                        <a href="{{route('profile.edit')}}" class="nav__profile-link"><i class="fa-solid fa-user"></i>
                            Profile</a>
                    </li>
                    <li class="nav__profile-item">
                        <a href="{{route('watchlist')}}" class="nav__profile-link"><i class="fa-regular fa-clock"></i>
                            Watchlist</a>
                    </li>
                    <li class="nav__profile-item">
                        <a href="{{route('favourites')}}" class="nav__profile-link"><i class="fa-solid fa-heart"></i>
                            Favourites</a>
                    </li>
                    <li class="nav__profile-item">
                        <form method="POST" action="{{route('logout')}}">
                            @csrf
                            <button type="submit" class="nav__profile-link"><i
                                    class="fa-solid fa-arrow-right-from-bracket"></i>
                                Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
            @else
            <li class="nav__icons-menu-item">
                <a href="{{route('login')}}" class="nav__icons-menu-link">
                    <i class="nav__icons-menu-icon fa-regular fa-user"></i>
                    <span class="nav__icons-menu-login">Login</span>
                </a>
            </li>
            @endauth

        </ul>
        <div class="nav__hamburger-wrapper">
            <div class="nav__hamburger-item"></div>
            <div class="nav__hamburger-item"></div>
            <div class="nav__hamburger-item"></div>
        </div>
    </div>
</nav>
