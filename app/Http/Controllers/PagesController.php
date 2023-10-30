<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class PagesController extends Controller
{

    private $apiKey;

    public function __construct()
    {
        $this->apiKey = env('TMDB_API_KEY');
    }

    public function home(){
        $popularMovies = Http::get("https://api.themoviedb.org/3/movie/popular?api_key={$this->apiKey}")->json()['results'];
        return view('home', compact('popularMovies'));
    }

    public function movie($movieId){
        $movie = Http::get("https://api.themoviedb.org/3/movie/$movieId?api_key={$this->apiKey}")->json();
        $posters = Http::get("https://api.themoviedb.org/3/movie/$movieId/images?api_key={$this->apiKey}")->json()['backdrops'];
        $similarMovies = Http::get("https://api.themoviedb.org/3/movie/$movieId/similar?api_key={$this->apiKey}")->json()['results'];
        $videos = Http::get("https://api.themoviedb.org/3/movie/$movieId/videos?api_key={$this->apiKey}")->json()['results'];
        $actors = Http::get("https://api.themoviedb.org/3/movie/$movieId/credits?api_key={$this->apiKey}")->json()['cast'];
        $response = collect(Http::get("https://api.themoviedb.org/3/movie/$movieId/watch/providers?api_key={$this->apiKey}")->json()['results']);
        $externalIds = Http::get("https://api.themoviedb.org/3/movie/$movieId/external_ids?api_key={$this->apiKey}")->json();

        if(isset($response['US'])) {
            $tmdb = $response['US'];
        } else {
            $tmdb = $response->first(); 
        } 

        $trailer = collect($videos)->first(function($video){
            return $video['type'] === 'Trailer';
        });

        $casts = collect($actors);
        $casts = $casts->sortByDesc('popularity')->where('profile_path', '!=', 'null')->take(7);

        return view('movie', compact('movie', 'posters', 'similarMovies', 'trailer', 'tmdb', 'externalIds', 'casts'));
    }

    public function category($categoryId){
        $movies = Http::get("https://api.themoviedb.org/3/discover/movie?api_key={$this->apiKey}&with_genres=$categoryId")->json()['results'];
        $genres = Http::get("https://api.themoviedb.org/3/genre/movie/list?api_key={$this->apiKey}")->json()['genres'];
        foreach($genres as $genre) {
            if($genre['id'] == $categoryId) {
                $categoryName = $genre['name'];
            }
        }
        return view('category', compact('movies', 'categoryName'));
    }

    public function search() {
        return view('search');
    }

    public function favourites() {
        $user = User::find(Auth::id());
        $favourites = $user->favourites()->get();
        $movies = collect();

        foreach($favourites as $favourite) {
            $movie = Http::get("https://api.themoviedb.org/3/movie/{$favourite->movie_id}?api_key={$this->apiKey}")->json();
            $movies->push($movie);
        }

        return view('favourites', compact('movies'));
    }

    public function watchlist() {
        $user = User::find(Auth::id());
        $watchlists = $user->watchlists()->get();
        $movies = collect();

        foreach($watchlists as $watchlist) {
            $movie = Http::get("https://api.themoviedb.org/3/movie/{$watchlist->movie_id}?api_key={$this->apiKey}")->json();
            $movies->push($movie);
        }

        return view('watchlist', compact('movies'));
    }

}
