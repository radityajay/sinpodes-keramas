<?php

namespace App\Providers;

use App\RolePermission;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        if (!app()->runningInConsole()) {

            Blade::if('can', function ($permission) {
                try {
                    $authRoles = auth()->user()->role_id;
                    $roleHasPermission = RolePermission::where('role_id', $authRoles)
                        ->whereIn('permission_id', $permission)
                        ->first();

                    if ($roleHasPermission) {
                        return true;
                    }

                    return false;
                } catch (\Exception $e) {
                    return false;
                }
            });
        }
    }
}
