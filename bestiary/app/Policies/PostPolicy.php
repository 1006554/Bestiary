<?php

namespace App\Policies;

use App\Models\User;
use App\Models\creature;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\creature  $creature
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, creature $creature)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {

         //return $user->id === user_id;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\creature  $creature
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, creature $creature)
    {
        //  return $user->id === $post->user_id;
    }

    /**
     * De*ermine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\creature  $creature
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, creature $creature)
    {
        /*if ($user->isAdministrator()) {
            return true;
        } else {
            return 'You are not authorized to delete this post';
        }*/
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\creature  $creature
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, creature $creature)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\creature  $creature
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, creature $creature)
    {
        //
    }
}
