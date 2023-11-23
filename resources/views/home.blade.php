@extends('layouts.main')

@section('title', 'Homepage - Movie App')

@section('content')

<section class="hero">
    <div class="hero__text">
        <h3 class="hero__welcome">Welcome</h3>
        <h1 class="hero__header">Your own movie library</h1>
        <p class="hero__description">Discover the magic of cinema in one place. With our app, browse, search and delight
            in the most thrilling movies from
            different genres.</p>
        <div class="hero__buttons">
            <a href="#popular" class="hero__button">Popular movies</a>
            <a href="#about" class="hero__button hero__button--colored">About this app</a>
        </div>

    </div>

    <div class="hero__bullets">
        <span class="hero__bullet">Latest movies</span>
        <span class="hero__bullet">Official movies</span>
        <span class="hero__bullet">All in one place</span>
    </div>
</section>
<section id="genres" class="section genres">
    <div class="section__wrapper">
        <div class="section__heading">
            <h1 class="section__title">
                Choose the type of film you like
            </h1>
            <h3 class="section__subtitle">
                We present many films from various main categories, let's chosse and search film you like.
            </h3>
        </div>
        <div class="genres__wrapper">
            <div class="genres__item">
                <div class="genres__icon-wrapper">
                    <img src="{{asset('img/genres-icons/action-icon.png')}}" alt="" class="genres__icon">
                </div>
                <div class="genres__text">
                    <h3 class="genres__name">Action</h3>
                    <p class="genres__description">Fast Frenzy</p>
                    <a href="{{route('category', 28)}}" class="genres__link">View more</a>
                </div>
            </div>
            <div class="genres__item">
                <div class="genres__icon-wrapper">
                    <img src="{{asset('img/genres-icons/fantasy-icon.png')}}" alt="" class="genres__icon">
                </div>
                <div class="genres__text">
                    <h3 class="genres__name">Fantasy</h3>
                    <p class="genres__description">Magic kingdoms</p>
                    <a href="{{route('category', 14)}}" class="genres__link">View more</a>
                </div>
            </div>
            <div class="genres__item">
                <div class="genres__icon-wrapper">
                    <img src="{{asset('img/genres-icons/comedy-icon.png')}}" alt="" class="genres__icon">
                </div>
                <div class="genres__text">
                    <h3 class="genres__name">Comedy</h3>
                    <p class="genres__description">Pure laughter</p>
                    <a href="{{route('category', 35)}}" class="genres__link">View more</a>
                </div>
            </div>
            <div class="genres__item">
                <div class="genres__icon-wrapper">
                    <img src="{{asset('img/genres-icons/drama-icon.png')}}" alt="" class="genres__icon">
                </div>
                <div class="genres__text">
                    <h3 class="genres__name">Drama</h3>
                    <p class="genres__description">Deep emotions</p>
                    <a href="{{route('category', 18)}}" class="genres__link">View more</a>
                </div>
            </div>
            <div class="genres__item">
                <div class="genres__icon-wrapper">
                    <img src="{{asset('img/genres-icons/mystery-icon.png')}}" alt="" class="genres__icon">
                </div>
                <div class="genres__text">
                    <h3 class="genres__name">Mystery</h3>
                    <p class="genres__description">Secrets await</p>
                    <a href="{{route('category', 9648)}}" class="genres__link">View more</a>
                </div>
            </div>
            <div class="genres__item">
                <div class="genres__icon-wrapper">
                    <img src="{{asset('img/genres-icons/romance-icon.png')}}" alt="" class="genres__icon">
                </div>
                <div class="genres__text">
                    <h3 class="genres__name">Romance</h3>
                    <p class="genres__description">Love is blooming</p>
                    <a href="{{route('category', 10749)}}" class="genres__link">View more</a>
                </div>
            </div>
            <div class="genres__item">
                <div class="genres__icon-wrapper">
                    <img src="{{asset('img/genres-icons/horror-icon.png')}}" alt="" class="genres__icon">
                </div>
                <div class="genres__text">
                    <h3 class="genres__name">Horror</h3>
                    <p class="genres__description">The thrill</p>
                    <a href="{{route('category', 27)}}" class="genres__link">View more</a>
                </div>
            </div>
            <div class="genres__item">
                <div class="genres__icon-wrapper">
                    <img src="{{asset('img/genres-icons/thriller-icon.png')}}" alt="" class="genres__icon">
                </div>
                <div class="genres__text">
                    <h3 class="genres__name">Thriller</h3>
                    <p class="genres__description">Tension is rising</p>
                    <a href="{{route('category', 53)}}" class="genres__link">View more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="popular" class="section popular">
    <div class="section__wrapper">
        <div class="section__heading">
            <h1 class="section__title">Most popular movies in 2023</h1>
            <h3 class="section__subtitle">
                Discover the most acclaimed movies of the year and find your next favorite masterpiece. Immerse yourself
                in the best
                cinema.
            </h3>
        </div>
        <div class="popular__wrapper">
            <div class="swiper swiper-main popular__movies">
                <div class="swiper-wrapper popular__movies-container">
                    @foreach($popularMovies as $popularMovie)
                    <div class="swiper-slide popular__movie">
                        <a class="popular__link" href="{{route('movie', $popularMovie['id'])}}">
                            <img src="{{ 'https://image.tmdb.org/t/p/w500'.$popularMovie['poster_path'] }}"
                                alt="{{ $popularMovie['title'] }}" class="popular__poster">
                            <h2 class="popular__title">{{ $popularMovie['title'] }}</h2>
                        </a>
                        <div class="popular__info">
                            <span class="popular__rating"><img class="popular__rating-star"
                                    src="{{asset('img/red_star.png')}}" alt="">{{ number_format($popularMovie['vote_average'], 1)
                                }}</span>
                            <span>|</span>
                            <span class="popular__year">{{
                                \Carbon\Carbon::parse($popularMovie['release_date'])->format('d.m.Y') }}</span>
                        </div>
                        <p class="popular__description">
                            {{Illuminate\Support\Str::limit($popularMovie['overview'], 120) }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="popular__controls">
                <div class="popular__line"></div>
                <div class="popular__arrows">
                    <div class="popular__arrow-wrapper popular__arrow-wrapper--prev">
                        <img class="popular__arrow" src="{{asset('img/arrow-left.png')}}" alt="">
                    </div>
                    <div class="popular__arrow-wrapper popular__arrow-wrapper--next">
                        <img class="popular__arrow" src="{{asset('img/arrow-right.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section id="about" class="section about">
    <div class="section__wrapper">
        <div class="section__heading">
            <h1 class="section__title">About this app</h1>
            <h3 class="section__subtitle">
                Embark on a cinematic journey, effortlessly browsing through diverse categories.
            </h3>
        </div>
        <div class="about__wrapper">
            <div class="about__item">
                <div class="about__icon-wrapper">
                    <img src="{{asset('img/about/info-icon.png')}}" alt="" class="about__icon">
                </div>
                <div class="about__text">
                    <h3 class="about__title">Browse & Discover</h3>
                    <p class="about__description">Delve into a vast collection sourced directly from TMDB. Explore both
                        timeless classics and fresh releases.

                    </p>
                </div>
            </div>
            <div class="about__item">
                <div class="about__icon-wrapper">
                    <img src="{{asset('img/about/favourites-icon.png')}}" alt="" class="about__icon">
                </div>
                <div class="about__text">
                    <h3 class="about__title">Genre Variety</h3>
                    <p class="about__description">Explore movies across different genres, ensuring you always find
                        something that matches your mood.
                    </p>
                </div>
            </div>
            <div class="about__item">
                <div class="about__icon-wrapper">
                    <img src="{{asset('img/about/official-icon.png')}}" alt="" class="about__icon">
                </div>
                <div class="about__text">
                    <h3 class="about__title">Your Watchlist</h3>
                    <p class="about__description">Curate a personalized list of films, adding favorites and tracking
                        your movie-watching journey.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="testimonials" class="section testimonials">
    <div class="section__wrapper">
        <div class="section__heading">
            <h1 class="section__title">Testimonials</h1>
            <h3 class="section__subtitle">
                We present many films from various main categories, let's chosse and search film you like.
            </h3>
        </div>
        <div class="testimonials__items">
            <div class="testimonials__item">
                <span class="testimonials__quote">This app truly rekindled my love for cinema. I've discovered movies I
                    wouldn't have known otherwise. A must-have for
                    every cinephile!</span>
                <img src="{{asset('img/testimonials/portrait-1.jpg')}}" alt="" class="testimonials__image">
                <h3 class="testimonials__name">Miguel Santos
                </h3>
                <span class="testimonials__position">Film Critic
                </span>
            </div>
            <div class="testimonials__item">
                <span class="testimonials__quote">Navigating through different genres and curating my watchlist has
                    never been easier. This app is a game-changer for
                    movie nights!</span>
                <img src="{{asset('img/testimonials/portrait-2.jpg')}}" alt="" class="testimonials__image">
                <h3 class="testimonials__name">Lukasz Nowak</h3>
                <span class="testimonials__position">Film Student
                </span>
            </div>
            <div class="testimonials__item">
                <span class="testimonials__quote">From classics to new releases, I'm wowed by the selection.
                    User-friendly interface, diverse genres, and impeccable
                    curation.</span>
                <img src="{{asset('img/testimonials/portrait-3.jpg')}}" alt="" class="testimonials__image">
                <h3 class="testimonials__name">Rohan Patel</h3>
                <span class="testimonials__position">Cinema Enthusiast
                </span>
            </div>
        </div>
    </div>
</section>

@endsection
