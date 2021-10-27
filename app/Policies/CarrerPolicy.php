<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Carrer;
use Illuminate\Auth\Access\HandlesAuthorization;

class CarrerPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('lista carreras');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Carrer  $carrer
     * @return mixed
     */
    public function view(User $user, Carrer $carrer)
    {
        return $user->can('ver carreras');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('registrar carreras');
    }


    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Carrer  $carrer
     * @return mixed
     */
    public function update(User $user, Carrer $carrer)
    {
        return $user->can('editar carreras');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Carrer  $carrer
     * @return mixed
     */
    public function delete(User $user, Carrer $carrer)
    {
        return $user->can('eliminar carreras');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Carrer  $carrer
     * @return mixed
     */
    public function restore(User $user, Carrer $carrer)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Carrer  $carrer
     * @return mixed
     */
    public function forceDelete(User $user, Carrer $carrer)
    {
        return $user->can('eliminar carreras');
    }
}
