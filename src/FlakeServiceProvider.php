<?php

namespace Ejntaylor\Flake;

use Ejntaylor\Flake\Commands\FlakeCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FlakeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('flake')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_flake_table')
            ->hasCommand(FlakeCommand::class);
    }
}
