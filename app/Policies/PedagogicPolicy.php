<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Pedagogic;
use Illuminate\Auth\Access\HandlesAuthorization;

class PedagogicPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('lista pedagogicos');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pedagogic  $pedagogic
     * @return mixed
     */
    public function view(User $user, Pedagogic $pedagogic)
    {
        return $user->can('ver pedagogicos');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('registrar pedagogicos');
    }


    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pedagogic  $pedagogic
     * @return mixed
     */
    public function update(User $user, Pedagogic $pedagogic)
    {
        return $user->can('editar pedagogicos');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pedagogic  $pedagogic
     * @return mixed
     */
    public function delete(User $user, Pedagogic $pedagogic)
    {
        return $user->can('eliminar pedagogicos');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pedagogic  $pedagogic
     * @return mixed
     */
    public function restore(User $user, Pedagogic $pedagogic)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pedagogic  $pedagogic
     * @return mixed
     */
    public function forceDelete(User $user, Pedagogic $pedagogic)
    {
        return $user->can('eliminar pedagogicos');
    }
}
