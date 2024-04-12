<?php

namespace Bluesheep\BladeForm;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Bluesheep\BladeForm\Commands\BladeFormCommand;

class BladeFormServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('blade-form')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_blade-form_table')
            ->hasCommand(BladeFormCommand::class);
    }
}
