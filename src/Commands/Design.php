<?php

namespace Unicodeveloper\Quotes\Commands;

use Illuminate\Console\Command;
use Unicodeveloper\Quotes\Quotes;

class Design extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'design:inspire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display a design quote';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $quotes = new Quotes();
        $this->comment(PHP_EOL.$quotes->design()->random().PHP_EOL);
    }
}
