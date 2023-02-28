<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data  = array('data'=>'Cron Test');
        Mail::send('mail',$data, function($message){
            $message->to('liaquatali.centosquare@gmail.com')
            ->subject('Crone testing Mail example');
        });
    }
}
