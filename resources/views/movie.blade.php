@extends('layouts.main')

@section('title', 'Movie - Movie App')

@section('content')

<section class="movie-info"
    style="background-image: url({{ 'https://image.tmdb.org/t/p/original'.$movie['backdrop_path'] }})">
    <div class="movie-info__wrapper">
        <div class="movie-info__details">
            <h2 class="movie-info__title">{{ $movie['title'] }}</h2>
            <div class="movie-info__basic-details">
                <div class="movie-info__rating">
                    <img src="{{asset('img/about/favourites-icon.png')}}" alt="" class="movie-info__rating-star">
                    {{ number_format($movie['vote_average'], 1) }}
                </div>
                <span class="movie-info__length">{{ $movie['runtime'] }} min</span>
                <ul class="movie-info__genres">
                    @foreach ($movie['genres'] as $genre)
                    <li class="movie-info__genre">
                        <a class="movie-info__genre-link" href="{{route('category', $genre['id'])}}">{{ $genre['name']
                            }}</a>
                    </li>
                    @endforeach
                </ul>
                <span class="movie-info__release-date">{{ \Carbon\Carbon::parse($movie['release_date'])->format('Y')
                    }}</span>
            </div>
            <p class="movie-info__description">{{ $movie['overview'] }}</p>
            <div class="movie-info__buttons">
                @if($trailer)
                <a target="_blank" href="https://www.youtube.com/watch?v={{$trailer['key']}}"
                    class="movie-info__button movie-info__button--colored">Watch trailer</a>
                @endif
                @if($tmdb)
                <a target="_blank" href="{{$tmdb['link']}}" class="movie-info__button">Visit TMDB</a>
                @endif
                <div class="movie-info__spacer"></div>
                <livewire:desktop-lists :movie="$movie" />
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
                {{ number_format($movie['vote_average'], 1) }}
            </div>
            <livewire:mobile-lists :movie="$movie" />
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
            <span class="movie-moile-info__release-date">{{ \Carbon\Carbon::parse($movie['release_date'])->format('Y')
                }}</span>
        </div>
        <p class="movie-mobile-info__description">{{ $movie['overview'] }}</p>
        <div class="movie-mobile-info__buttons">
            @if($trailer)
            <a target="_blank" href="https://www.youtube.com/watch?v={{$trailer['key']}}"
                class="movie-mobile-info__button movie-mobile-info__button--colored">Watch trailer</a>
            @endif
            @if($tmdb)
            <a target="_blank" href="{{$tmdb['link']}}" class="movie-mobile-info__button">Visit Just Watch</a>
            @endif
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
                <img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'] }}" alt=""
                    class="movie-more__poster">
                <div class="movie-more__socials">
                    @if($externalIds['facebook_id'])
                    <a href="https://www.facebook.com/{{$externalIds['facebook_id']}}" target="_blank"><img
                            class="movie-more__social movie-more__social--facebook"
                            src="{{asset('img/facebook-icon.png')}}" alt=""></a>
                    @endif
                    @if($externalIds['instagram_id'])
                    <a href="https://www.instagram.com/{{$externalIds['instagram_id']}}" target="_blank"><img
                            class="movie-more__social movie-more__social--instagram"
                            src="{{asset('img/instagram-icon.png')}}" alt=""></a>
                    @endif
                    @if($externalIds['twitter_id'])
                    <a href="https://www.twitter.com/{{$externalIds['twitter_id']}}" target="_blank"><img
                            class="movie-more__social movie-more__social--twitter"
                            src="{{asset('img/twitter-icon.png')}}" alt=""></a>
                    @endif
                    @if($movie['homepage'])
                    <a href="{{$movie['homepage']}}" target="_blank"><img
                            class="movie-more__social movie-more__social--website"
                            src="{{asset('img/website-icon.png')}}" alt=""></a>
                    @endif
                </div>
            </div>
            <div class="movie-more__info">
                <div class="movie-more__info-column">
                    <h4 class="movie-more__info-heading">Team</h4>
                    <div class="movie-more__info-details">
                        @if($writer)
                        <div class="movie-more__info-detail">
                            <b>Writer </b> {{$writer['name']}}
                        </div>
                        @endif
                        @if($director)
                        <div class="movie-more__info-detail">
                            <b>Director </b> {{$director['name']}}
                        </div>
                        @endif
                        @if($casting)
                        <div class="movie-more__info-detail">
                            <b>Casting </b> {{$casting['name']}}
                        </div>
                        @endif
                        @if($story)
                        <div class="movie-more__info-detail">
                            <b>Story </b> {{$story['name']}}
                        </div>
                        @endif
                        @if($characters)
                        <div class="movie-more__info-detail">
                            <b>Characters </b> {{$characters['name']}}
                        </div>
                        @endif
                        @if($stunt)
                        <div class="movie-more__info-detail">
                            <b>Characters </b> {{$stunt['name']}}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="movie-more__info-column">
                    <h4 class="movie-more__info-heading">Information</h4>
                    <div class="movie-more__info-details">
                        <div class="movie-more__info-detail">
                            <b>Status </b> {{$movie['status']}}
                        </div>
                        <div class="movie-more__info-detail">
                            <b>Runtime </b> {{$movie['runtime']}} min
                        </div>
                        <div class="movie-more__info-detail">
                            <b>Budget </b> ${{ number_format($movie['budget'], 2) }}
                        </div>
                        <div class="movie-more__info-detail">
                            <b>Revenue </b> ${{ number_format($movie['revenue'], 2) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="movie-more__actors">
            <h2 class="movie-more__actors-heading">Actors</h2>
            <div class="movie-more__actors-wrapper">
                @foreach ($casts as $actor)
                <div class="movie-more__actor">
                    @if($actor['profile_path'])
                    <img src="{{ 'https://image.tmdb.org/t/p/w200'.$actor['profile_path'] }}" alt=""
                        class="movie-more__actor-photo">
                    @else
                    <img src="{{'https://placehold.co/200x300?text=No+Image'}}" alt="" class="movie-more__actor-photo">
                    @endif
                    <h5 class="movie-more__actor-name">{{ $actor['name'] }}</h5>
                    <span class="movie-more__actor-role">{{ $actor['character'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
        <div class="movie-more__similar">
            <h2 class="movie-more__similar-heading">Similar movies</h2>
            <div class="movie-more__similar-wrapper">
                <div class="swiper swiper-similar movie-more__similar-movies">
                    <div class="swiper-wrapper movie-more__similar-container">
                        @foreach($similarMovies as $similarMovie)
                        <a href="{{route('movie', $similarMovie['id'])}}" class="swiper-slide movie-more__similar-item">
                            @if($similarMovie['poster_path'])
                            <img src="{{ 'https://image.tmdb.org/t/p/w500'.$similarMovie['poster_path'] }}"
                                class="movie-more__similar-image" />
                            @else
                            <img src="{{'https://placehold.co/200x300?text=No+Image'}}"
                                class="movie-more__similar-image" />
                            @endif
                            <h5 class="movie-more__similar-title">{{ $similarMovie['title'] }}</h5>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="movie-more__similar-controls">
                <div class="movie-more__similar-line"></div>
                <div class="movie-more__similar-arrows">
                    <div class="movie-more__similar-arrow-wrapper movie-more__similar-arrow-wrapper--prev">
                        <img class="movie-more__similar-arrow" src="{{asset('img/arrow-left.png')}}" alt="">
                    </div>
                    <div class="movie-more__similar-arrow-wrapper movie-more__similar-arrow-wrapper--next">
                        <img class="movie-more__similar-arrow" src="{{asset('img/arrow-right.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection

@section('scripts')
<script>

</script>
