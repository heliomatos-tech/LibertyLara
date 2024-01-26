<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
/**
 * Menu
 */
use App\Architecture\Menu\Interfaces\IListMenuRepository;
use App\Architecture\Menu\Interfaces\IListMenuService;
use App\Architecture\Menu\Repositories\ListMenuRepository;
use App\Architecture\Menu\Services\ListMenuService;

/**
 * 
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->menu();

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }

    private function menu()
    {

        $this->app->singleton(
            IListMenuService::class,
            ListMenuService::class
        );
        $this->app->singleton(
            IListMenuRepository::class,
            ListMenuRepository::class
        );
    }
}
