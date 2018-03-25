<?php

namespace App\Models;

class News extends Model
{
    protected $fillable = ['title', 'body', 'user_id', 'news_category_id', 'reply_count', 'view_count', 'last_reply_user_id', 'order', 'excerpt', 'slug'];
}
