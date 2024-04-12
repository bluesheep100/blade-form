<?php

namespace Bluesheep\BladeForm\Commands;

use Illuminate\Console\Command;

class BladeFormCommand extends Command
{
    public $signature = 'blade-form';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
