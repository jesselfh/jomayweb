<?php

namespace App\Observers;

use App\Models\News;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class NewsObserver
{
    public function saving(News $news)
    {
        $news->excerpt = make_excerpt($news->body);//make_excerpt是自定义的辅助方法，在helpers.php中定义
    }
}