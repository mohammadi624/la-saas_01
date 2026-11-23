<?php

namespace Saas\PlatformConfig;

use Illuminate\Support\ServiceProvider;
use Saas\PlatformConfig\Services\BillingCalculatorService;
use Saas\PlatformConfig\Services\RegistrationPolicyService;
use Saas\PlatformConfig\Services\SettingsService;

class PlatformConfigServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/platform-config.php', 'platform-config');

        $this->app->singleton(SettingsService::class);
        $this->app->singleton(RegistrationPolicyService::class);
        $this->app->singleton(BillingCalculatorService::class);
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/../routes/admin.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'platform-config');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/platform-config.php' => config_path('platform-config.php'),
            ], 'platform-config-config');

            $this->publishes([
                __DIR__ . '/../database/migrations' => database_path('migrations'),
            ], 'platform-config-migrations');

            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/platform-config'),
            ], 'platform-config-views');
        }
    }
}
