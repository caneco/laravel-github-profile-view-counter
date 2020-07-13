<?php

namespace Caneco\GithubProfileViewCounter;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class GithubProfileViewCounterServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerRoutes();
        $this->registerResources();
    }

    public function register()
    {
        $this->offerPublishing();
    }

    protected function registerRoutes()
    {
        Route::group([
            'middleware' => 'web',
        ], function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
    }

    protected function registerResources()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'github-profile-view-counter');
    }

    protected function offerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../database/migrations/create_github_profile_view_counter_table.php.stub'
                    => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_github_profile_view_counter_table.php'),
            ], 'migrations');
        }
    }
}
