<?php

namespace PilotMax\ModelHistory;

use PilotMax\ModelHistory\Commands\ModelHistoryCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ModelHistoryServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('model-history')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_model-history_table')
            ->hasCommand(ModelHistoryCommand::class);
    }
}
