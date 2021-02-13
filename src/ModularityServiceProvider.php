<?php

namespace Acadelib\Modularity;

use Acadelib\Modularity\Console\ModuleMakeCommand;
use Illuminate\Support\ServiceProvider;

class ModularityServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('modularity', function () {
            return new ModuleManager();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ModuleMakeCommand::class,
            ]);
        }
    }
}
