<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Movie;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class DesktopLists extends Component
{
    public $movie;
    public $isFavourited = false;
    public $isWatchlisted = false;

    public function mount($movie)
    {
        $this->movie = $movie['id'];
        if(Auth::user()) {
            $user = User::find(Auth::id());
            $this->isFavourited = $user->favourites()->where('favourites.movie_id', $this->movie)->exists();
            $this->isWatchlisted = $user->watchlists()->where('watchlists.movie_id', $this->movie)->exists();
        }
    }

    public function favourite()
    {
        if(Auth::user()) {
                        
            // Jeśli film o podanym id nie istnieje w tabeli movies to go dodaj
            if(!(Movie::where('movie_id', $this->movie)->first())) {
                    Movie::create([
                    'movie_id' => $this->movie
                ]);
            }

            $user = User::find(Auth::id());
            $this->isFavourited = !$this->isFavourited;
            $user->favourites()->toggle($this->movie);
            
        } else {
            return redirect()->route('login');
        }
    }

    public function watchlist()
   {
        if(Auth::user()) {
            
            // Jeśli film o podanym id nie istnieje w tabeli movies to go dodaj
            if(!(Movie::where('movie_id', $this->movie)->first())) {
                    Movie::create([
                    'movie_id' => $this->movie
                ]);
            }
        
            $user = User::find(Auth::id());
            $this->isWatchlisted = !$this->isWatchlisted;
            $user->watchlists()->toggle($this->movie); 
            
        } else {
            return redirect()->route('login');
        }
        
    }

    public function render()
    {
        return view('livewire.desktop-lists');
    }
}
