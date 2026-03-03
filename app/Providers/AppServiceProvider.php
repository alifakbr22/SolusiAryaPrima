<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            if (Schema::hasTable('settings')) {
                View::share('siteSettings', Setting::first());
            }
            if (Schema::hasTable('menus')) {
                View::share('navMenus', \App\Models\Menu::whereNull('parent_id')
                    ->where('is_active', true)
                    ->with(['children' => function($query) {
                        $query->where('is_active', true)->orderBy('sort_order');
                    }])
                    ->orderBy('sort_order')
                    ->get());
            }
        } catch (\Exception $e) {
            // Do nothing if the database is not ready
        }
    }
}
