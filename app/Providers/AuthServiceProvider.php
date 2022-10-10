<?php

namespace App\Providers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();



        try {
            $roles=Role::all();
            foreach($roles as $role){
                Gate::define($role->name,function($user) use ($role){
                    return $user->hasRole($role->name);
                });
            }


            $permissions=Permission::all();
            foreach($permissions as $permission){
                Gate::define($permission->name,function($user) use ($permission){
                    return $user->hasPermission($permission->name);
                });
            }



        } catch (\Exception $e) {

            return $e;
        }
        //
    }
}
