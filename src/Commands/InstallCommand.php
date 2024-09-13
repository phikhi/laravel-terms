<?php

namespace Phikhi\Terms\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    public $signature = 'terms:install';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
