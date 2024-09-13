<?php

namespace Phikhi\Terms;

use Phikhi\Terms\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TermsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('terms')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_terms_table')
            ->hasCommand(InstallCommand::class);
    }
}
