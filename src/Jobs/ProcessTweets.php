<?php

namespace parthrai\twitter\Jobs;

//use App\Jobs;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProcessTweets implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $tweet;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($tweet)
    {
        $this->tweet = $tweet;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $tweet = json_decode($this->tweet,true);
        var_dump($tweet['text']) . PHP_EOL;
        var_dump($tweet['id_str']) . PHP_EOL;
    }
}