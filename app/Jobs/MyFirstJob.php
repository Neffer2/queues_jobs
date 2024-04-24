<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class MyFirstJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $sms;
    /**
     * Create a new job instance.
     */
    public function __construct($sms) {
        $this->sms = $sms;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        echo $this->sms;
    }
}
