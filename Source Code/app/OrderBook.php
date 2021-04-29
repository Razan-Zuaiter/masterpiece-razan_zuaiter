<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderBook extends Model
{
    protected $table = "order_books";
    public $primaryKey = 'orders_books_id';
    public function book()
    {
        return $this->hasOne('App\Book', 'book_id', 'book_id');
    }
    public function orders()
    {
        return $this->hasOne('App\Order', 'order_id', 'order_id');
    }
}
