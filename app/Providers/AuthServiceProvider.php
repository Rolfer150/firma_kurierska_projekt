<?php

namespace App\Providers;

use App\Enums\UserRole;
use App\Models\Przesylka;
use App\Models\User;
use App\Policies\PrzesylkaPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Przesylka::class => PrzesylkaPolicy::class,
    ];

    /**
     * Determine if the given Model can be Viewed by the user.
     *
     * @param  User  $user
     * @param  Przesylka $digitizingorder
     * @return bool
     */
    public function view(User $user, Przesylka $przesylka)
    {
        return $user->id === $przesylka->user_id;
    }

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $this->defineUserRoleGate('isAdmin', UserRole::ADMIN);
        $this->defineUserRoleGate('isUser', UserRole::USER);
        $this->defineUserRoleGate('isDeliveryman', UserRole::DELIVERYMAN);
    }

    private function defineUserRoleGate(string $name, string $role): void
    {
        Gate::define($name, function (User $user) use ($role)
        {
            return $user->role == $role;
        });
    }
}
