<?php

namespace Bluesheep\BladeForm;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasConfigFile();

        $package->hasViewComponents('Bluesheep\\BladeForm\\Views\\Components', 'bladeform');
    }
}
