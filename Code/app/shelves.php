<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shelves extends Model
{
    protected $table = "shelves";

    public function book()
    {
        return $this->hasMany('App\Book', 'book_id', 'book_id');
    }
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_id', 'id');
    }
}
