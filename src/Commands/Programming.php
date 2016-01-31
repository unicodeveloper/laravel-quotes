<?php

namespace Unicodeveloper\Quotes\Commands;

use Illuminate\Console\Command;
use Unicodeveloper\Quotes\Quotes;

class Programming extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'programming:inspire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display a programming, hacking and coding quote';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $quotes = new Quotes();
        $this->comment(PHP_EOL.$quotes->programming()->random().PHP_EOL);
    }
}
