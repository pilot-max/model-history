<?php

namespace PilotMax\ModelHistory\Commands;

use Illuminate\Console\Command;

class ModelHistoryCommand extends Command
{
    public $signature = 'model-history';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
