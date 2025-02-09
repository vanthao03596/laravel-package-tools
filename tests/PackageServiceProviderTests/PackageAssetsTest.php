<?php

namespace Vanthao03596\LaravelPackageTools\Tests\PackageServiceProviderTests;

use Vanthao03596\LaravelPackageTools\Package;

class PackageAssetsTest extends PackageServiceProviderTestCase
{
    public function configurePackage(Package $package)
    {
        $package
            ->name('laravel-package-tools')
            ->hasAssets();
    }

    /** @test */
    public function it_can_publish_the_assets()
    {
        $this
            ->artisan('vendor:publish --tag=package-tools-assets')
            ->assertExitCode(0);

        $this->assertFileExists(public_path('vendor/package-tools/dummy.js'));
    }
}
