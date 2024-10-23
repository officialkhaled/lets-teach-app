<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];
    
    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        
        Gate::define('admin-only', function (User $user) {
            return $user->isAdmin();
        });
        
        Gate::define('tutor-only', function (User $user) {
            return $user->isTutor();
        });
        
        Gate::define('parent-only', function (User $user) {
            return $user->isParent();
        });
    }
}
