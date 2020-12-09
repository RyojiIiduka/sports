<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //booksテーブルへの参照
    public function books()
    {
        return $this->belongsTo('App\Book');
    }
}
