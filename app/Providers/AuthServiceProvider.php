<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        'App\User' => 'App\Policies\UserPolicy',
        'App\Profil' => 'App\Policies\ProfilPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function ($user) {
            return Auth::user()->role->name === 'admin';
            });
        Gate::define('manager_eshop', function ($user) {
            return Auth::user()->role->name === 'manager_eshop';
            });
        Gate::define('manager_blog', function ($user) {
            return Auth::user()->role->name === 'manager_blog';
            });
    }
}
