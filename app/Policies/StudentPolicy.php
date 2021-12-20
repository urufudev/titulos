<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Student;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('lista estudiantes');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Student  $tecnologic
     * @return mixed
     */
    public function view(User $user, Student $tecnologic)
    {
        return $user->can('ver estudiantes');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('registrar estudiantes');
    }


    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Student  $tecnologic
     * @return mixed
     */
    public function update(User $user, Student $tecnologic)
    {
        return $user->can('editar estudiantes');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Student  $tecnologic
     * @return mixed
     */
    public function delete(User $user, Student $tecnologic)
    {
        return $user->can('eliminar estudiantes');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Student  $tecnologic
     * @return mixed
     */
    public function restore(User $user, Student $tecnologic)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Student  $tecnologic
     * @return mixed
     */
    public function forceDelete(User $user, Student $tecnologic)
    {
        return $user->can('eliminar estudiantes');
    }
}
