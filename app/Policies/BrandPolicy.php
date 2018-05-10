<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Brand;

class BrandPolicy extends Policy
{
    public function update(User $user, Brand $brand)
    {
        // return $brand->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Brand $brand)
    {
        return true;
    }
}
