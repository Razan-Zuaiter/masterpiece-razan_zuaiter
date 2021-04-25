<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";

    public function books()
    {
        return $this->hasMany('App\Book', 'book_id', 'book_id');
    }
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_id', 'id');
    }
    public function orderBook()
    {
        return $this->belongsTo('App\OrderBook', 'orders_books_id');
    }
}
