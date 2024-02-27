<?php

namespace App\Policies;

use App\Models\Artisan;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\GenericUser;

class ProfilePolicy
{

    public function update(GenericUser $user, Artisan $artisan): bool
    {
        return $user->id === $artisan->id ;

    }

}
