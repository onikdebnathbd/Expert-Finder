<?php

namespace App\Providers;

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

        //Define resource gate for users, roles, permissions & categories
        //where users means: users.viewAny, users.create, users.update, users.delete and similar for roles, permissions & categories
        Gate::resource('admins', 'App\Policies\AdminPolicy');
        Gate::resource('roles', 'App\Policies\RolePolicy');
        Gate::resource('permissions', 'App\Policies\PermissionPolicy');
        Gate::resource('categories', 'App\Policies\CategoryPolicy');
        Gate::resource('countries', 'App\Policies\CountryPolicy');
        Gate::resource('divisions', 'App\Policies\DivisionPolicy');

        //Define publish gate for categories, countries, divisions
        Gate::define('categories.publish', 'App\Policies\CategoryPolicy@publish');
        Gate::define('countries.publish', 'App\Policies\CountryPolicy@publish');
        Gate::define('divisions.publish', 'App\Policies\DivisionPolicy@publish');

        //Define view_create gate for admins, roles, categories, countries, divisions
        Gate::define('admins.view_create', 'App\Policies\AdminPolicy@view_create');
        Gate::define('roles.view_create', 'App\Policies\RolePolicy@view_create');
        Gate::define('categories.view_create', 'App\Policies\CategoryPolicy@view_create');
        Gate::define('countries.view_create', 'App\Policies\CountryPolicy@view_create');
        Gate::define('divisions.view_create', 'App\Policies\DivisionPolicy@view_create');

        //Define edit_delete gate for admins & roles, countries, divisions
        Gate::define('categories.edit_delete', 'App\Policies\CategoryPolicy@edit_delete');
        Gate::define('countries.edit_delete', 'App\Policies\CountryPolicy@edit_delete');
        Gate::define('divisions.edit_delete', 'App\Policies\DivisionPolicy@edit_delete');

        //Define gates for Expert & Client
        Gate::define('expert.profession', 'App\Policies\UserPolicy@profession');
        Gate::define('expert.education', 'App\Policies\UserPolicy@education');
        Gate::define('client.ad', 'App\Policies\UserPolicy@ad');
    }
}
