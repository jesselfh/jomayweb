<?php

namespace App\Observers;

use App\Models\Recruit;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class RecruitObserver
{
    public function saving(Recruit $recruit)
    {
        $recruit->requirement = clean($recruit->requirement, 'user_topic_body');
    }

    public function updating(Recruit $recruit)
    {
        //
    }
}