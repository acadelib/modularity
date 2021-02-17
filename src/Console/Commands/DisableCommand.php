<?php

namespace Acadelib\Modularity\Console\Commands;

use Acadelib\Modularity\ModuleManager;
use Illuminate\Console\Command;

class DisableCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:disable {name : The name of the module}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Disable the given module';

    /**
     * The module manager instance.
     *
     * @var \Acadelib\Modularity\ModuleManager
     */
    protected $manager;

    /**
     * Create a new command instance.
     *
     * @param  \Acadelib\Modularity\ModuleManager  $manager
     * @return void
     */
    public function __construct(ModuleManager $manager)
    {
        parent::__construct();

        $this->manager = $manager;
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->manager->disable($this->argument('name'));
    }
}
