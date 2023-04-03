<?php

namespace GvsuWebTeam\Hotels\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\View\View;
use GvsuWebTeam\Hotels\Providers\BreadcrumbsServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/Hotels.php', 'hotels');

        $this->publishConfig();

        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'hotels');
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
        $this->registerRoutes();


        // Breadcrumbs -- Initialize breadcrumb array in the breadcrumbs component.
        // Then Controllers, can add push to it.
        // view()->creator('hotels::components.breadcrumbs', function (View $view) {

        //     $breadcrumbs = $view->breadcrumbs ?? [
        //         // Defaults
        //         ['title'=>'Hotels', 'route' => route('hotels.index')],
        //         ['title'=>'Administrator', 'route' => route('hotels.admin.index')],
        //     ];
        //     $view->with('breadcrumbs', $breadcrumbs);
        // });

    }

    /**
     * Register the package routes.
     *
     * @return void
     */
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        });
    }

    /**
    * Get route group configuration array.
    *
    * @return array
    */
    private function routeConfiguration()
    {
        return [
            'namespace'  => "GvsuWebTeam\Hotels\Http\Controllers"
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Register facade
        $this->app->singleton('hotels', function () {
            return new Hotels;
        });

        // Register BreadcrumbsServiceProvider
        $this->app->register(BreadcrumbsServiceProvider::class);
    }

    /**
     * Publish Config
     *
     * @return void
     */
    public function publishConfig()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../config/Hotels.php' => config_path('Hotels.php'),
            ], 'config');
        }
    }
}
