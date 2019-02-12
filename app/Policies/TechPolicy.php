<?php

namespace App\Policies;

use App\User;
use App\Tech;
use Illuminate\Auth\Access\HandlesAuthorization;

class TechPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the tech.
     *
     * @param  \App\User  $user
     * @param  \App\Tech  $tech
     * @return mixed
     */
    public function before($user)
    {
        if($user->isAdmin()){
            return true;
        }

    }
    public function view(User $user, Tech $tech)
    {
        
    }

    /**
     * Determine whether the user can create teches.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
      
    }

    /**
     * Determine whether the user can update the tech.
     *
     * @param  \App\User  $user
     * @param  \App\Tech  $tech
     * @return mixed
     */
    public function update(User $user, Tech $tech)
    {
    }

    /**
     * Determine whether the user can delete the tech.
     *
     * @param  \App\User  $user
     * @param  \App\Tech  $tech
     * @return mixed
     */
    public function delete(User $user, Tech $tech)
    {
        
    }

    /**
     * Determine whether the user can restore the tech.
     *
     * @param  \App\User  $user
     * @param  \App\Tech  $tech
     * @return mixed
     */
    public function restore(User $user, Tech $tech)
    {
        
    }

    /**
     * Determine whether the user can permanently delete the tech.
     *
     * @param  \App\User  $user
     * @param  \App\Tech  $tech
     * @return mixed
     */
    public function forceDelete(User $user, Tech $tech)
    {
        //
    }
}
