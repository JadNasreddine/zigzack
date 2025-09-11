<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable = ['name', 'dob'];

    // An actor can play in many movies
    public function movies() {
    return $this->belongsToMany(Movie::class, 'movie_actor'); // specify actual pivot table
}
}
