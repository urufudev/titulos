<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Institute;
use Illuminate\Auth\Access\HandlesAuthorization;

class InstitutePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('lista institutos');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Institute  $institute
     * @return mixed
     */
    public function view(User $user, Institute $institute)
    {
        return $user->can('ver institutos');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('registrar institutos');
    }


    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Institute  $institute
     * @return mixed
     */
    public function update(User $user, Institute $institute)
    {
        return $user->can('editar institutos');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Institute  $institute
     * @return mixed
     */
    public function delete(User $user, Institute $institute)
    {
        return $user->can('eliminar institutos');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Institute  $institute
     * @return mixed
     */
    public function restore(User $user, Institute $institute)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Institute  $institute
     * @return mixed
     */
    public function forceDelete(User $user, Institute $institute)
    {
        return $user->can('eliminar institutos');
    }
}
