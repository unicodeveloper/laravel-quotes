<?php

/*
 * This file is part of the Laravel Quotes package.
 *
 * (c) Prosper Otemuyiwa <prosperotemuyiwa@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
