<?php

namespace Vanthao03596\LaravelPackageTools\Tests\TestClasses;

use Illuminate\Console\Command;

class ThirdTestCommand extends Command
{
    public $name = 'third-test-command';

    public function handle()
    {
        $this->info('output of test command');
    }
}
