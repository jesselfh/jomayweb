<?php

namespace App\Models;

class News extends Model
{
    protected $fillable = ['title', 'body',  'news_category_id', 'excerpt', 'slug'];

    public function newsCategory()
    {
        return $this->belongsTo(NewsCategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

