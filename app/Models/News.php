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

    public function scopeWithOrder($query, $order)
    {
        //不同的排序，使用不同的数据读取逻辑
        switch($order){
            case 'recent':
                $query = $this->recent();
                break;

            default:
                $query = $this->recentReplied();
                break;
        }

        //预防N + 1问题
        return $query->with('user','newsCategory');
    }

    public function scopeRecent($query)
    {
        return $query->orderBy('created_at','desc');
    }

    public function scopeRecentReplied($query)
    {
        return $query->orderBy('updated_at', 'desc');
    }
}

