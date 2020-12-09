<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['isbn','title','price','publisher','published'];
    //a.検証ルール(バリデーションの追加)
    public static $rules = [
        'isbn' => 'required',
        'title' => 'required|string|max:10',
        'price' => 'integer|min:0',
        'publisher' => 'required|in:翔泳社,技術論者社,日経BP,秀和システム,インプレス',
        'published' => 'required|date',
    ];

    //reviewテーブルへの参照
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
