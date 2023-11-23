@extends('layouts.main')

@section('title', $categoryName . ' - Movie App')

@section('content')

<div class="category">
    <div class="category__banner">
        <h2 class="category__name">Category: {{ $categoryName }}</h2>
    </div>

    <div class="category__wrapper">
        @foreach($movies as $movie)
        <div class="category__movie">
            <a href="{{route('movie', $movie['id'])}}" class="category__movie-link">
                <img class="category__movie-image"
                    src="{{ 'https://image.tmdb.org/t/p/original'. $movie['poster_path'] }}" alt="">
                <h2 class="category__movie-title">{{ $movie['title'] }}</h2>
            </a>
            <div class="category__movie-info">
                <div class="category__movie-rating"><i class="category__star fa-solid fa-star"></i>{{
                    $movie['vote_average'] }}</div>

                |
                <span class="category__movie-date">{{ \Carbon\Carbon::parse($movie['release_date'])->format('d.m.Y')
                    }}</span>
            </div>
            <p class="category__movie-excerpt">{{Illuminate\Support\Str::limit($movie['overview'], 100) }}</p>
        </div>
        @endforeach
    </div>
</div>

@endsection
