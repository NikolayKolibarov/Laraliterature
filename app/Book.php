<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function author()
    {
        return $this->belongsTo('App\Author');
    }

    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }

    public function characters()
    {
        return $this->hasMany('App\Character');
    }
}
