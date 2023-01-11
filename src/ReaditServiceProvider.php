<?php

namespace Pinweb\Readit;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Pinweb\Readit\Commands\ReaditCommand;

class ReaditServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('readit')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(ReaditCommand::class);
    }
}
