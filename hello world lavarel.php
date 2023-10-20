<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
// this is after bash artisa: "php artisan make:command HelloWorld" and "protected $signature = 'hello:world';" and "public function handle() {  $this->info('Hello, World!'); }


class HelloWorld extends Command
{
    protected $signature = 'hello:world';
    protected $description = 'A simple Hello, World! command';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('Hello, World!');
    }
}