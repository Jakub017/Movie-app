<div class="search">
    <form method="POST" action="#" class="search__form">
        @csrf
        <input wire:model.live="query" type="text" name="search" id="search" class="search__input"
            placeholder="Search for a movie">
        <i class="search__icon fa-solid fa-magnifying-glass"></i>
    </form>
    <div class="search__wrapper">
        @if(!empty($movies))
        @foreach($movies as $movie)
        <div class="search__movie">
            <a href="{{route('movie', $movie['id'])}}" class="search__movie-link">
                @if($movie['backdrop_path'])
                <img src="{{'https://image.tmdb.org/t/p/w400'.$movie['backdrop_path']}}" alt=""
                    class="search__movie-image">
                @else
                <img src="{{'https://placehold.co/600x400?text=No+Image'}}" alt="" class="search__movie-image">
                @endif
                <h3 class="search__movie-title">{{ $movie['title'] }}</h3>
            </a>
        </div>
        @endforeach
        @else
        @foreach($defaultMovies as $defaultMovie)
        <div class="search__movie">
            <a href="{{route('movie', $defaultMovie['id'])}}" class="search__movie-link">
                @if($defaultMovie['backdrop_path'])
                <img src="{{'https://image.tmdb.org/t/p/w400'.$defaultMovie['backdrop_path']}}" alt=""
                    class="search__movie-image">
                @else
                <img src="{{'https://placehold.co/600x400?text=No+image'}}" alt="" class="search__movie-image">
                @endif
                <h3 class="search__movie-title">{{ $defaultMovie['title'] }}</h3>
            </a>
        </div>
        @endforeach
        @endif
    </div>
</div>