<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Recruit;

class RecruitPolicy extends Policy
{
    public function update(User $user, Recruit $recruit)
    {
        //只有admin管理员才能编辑
        return $user->id == 1 ? true : false;
    }

    public function destroy(User $user, Recruit $recruit)
    {
        //只有admin管理员才能删除
        return $user->id == 1 ? true : false;
    }
}
