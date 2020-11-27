<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\UsersDirectory;
use Twilio\Rest\Client;
use Carbon\Carbon;

class SetTime extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'set:time';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Schedule Messages to be sent';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        print_r("Reminder Daemon Started \n");
        while (true) {
            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_AUTH_TOKEN");
            $twilio_number = getenv("TWILIO_NUMBER");
            $twilio_client = new Client($account_sid, $auth_token);
            $now = Carbon::now('Africa/Lagos')->toDateTimeString();
            $timers = UsersDirectory::where('timezonestamp', '=', $now)->get();
            foreach ($timers as $timer) {
                $sums = explode(',' , $timer->phone);
                // $sums = $timer->phone;
                foreach ($sums as $sum) { 
                    $twilio_client->messages->create($sum,
                        array("from" => $twilio_number, "body" => $timer->message));
                    $timer->save();
                }
            }
            \sleep(1);
        }
    }
}
