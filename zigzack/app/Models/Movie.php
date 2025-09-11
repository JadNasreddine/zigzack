<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'description', 'release_date', 'poster'];

    // Movie can belong to many categories
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    // Movie can have many actors
    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }

    // Movie can have many directors
    public function directors()
    {
        return $this->belongsToMany(Director::class);
    }
}
