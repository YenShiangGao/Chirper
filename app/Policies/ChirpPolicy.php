<?php

namespace App\Policies;

use App\Models\Chirp;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ChirpPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Chirp $chirp
     * @return Response|bool
     */
    public function view(User $user, Chirp $chirp)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Chirp $chirp
     * @return Response|bool
     */
    public function update(User $user, Chirp $chirp): Response|bool
    {
        return $chirp->user()->is($user);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Chirp $chirp
     * @return Response|bool
     */
    public function delete(User $user, Chirp $chirp): Response|bool
    {
        return $this->update($user, $chirp);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param Chirp $chirp
     * @return Response|bool
     */
    public function restore(User $user, Chirp $chirp)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Chirp $chirp
     * @return Response|bool
     */
    public function forceDelete(User $user, Chirp $chirp)
    {
        //
    }
}
