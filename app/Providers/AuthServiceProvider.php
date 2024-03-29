<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function ($user) {
            return $user->role === 'admin';
        });

        Gate::define('isTechnician', function ($user) {
            return $user->role === 'technician';
        });

        Gate::define('isOfficeAssistant', function ($user) {
            return $user->role === 'office_assistant';
        });
        
        Gate::define('isOperator', function ($user) {
            return $user->role === 'operator';
        });
        Passport::routes();


        //
    }
}
