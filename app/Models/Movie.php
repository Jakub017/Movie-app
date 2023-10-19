<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['movie_id'];
    
    protected $primaryKey = 'movie_id';

    public function usersFavourited()
    {
        return $this->belongsToMany(User::class, 'favourites', 'movie_id', 'user_id');
    }

    public function usersWatchlisted()
    {
        return $this->belongsToMany(User::class, 'watchlists', 'movie_id', 'user_id');
    }
}
