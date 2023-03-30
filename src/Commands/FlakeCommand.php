<?php

namespace Ejntaylor\Flake\Commands;

use Illuminate\Console\Command;

class FlakeCommand extends Command
{
    public $signature = 'flake';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
