@extends('layouts.main')

@section('title', 'Favourites - Movie App')

@section('content')

<div class="list">
    <div class="list__wrapper">
        <h1 class="list__heading">Your watchlist</h1>
        <div class="list__movies">
            @foreach($movies as $movie)
            <div href="{{route('movie', $movie['id'])}}" class="list__movie">
                <a href="{{route('movie', $movie['id'])}}" class="list__link">
                    <img class="list__image" src="{{'https://image.tmdb.org/t/p/w500'.$movie['poster_path']}}" />
                    <h3 class="list__title">{{$movie['title']}}</h3>
                </a>
                <div class="list__info">
                    <span class="list__rating"><img class="list__rating-star" src="{{asset('img/red_star.png')}}"
                            alt="">{{number_format($movie['vote_average'], 1)}}</span>
                    <span>|</span>
                    <span class="list__year">{{
                        \Carbon\Carbon::parse($movie['release_date'])->format('d.m.Y') }}</span>
                </div>
                <p class="list__excerpt">
                    {{Illuminate\Support\Str::limit($movie['overview'], 120) }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
