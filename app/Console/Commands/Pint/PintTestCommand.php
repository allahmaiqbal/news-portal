<?php

namespace App\Console\Commands\Pint;

use Illuminate\Console\Command;

class PintTestCommand extends PintRunCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pint:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Inspect code for style errors without actually changing the files';

    /**
     * Command flags for the console command.
     *
     * @var string
     */
    protected $flags = '--test';
}
