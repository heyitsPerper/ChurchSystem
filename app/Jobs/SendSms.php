<?php

namespace App\Jobs;

use App\Models\Announcements;
use App\Models\Consumer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Nexmo\Laravel\Facade\Nexmo;

class SendSms implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $announcement = null;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Announcements $announcement)
    {
        $this->announcement = $announcement;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $consumers = Consumer::where('purok', $this->announcement->purok)->get();

        if ($this->announcement->purok == "all") {
            $consumers = Consumer::all();
        }

        $title = $this->announcement->title;
        $description = $this->announcement->description;

        foreach ($consumers as $consumer) {
            Nexmo::message()->send([
                'to' => $consumer['contact_number'],
                'from' => 'Church of Hilongos',
                'text' => "New Announcement has been posted.\n\nTitle: $title\nDescription: $description.\n\nFor more information, kindly login to your account.\n"
            ]);
        }
    }
}
