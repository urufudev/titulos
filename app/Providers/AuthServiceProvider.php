<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'Spatie\Permission\Models\Role' => 'App\Policies\RolePolicy',
        'Models\Carrer' => 'App\Policies\CarrerPolicy',
        'Models\Institute' => 'App\Policies\InstitutePolicy',
        'Models\Student' => 'App\Policies\StudentPolicy',
        'Models\User' => 'App\Policies\UserPolicy',

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //
        Gate::before(function (User $user, $ability) {
            if ($user->hasRole('Administrador')) return true;
        });
    }
}
