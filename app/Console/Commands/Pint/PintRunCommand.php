<?php

namespace App\Console\Commands\Pint;

use Illuminate\Console\Command;

class PintRunCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pint:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run pint command to fix code style issues';

    /**
     * Command flags for the console command.
     *
     * @var string
     */
    protected $flags = '';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // pint location
        $pint = base_path('vendor'.DIRECTORY_SEPARATOR.'bin'.DIRECTORY_SEPARATOR.'pint');

        // generate command
        $command = $pint.' '.$this->flags;

        // execute command
        exec($command, $output);

        // print output from command
        $this->comment(implode(PHP_EOL, $output));
    }
}
