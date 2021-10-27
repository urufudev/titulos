<?php

namespace App\Policies;

use App\Models\Laboral;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LaboralPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('lista régimen laboral');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Laboral  $laboral
     * @return mixed
     */
    public function view(User $user, Laboral $laboral)
    {
        return $user->can('ver régimen laboral');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('registrar régimen laboral');
    }


    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Laboral  $laboral
     * @return mixed
     */
    public function update(User $user, Laboral $laboral)
    {
        return $user->can('editar régimen laboral');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Laboral  $laboral
     * @return mixed
     */
    public function delete(User $user, Laboral $laboral)
    {
        return $user->can('eliminar régimen laboral');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Laboral  $laboral
     * @return mixed
     */
    public function restore(User $user, Laboral $laboral)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Laboral  $laboral
     * @return mixed
     */
    public function forceDelete(User $user, Laboral $laboral)
    {
        return $user->can('eliminar régimen laboral');
    }
}
