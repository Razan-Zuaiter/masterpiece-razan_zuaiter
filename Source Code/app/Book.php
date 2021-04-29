<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "books";
    public $primaryKey = 'book_id';
    public $timestamps = true;

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
    public function orders()
    {
        return $this->belongsToMany('App\Order', 'order_id');
    }
    public function ordersBook()
    {
        return $this->belongsTo('App\OrderProduct', 'orders_books_id');
    }
    public function shelves()
    {
        return $this->hasMany(Shelves::class);
    }
}
