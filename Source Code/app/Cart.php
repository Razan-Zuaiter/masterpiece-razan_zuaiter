<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = "carts";
    public $primaryKey = 'cart_id';
    public $timestamps = true;

    public function Books()
    {
        return $this->hasMany('App\Book', 'book_id', 'book_id');
    }
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_id', 'id');
    }
}
