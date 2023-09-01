@extends('layouts.main')

@section('title', 'Home')

@section('content')

<section class="movie-info"
    style="background-image: url({{ 'https://image.tmdb.org/t/p/original'.$movie['backdrop_path'] }})">
    <div class="movie-info__wrapper">
        <div class="movie-info__details">
            <h2 class="movie-info__title">{{ $movie['title'] }}</h2>
            <div class="movie-info__basic-details">
                <div class="movie-info__rating">
                    <img src="{{asset('img/about/favourites-icon.png')}}" alt="" class="movie-info__rating-star">
                    {{ $movie['vote_average'] }}
                </div>
                <span class="movie-info__length">{{ $movie['runtime'] }} min</span>
                <ul class="movie-info__genres">
                    @foreach ($movie['genres'] as $genre)
                    <li class="movie-info__genre">
                        <a class="movie-info__genre-link"
                            href="{{route('category', $genre['id'])}}">{{ $genre['name'] }}</a>
                    </li>
                    @endforeach
                </ul>
                <span
                    class="movie-info__release-date">{{ \Carbon\Carbon::parse($movie['release_date'])->format('Y') }}</span>
            </div>
            <p class="movie-info__description">{{ $movie['overview'] }}</p>
            <div class="movie-info__buttons">
                <a href="" class="movie-info__button movie-info__button--colored">Watch trailer</a>
                <a href="" class="movie-info__button">Visit Just Watch</a>
            </div>
        </div>

        <div class="movie-info__posters">
            <h2 class="movie-info__posters-heading">Images</h2>
            <div class="swiper swiper-desktop movie-info__posters-wrapper">
                <div class="swiper-wrapper movie-info__posters-slider">
                    @foreach ($posters as $poster)
                    <img src="{{ 'https://image.tmdb.org/t/p/w500'.$poster['file_path'] }}" alt=""
                        class="swiper-slide movie-info__poster">
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</section>
<section class="movie-mobile-background"
    style="background-image: url({{ 'https://image.tmdb.org/t/p/original'.$movie['backdrop_path'] }})">
</section>
<div class="movie-mobile-info">
    <div class="movie-mobile-info__wrapper">
        <div class="movie-mobile-info__top">
            <div class="movie-mobile-info__rating">
                <img src="{{asset('img/about/favourites-icon.png')}}" alt="" class="movie-info__rating-star">
                {{ $movie['vote_average'] }}
            </div>
            <div class="movie-mobile-info__actions">
                <a href="#" class="movie-mobile-info__action"><img class="movie-mobile-info__action-icon"
                        src="{{asset('img/favourite-icon.png')}}" alt=""></a>
                <a href="#" class="movie-mobile-info__action"><img class="movie-mobile-info__action-icon"
                        src="{{asset('img/bookmark-icon.png')}}" alt=""></a>
            </div>
        </div>
        <h2 class="movie-mobile-info__title">{{ $movie['title'] }}</h2>
        <div class="movie-mobile-info__details">
            <span class="movie-mobile-info__length">{{ $movie['runtime'] }} min</span>
            <ul class="movie-mobile-info__genres">
                @foreach ($movie['genres'] as $genre)
                <li class="movie-mobile-info__genre">
                    <a class="movie-mobile-info__genre-link" href="#">{{ $genre['name'] }}</a>
                </li>
                @endforeach
            </ul>
            <span
                class="movie-moile-info__release-date">{{ \Carbon\Carbon::parse($movie['release_date'])->format('Y') }}</span>
        </div>
        <p class="movie-mobile-info__description">{{ $movie['overview'] }}</p>
        <div class="movie-mobile-info__buttons">
            <a href="" class="movie-mobile-info__button movie-mobile-info__button--colored">Watch trailer</a>
            <a href="" class="movie-mobile-info__button">Visit Just Watch</a>
        </div>
        <div class="movie-mobile-info__posters">
            <h2 class="movie-mobile-info__posters-heading">Images</h2>
            <div class="swiper swiper-mobile movie-mobile-info__posters-wrapper">
                <div class="swiper-wrapper movie-mobile-info__posters-slider">
                    @foreach ($posters as $poster)
                    <img src="{{ 'https://image.tmdb.org/t/p/w500'.$poster['file_path'] }}" alt=""
                        class="swiper-slide movie-mobile-info__poster">
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
<section class="section movie-more">
    <div class="section__wrapper">
        <div class="section__heading">
            <h1 class="section__title section__title--underline">
                Movie details
            </h1>
        </div>
        <div class="movie-more__wrapper">
            <div class="movie-more__links">
                <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}" alt="" class="movie-more__poster">
                <div class="movie-more__socials">
                    <a href="#"><img class="movie-more__social" src="{{asset('img/facebook-icon.png')}}" alt=""></a>
                    <a href="#"><img class="movie-more__social" src="{{asset('img/twitter-icon.png')}}" alt=""></a>
                    <a href="#"><img class="movie-more__social" src="{{asset('img/instagram-icon.png')}}" alt=""></a>
                    <a href="#"><img class="movie-more__social movie-more__social--website"
                            src="{{asset('img/website-icon.png')}}" alt=""></a>
                </div>
            </div>
            <div class="movie-more__info">
                <div class="movie-more__info-column">
                    <h4 class="movie-more__info-heading">Team</h4>
                    <div class="movie-more__info-details">
                        <div class="movie-more__info-detail">
                            <b>Writer </b> Jeff Loveness
                        </div>
                        <div class="movie-more__info-detail">
                            <b>Director </b> Peyton Reed
                        </div>
                        <div class="movie-more__info-detail">
                            <b>Characters </b> Stan Lee
                        </div>
                        <div class="movie-more__info-detail">
                            <b>Characters </b> Larry Lieber
                        </div>
                        <div class="movie-more__info-detail">
                            <b>Characters </b> Jack Kirby
                        </div>
                        <div class="movie-more__info-detail">
                            <b>Characters </b> Ernie Hart
                        </div>
                    </div>
                </div>
                <div class="movie-more__info-column">
                    <h4 class="movie-more__info-heading">Information</h4>
                    <div class="movie-more__info-details">
                        <div class="movie-more__info-detail">
                            <b>Status </b> Released
                        </div>
                        <div class="movie-more__info-detail">
                            <b>Original Language </b> English
                        </div>
                        <div class="movie-more__info-detail">
                            <b>Budget </b> $200,000,000.00
                        </div>
                        <div class="movie-more__info-detail">
                            <b>Revenue </b> $473,237,851.00
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="movie-more__actors">
            <h2 class="movie-more__actors-heading">Actors</h2>
            <div class="movie-more__actors-wrapper">
                <div class="movie-more__actor">
                    <img src="{{asset('img/actors-images/actor-5.jpg')}}" alt="" class="movie-more__actor-photo">
                    <h5 class="movie-more__actor-name">Paul Rudd</h5>
                    <span class="movie-more__actor-role">Scott Lang / Ant-Man</span>
                </div>

                <div class="movie-more__actor movie-more__actor--more">
                    <div class="movie-more__actor-more">
                        <img class="movie-more__actor-more-icon" src="{{asset('img/dots-icon.png')}}" alt="">
                    </div>
                    <h5 class="movie-more__actor-role">View All</h5>
                </div>
            </div>
        </div>
        <div class="movie-more__similar">
            <h2 class="movie-more__similar-heading">Similar movies</h2>
            <div class="movie-more__similar-wrapper">
                <div class="movie-more__similar-slider">
                    <a href="#" class="movie-more__similar-item">
                        <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}"
                            class="movie-more__similar-image" />
                        <h5 class="movie-more__similar-title">Ant-Man and The Wasp: Quantumania</h5>
                    </a>
                    <a href="#" class="movie-more__similar-item">
                        <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}"
                            class="movie-more__similar-image" />
                        <h5 class="movie-more__similar-title">Ant-Man and The Wasp: Quantumania</h5>
                    </a>
                    <a href="#" class="movie-more__similar-item">
                        <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}"
                            class="movie-more__similar-image" />
                        <h5 class="movie-more__similar-title">Ant-Man and The Wasp: Quantumania</h5>
                    </a>
                    <a href="#" class="movie-more__similar-item">
                        <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}"
                            class="movie-more__similar-image" />
                        <h5 class="movie-more__similar-title">Ant-Man and The Wasp: Quantumania</h5>
                    </a>
                    <a href="#" class="movie-more__similar-item">
                        <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}"
                            class="movie-more__similar-image" />
                        <h5 class="movie-more__similar-title">Ant-Man and The Wasp: Quantumania</h5>
                    </a>
                    <a href="#" class="movie-more__similar-item">
                        <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}"
                            class="movie-more__similar-image" />
                        <h5 class="movie-more__similar-title">Ant-Man and The Wasp: Quantumania</h5>
                    </a>
                    <a href="#" class="movie-more__similar-item">
                        <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}"
                            class="movie-more__similar-image" />
                        <h5 class="movie-more__similar-title">Ant-Man and The Wasp: Quantumania</h5>
                    </a>
                    <a href="#" class="movie-more__similar-item">
                        <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}"
                            class="movie-more__similar-image" />
                        <h5 class="movie-more__similar-title">Ant-Man and The Wasp: Quantumania</h5>
                    </a>
                </div>
            </div>
            <div class="movie-more__similar-controls">
                <div class="movie-more__similar-line"></div>
                <div class="movie-more__similar-arrows">
                    <div class="movie-more__similar-arrow-wrapper movie-more__similar-arrow-wrapper--next">
                        <img class="movie-more__similar-arrow" src="{{asset('img/arrow-left.png')}}" alt="">
                    </div>
                    <div class="movie-more__similar-arrow-wrapper movie-more__similar-arrow-wrapper--prev">
                        <img class="movie-more__similar-arrow" src="{{asset('img/arrow-right.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection
