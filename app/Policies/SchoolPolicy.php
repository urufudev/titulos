<?php

namespace App\Policies;

use App\Models\User;
use App\Models\School;
use Illuminate\Auth\Access\HandlesAuthorization;

class SchoolPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('lista escuelas');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\School  $school
     * @return mixed
     */
    public function view(User $user, School $school)
    {
        return $user->can('ver escuelas');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('registrar escuelas');
    }


    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\School  $school
     * @return mixed
     */
    public function update(User $user, School $school)
    {
        return $user->can('editar escuelas');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\School  $school
     * @return mixed
     */
    public function delete(User $user, School $school)
    {
        return $user->can('eliminar escuelas');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\School  $school
     * @return mixed
     */
    public function restore(User $user, School $school)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\School  $school
     * @return mixed
     */
    public function forceDelete(User $user, School $school)
    {
        return $user->can('eliminar escuelas');
    }
}
