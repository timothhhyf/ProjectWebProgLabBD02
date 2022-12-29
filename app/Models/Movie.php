<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Actor;
use App\Models\Genre;

class Movie extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany(User::class)->withPivot('status');
    }

    public function actors(){
        return $this->belongsToMany(Actor::class)->withPivot('character');
    }

    public function genres(){
        return $this->belongsToMany(Genre::class);
    }
}
