<div class="movie-info__actions">
    <i wire:click="favourite"
        class="movie-mobile-info__icon fa-solid fa-heart {{ $isFavourited ? 'movie-info__icon--active' : '' }}"></i>
    <i wire:click="watchlist"
        class="movie-mobile-info__icon fa-solid fa-clock {{ $isWatchlisted ? 'movie-info__icon--active' : '' }}"></i>
</div>