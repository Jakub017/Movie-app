@extends('layouts.main')

@section('title', 'Search - Movie App')

@section('content')

<div class="search">
    <form method="POST" action="#" class="search__form">
        <input type="text" name="search" id="search" class="search__input" placeholder="Search for a movie">
        <i class="search__icon fa-solid fa-magnifying-glass"></i>
    </form>
</div>

@endsection