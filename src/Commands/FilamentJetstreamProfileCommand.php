<?php

namespace InvadersXX\FilamentJetstreamProfile\Commands;

use Illuminate\Console\Command;

class FilamentJetstreamProfileCommand extends Command
{
    public $signature = 'filament-jetstream-profile';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
