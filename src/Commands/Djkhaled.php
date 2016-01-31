<?php

namespace Unicodeveloper\Quotes\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use Unicodeveloper\Quotes\Quotes;

class Djkhaled extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'djkhaled:inspire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display a key to success from DJ Khaled';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $quotes = new Quotes();
        $this->comment(PHP_EOL.$quotes->djkhaled()->anotherOne().PHP_EOL);
    }
}
