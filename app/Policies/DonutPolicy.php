<?php

namespace App\Policies;

use App\User;
use App\Donut;

use Illuminate\Auth\Access\HandlesAuthorization;

class DonutPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Donut $donut)
    {
        return $user->id == $donut->user_id;
    }
    
    public function delete(User $user, Donut $donut)
    {
        return $user->id == $donut->user_id;
    }
    
    public function __construct()
    {
        //
    }
}
