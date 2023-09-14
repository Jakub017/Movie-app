<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;



class SearchForm extends Component
{
    public $query = '';
    public $apiKey = '';
    
    public function render()
    {
        $this->apiKey = env('TMDB_API_KEY');
        $defaultMovies = Http::get("https://api.themoviedb.org/3/movie/popular?api_key={$this->apiKey}")->json()['results'];
        $movies = Http::get("https://api.themoviedb.org/3/search/movie?query=$this->query&api_key={$this->apiKey}")->json()['results'];
        return view('livewire.search-form', compact('movies', 'defaultMovies'));
    }
}
