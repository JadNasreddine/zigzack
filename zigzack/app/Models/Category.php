<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    // A category can belong to many movies
    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
}
