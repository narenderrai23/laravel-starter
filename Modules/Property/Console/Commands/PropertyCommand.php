<?php

namespace Modules\Property\Console\Commands;

use Illuminate\Console\Command;

class PropertyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:PropertyCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Property Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
