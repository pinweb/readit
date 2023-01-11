<?php

namespace Pinweb\Readit\Commands;

use Illuminate\Console\Command;

class ReaditCommand extends Command
{
    public $signature = 'readit';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
