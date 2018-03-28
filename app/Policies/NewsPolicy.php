<?php

namespace App\Policies;

use App\Models\User;
use App\Models\News;

class NewsPolicy extends Policy
{
    public function update(User $user, News $news)
    {
        //只有当新闻关联作者的 ID 等于当前登录用户 ID 时候才放行(允许编辑)
        return $news->user_id == $user->id;
    }

    public function destroy(User $user, News $news)
    {
        return true;
    }
}
